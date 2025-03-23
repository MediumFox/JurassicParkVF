<?php

namespace App\Controller;

use App\Entity\Client;
use App\Form\ClientRegistrationFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Mime\Email;

class ClientRegistrationController extends AbstractController
{
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

            $email = (new Email())
            ->from('no-reply@mon-site.com')
            ->to('axelrenard.pro@gmail.com')
            ->subject('Votre code de vérification')
            ->text("Votre code de vérification est : $otp");

            $mailer->send($email);


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

        return $this->render('registration/verify_otp.html.twig', [
            'client' => $client
        ]);
    }
}
