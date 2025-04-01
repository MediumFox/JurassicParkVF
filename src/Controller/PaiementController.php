<?php

namespace App\Controller;

use App\Utils\TraitEmailFormat;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Routing\Annotation\Route;

class PaiementController extends AbstractController
{
    use TraitEmailFormat;

    #[Route('/paiement', name: 'paiement')]
    public function formulairePaiement(): Response
    {
        return $this->render('paiement/paiement_form.html.twig',[
            'hero'=> [
                'title'=> "Formulaire de paiement",
                'description' => "Revenez en arrière s'il vous manque des articles.",
                'enabled' => true,
            ],
        ]);
    }

    #[Route('/paiement/confirmation', name: 'paiement_confirmation', methods: ['POST'])]
    public function confirmerPaiement(Request $request): Response
    {
        $numeroCarte = $request->request->get('numero_carte');
        $dateExpiration = $request->request->get('date_expiration');
        $cvv = $request->request->get('cvv');

        if ($numeroCarte && $dateExpiration && $cvv) {
            $this->addFlash('success', 'Paiement accepté !');
            return $this->redirectToRoute('point_retrait');
        } else {
            $this->addFlash('error', 'Informations de paiement invalides.');
            return $this->redirectToRoute('paiement');
        }
    }

    #[Route('/paiement/retrait', name: 'point_retrait')]
    public function pointRetrait(Request $request, MailerInterface $mailerInterface): Response
    {
        $client = $this->getUser();
        $pointsRetrait = [
            'Magasin 1 - Zone Volcanique',
            'Magasin 2 - Zone Jungle',
            'Magasin 3 - Zone Toundra'
        ];

        if($request->getMethod() === "POST"){
            $this->sendMailPaiementBoutique($client->getEmail(), $mailerInterface);
            return $this->redirectToRoute('app_user_accueil');
        }

        return $this->render('paiement/point_retrait.html.twig', [
            'pointsRetrait' => $pointsRetrait,
            'hero'=> [
                'title'=> "Les points de retrait",
                'description' => "Revenez en arrière s'il vous manque des articles.",
                'enabled' => true,
            ],
        ]);
    }
}
