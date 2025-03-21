<?php

namespace App\Controller;

use App\Entity\Restaurant;
use App\Form\RestaurantType;
use App\Repository\RestaurantRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

#[Route('/admin/restaurant')]
final class UserController extends AbstractController
{
    #[Route('/', name: 'app_user_accueil', methods: ['POST'])]
    public function home(Request $request, EntityManagerInterface $entityManager): Response
    {
        return $this->render('user/home.html.twig', []);
    }
}
