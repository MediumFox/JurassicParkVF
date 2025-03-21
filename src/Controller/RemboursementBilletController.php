<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class RemboursementBilletController extends AbstractController
{
    #[Route('/remboursement/billet', name: 'app_remboursement_billet')]
    public function index(): Response
    {
        return $this->render('remboursement_billet/index.html.twig', [
            'controller_name' => 'RemboursementBilletController',
        ]);
    }
}
