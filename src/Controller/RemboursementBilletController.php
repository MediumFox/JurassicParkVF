<?php

// src/Controller/RemboursementBilletController.php
namespace App\Controller;

use App\Repository\PayerBilletRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RemboursementBilletController extends AbstractController
{
    #[Route("/client/remboursementBillet", name: "app_client_remboursement_billet", methods: ["GET"])]
    public function index(PayerBilletRepository $payerBilletRepository): Response
    {
        $client = $this->getUser();

        if (!$client) {
            return $this->redirectToRoute('app_login');
        }

        // Récupérer les billets achetés par l'utilisateur connecté
        $payerBillets = $payerBilletRepository->findBy(['user' => $client]);

        return $this->render('remboursement_billet/remboursement_billet.html.twig', [
            'payerBillets' => $payerBillets, // Liste des billets achetés
        ]);
    }
    // Nouvelle méthode pour gérer la demande de remboursement
    #[Route("/client/remboursement/{id}", name: "app_client_demande_remboursement_billet", methods: ["POST"])]
    public function demanderRemboursement(PayerBillet $payerBillet, Request $request, EntityManagerInterface $entityManager): Response
    {
        // Assurez-vous que l'utilisateur connecté est le propriétaire du billet
        $client = $this->getUser();
        if (!$client || $payerBillet->getUser() !== $client) {
            throw $this->createAccessDeniedException('Vous n\'avez pas l\'autorisation de demander un remboursement pour ce billet.');
        }

        // Traitement de la demande de remboursement
        $motif = $request->request->get('motif');

        // Vous pouvez ici ajouter la logique pour enregistrer le motif de remboursement ou d'autres actions liées
        // Par exemple, enregistrer une entité "DemandeRemboursement" associée à ce billet

        // Pour l'instant, on va juste afficher un message de succès
        $this->addFlash('success', 'Demande de remboursement envoyée avec succès.');

        // Rediriger vers la page d'index (la liste des billets)
        return $this->redirectToRoute('app_client_remboursement_billet');
    }
}
