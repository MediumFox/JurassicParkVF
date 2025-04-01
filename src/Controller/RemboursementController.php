<?php

// src/Controller/RemboursementController.php
namespace App\Controller;

use App\Entity\Remboursement;
use App\Repository\RemboursementRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Doctrine\ORM\EntityManagerInterface;

class RemboursementController extends AbstractController
{
    #[Route('/client/remboursement', name: 'app_client_remboursement')]
    public function indexRemboursement(RemboursementRepository $remboursementRepository): Response
    {
        $client = $this->getUser();
        if (!$client) {
            return $this->redirectToRoute('app_login'); 
        }

        $demandesRemboursement = $remboursementRepository->findBy(['client' => $client]);

        return $this->render('remboursement/remboursement.html.twig', [
            'demandesRemboursement' => $demandesRemboursement, 
            'hero'=> [
                'title'=> "Les demandes de remboursements en cours",
                'description' => "",
                'enabled' => true,
            ],
            'page'=>'3',
        ]);
    }

    #[Route('/admin/remboursement', name: 'app_admin_remboursement')]
    public function adminIndex(RemboursementRepository $remboursementRepository): Response
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');

        $demandesRemboursement = $remboursementRepository->findAll();

        return $this->render('remboursement/admin_remboursement.html.twig', [
            'demandesRemboursement' => $demandesRemboursement,
            'hero'=> [
                'title'=> "Les demandes de remboursements en cours",
                'description' => "",
                'enabled' => false,
            ],
        ]);
    }

    #[Route('/admin/remboursement/update/{id}', name: 'app_admin_remboursement_update', methods: ['POST'])]
    public function updateStatus(Request $request, Remboursement $remboursement, EntityManagerInterface $entityManager): Response
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');

        $status = $request->request->get('status');

        if (!in_array($status, ['Accepté', 'Refusé'])) {
            $this->addFlash('error', 'Statut invalide.');
            return $this->redirectToRoute('app_admin_remboursement');
        }

        $remboursement->setStatut($status);
        $entityManager->flush();

        // Réponse JSON pour AJAX
        return new JsonResponse(['success' => true, 'newStatut' => $status]);
    }


    #[Route('/admin/remboursement/{id}/statut', name: 'app_admin_update_remboursement', methods: ['POST'])]
    public function updateStatut(
        int $id,
        Request $request,
        RemboursementRepository $remboursementRepository,
        EntityManagerInterface $entityManager
    ): JsonResponse {
        $remboursement = $remboursementRepository->find($id);

        if (!$remboursement) {
            return new JsonResponse(['success' => false, 'message' => 'Remboursement introuvable'], 404);
        }

        $statut = $request->request->get('statut');

        if (!in_array($statut, ['Accepté', 'Refusé'])) {
            return new JsonResponse(['success' => false, 'message' => 'Statut invalide'], 400);
        }

        $remboursement->setStatut($statut);
        $entityManager->flush();

        return new JsonResponse(['success' => true, 'newStatut' => $statut]);
    }

}
