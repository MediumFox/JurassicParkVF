<?php

namespace App\Controller;

use App\Entity\Client;
use App\Form\ClientRegistrationFormType;
use App\Utils\TraitEmailFormat;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;


class ClientRegistrationController extends AbstractController
{
    use TraitEmailFormat;

    #[Route('/register', name: 'app_register_client')]
    public function register(
        Request $request,
        UserPasswordHasherInterface $passwordHasher,
        EntityManagerInterface $entityManager,
        MailerInterface $mailer
    ): Response {
        $client = new Client();
        $form = $this->createForm(ClientRegistrationFormType::class, $client);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $hashedPassword = $passwordHasher->hashPassword(
                $client,
                $form->get('plainPassword')->getData()
            );
            $client->setPassword($hashedPassword);
            $client->setRoles(['ROLE_CLIENT']);

            $otp = random_int(100000, 999999);
            $client->setOtp($otp);

            $entityManager->persist($client);
            $entityManager->flush();

            $resultEmail = $this->sendEmailOtp($client->getEmail(), $otp, $mailer);

            return $this->redirectToRoute('app_verify_otp', ['id' => $client->getId()]);
        }

        return $this->render('registration/register_client.html.twig', [
            'registrationForm' => $form->createView(),
        ]);
    }

    #[Route('/verify-otp/{id}', name: 'app_verify_otp')]
    public function verifyOtp(Request $request, Client $client, EntityManagerInterface $entityManager): Response
    {
        
        if ($request->isMethod('POST')) {
            $enteredOtp = '';
            for ($i = 1; $i <= 6; $i++) {
                $enteredOtp .= $request->request->get('v' . $i);
            }

            if ($client->getOtp() === $enteredOtp) {
                $client->setOtp(null); 
                $client->setIsVerified(true);
                $entityManager->flush();

                return $this->redirectToRoute('app_login');
            } else {
                $this->addFlash('danger', 'Code OTP incorrect.');
            }
        }
        $request->getSession()->set('id', $client->getId());
        return $this->render('registration/verify_otp.html.twig', [
            'client' => $client
        ]);
    }

    #[Route('/resendOtp', name: 'app_resend_otp')]
    public function resendOtp(Request $request, EntityManagerInterface $entityManager, MailerInterface $mailer): JsonResponse
    {
        $id = $request->getSession()->get('id');
    
        if (!$id || !is_numeric($id)) {
            return new JsonResponse([
                'success' => false,
                'message' => 'ID manquant dans la session. ID reçu : ' . var_export($id, true)
            ]);
        }
    
        $client = $entityManager->getRepository(Client::class)->find($id);
    
        if (!$client) {
            return new JsonResponse([
                'success' => false,
                'message' => 'Client introuvable pour l\'ID : ' . $id
            ]);
        }
    
        $otp = random_int(100000, 999999);
        $client->setOtp($otp);
        $entityManager->flush();

        $resultEmail = $this->sendEmailOtp($client->getEmail(), $otp, $mailer);

        if(!$resultEmail)
        {
            return new JsonResponse([
                'success' => false,
                'message' => "Problème dans l'envoie du code"
            ]);
        }
    
        return new JsonResponse([
            'success' => true,
            'message' => 'Un nouveau code a été envoyé.'
        ]);
    }
    
    
}
