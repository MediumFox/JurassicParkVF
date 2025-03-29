<?php

// src/Controller/RemboursementBilletController.php
namespace App\Controller;

use App\Entity\PayerBillet;  // Corrigez l'importation ici
use App\Entity\Remboursement;
use App\Entity\RemboursementBillet;
use App\Repository\PayerBilletRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;

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
            'payerBillets' => $payerBillets,
        ]);
    }

    #[Route("/client/remboursement/{id}", name: "app_client_demande_remboursement_billet", methods: ["POST"])]
    // src/Controller/RemboursementBilletController.php

    public function demanderRemboursement(PayerBillet $payerBillet, Request $request, EntityManagerInterface $entityManager): Response
    {
        $client = $this->getUser();
        if (!$client || $payerBillet->getUser() !== $client) {
            throw $this->createAccessDeniedException('Vous n\'avez pas l\'autorisation de demander un remboursement pour ce billet.');
        }

        // Traitement de la demande de remboursement
        $motif = $request->request->get('motif');
        $montant = $payerBillet->getBillet()->getPrixBillet();  // Utiliser le montant du billet

        // Création d'un objet Remboursement
        $remboursement = new Remboursement();
        $remboursement->setClient($client);
        $remboursement->setDateDemande(new \DateTime()); // La date de la demande
        $remboursement->setStatut('en cours'); // Par défaut, le statut est "en cours"
        $remboursement->setMotif($motif);
        $remboursement->setMontant($montant);
        $remboursement->setBillet($payerBillet);

        // Lier ce remboursement à un billet
        // Assurez-vous que c'est bien un PayerBillet et pas un FormatBillet
        $remboursementBillet = new RemboursementBillet();
        $remboursementBillet->setRemboursement($remboursement);
        $remboursementBillet->setBillet($payerBillet);  // Assurez-vous de passer PayerBillet, pas FormatBillet
        // Vous pouvez ajouter d'autres propriétés au besoin

        // Ajouter le remboursement à l'entité Remboursement
        $remboursement->addRemboursementBillet($remboursementBillet);

        // Sauvegarder la demande de remboursement dans la base de données
        $entityManager->persist($remboursement);
        $entityManager->persist($remboursementBillet);
        $entityManager->flush();

        $this->addFlash('success', 'Demande de remboursement envoyée avec succès.');

        return $this->redirectToRoute('app_client_remboursement_billet');
    }
}