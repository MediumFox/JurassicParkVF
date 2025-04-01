<?php

namespace App\Controller;

use App\Entity\PayerBillet;
use App\Entity\Remboursement;
use App\Entity\RemboursementBillet;
use App\Repository\PayerBilletRepository;
use App\Repository\RemboursementRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;

class RemboursementBilletController extends AbstractController
{
    #[Route("/client/remboursementBillet", name: "app_client_remboursement_billet", methods: ["GET"])]
    public function index(PayerBilletRepository $payerBilletRepository, RemboursementRepository $remboursementRepository): Response
    {
        $client = $this->getUser();

        if (!$client) {
            return $this->redirectToRoute('app_login');
        }

        // Récupérer les billets achetés par l'utilisateur connecté
        $payerBillets = $payerBilletRepository->findBy(['user' => $client]);

        // Vérifier s'il existe déjà une demande de remboursement pour chaque billet
        foreach ($payerBillets as $payerBillet) {
            // Vérifier si une demande de remboursement existe déjà pour ce billet
            $remboursementExist = $remboursementRepository->findOneBy([
                'billet' => $payerBillet,
                'statut' => ['en cours', 'Accepté','Refusé'] // Vérifier si une demande est en cours ou traitée
            ]);

            // Ajouter un attribut dynamique à chaque billet pour contrôler l'affichage du bouton
            $payerBillet->remboursementPossible = !$remboursementExist; // Bloquer la possibilité si une demande existe
        }

        return $this->render('remboursement_billet/remboursement_billet.html.twig', [
            'payerBillets' => $payerBillets,
            'hero'=> [
                'title'=> "Vos achats de billets",
                'description' => "",
                'enabled' => true,
            ],
            'page'=>'1',
        ]);
    }

    #[Route("/client/remboursement/{id}", name: "app_client_demande_remboursement_billet", methods: ["POST"])]
    public function demanderRemboursement(PayerBillet $payerBillet, Request $request, EntityManagerInterface $entityManager, RemboursementRepository $remboursementRepository): Response
    {
        $client = $this->getUser();
        if (!$client || $payerBillet->getUser() !== $client) {
            throw $this->createAccessDeniedException('Vous n\'avez pas l\'autorisation de demander un remboursement pour ce billet.');
        }

        // Vérification si une demande existe déjà pour ce billet
        $remboursementExist = $remboursementRepository->findOneBy([
            'billet' => $payerBillet,
            'statut' => ['en cours', 'traite'] // Vérifier si une demande est déjà en cours ou traitée
        ]);

        if ($remboursementExist) {
            $this->addFlash('error', 'Une demande de remboursement est déjà en cours ou traitée pour ce billet.');
            return $this->redirectToRoute('app_client_remboursement_billet');
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
        $remboursementBillet = new RemboursementBillet();
        $remboursementBillet->setRemboursement($remboursement);
        $remboursementBillet->setBillet($payerBillet);

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
