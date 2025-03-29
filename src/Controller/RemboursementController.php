<?php

// src/Controller/RemboursementController.php
namespace App\Controller;

use App\Repository\RemboursementRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RemboursementController extends AbstractController
{
    #[Route('/client/remboursement', name: 'app_client_remboursement')]
    public function index(RemboursementRepository $remboursementRepository): Response
    {
        // Vérifier si l'utilisateur est connecté
        $client = $this->getUser();
        if (!$client) {
            return $this->redirectToRoute('app_login'); // Redirige vers la page de connexion si non connecté
        }

        // Récupérer toutes les demandes de remboursement du client
        $demandesRemboursement = $remboursementRepository->findBy(['client' => $client]);

        // Rendre la vue avec les demandes de remboursement
        return $this->render('remboursement/remboursement.html.twig', [
            'demandesRemboursement' => $demandesRemboursement, // Passer la variable à la vue
        ]);
    }
}
