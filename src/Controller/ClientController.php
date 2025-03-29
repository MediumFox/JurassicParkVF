<?php

namespace App\Controller;

use App\Entity\Client;
use App\Repository\ClientRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

#[Route('/client')]
final class ClientController extends AbstractController
{
    // Votre code existant ici ...

    // Route vers le profil du client avec les liens vers les autres pages
    #[Route('/profile', name: 'app_client_profile', methods: ['GET'])]
    public function profile(ClientRepository $clientRepository): Response
    {
        // Récupérer l'utilisateur actuellement connecté (client)
        $client = $this->getUser(); // On suppose que le client est l'utilisateur authentifié

        if (!$client) {
            // Si le client n'est pas connecté, rediriger vers la page d'accueil ou une page de connexion
            return $this->redirectToRoute('app_user_accueil');
        }

        // Vous pouvez aussi récupérer des informations supplémentaires sur le client depuis la base de données si nécessaire
        // $client = $clientRepository->find($client->getId());

        return $this->render('client/profile.html.twig', [
            'client' => $client,
            'links' => [
                'remboursement' => $this->generateUrl('app_client_remboursement'),
                'achat' => $this->generateUrl('app_client_achat'),
                'remboursement_billet' => $this->generateUrl('app_client_remboursement_billet'),
            ]
        ]);
    }

    // Route vers /client/remboursement
    #[Route('/remboursement', name: 'app_client_remboursement', methods: ['GET'])]
    public function remboursement(): Response
    {
        // Cette méthode pourrait récupérer des informations sur les remboursements du client
        // Retourner une vue avec les informations sur les remboursements

        return $this->render('client/remboursement.html.twig');
    }

    // Route vers /client/achat
    #[Route('/achat', name: 'app_client_achat', methods: ['GET'])]
    public function achat(): Response
    {
        // Cette méthode pourrait récupérer les informations d'achats du client
        // Retourner une vue avec les informations sur les achats

        return $this->render('client/achat.html.twig');
    }

    // Route vers /client/remboursementBillet
    #[Route('/remboursement-billet', name: 'app_client_remboursement_billet', methods: ['GET'])]
    public function remboursementBillet(): Response
    {
        // Cette méthode pourrait récupérer des informations sur les remboursements des billets
        // Retourner une vue avec les informations sur les remboursements de billets

        return $this->render('client/remboursement_billet.html.twig');
    }
}
