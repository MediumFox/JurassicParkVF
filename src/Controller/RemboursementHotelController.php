<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class RemboursementHotelController extends AbstractController
{
    #[Route('/remboursement/hotel', name: 'app_remboursement_hotel')]
    public function index(): Response
    {
        return $this->render('remboursement_hotel/index.html.twig', [
            'controller_name' => 'RemboursementHotelController',
        ]);
    }
}
