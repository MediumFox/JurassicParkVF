<?php

namespace App\Controller;

use App\Form\ChambreType;
use App\Entity\Restaurant;
use App\Form\RestaurantType;
use App\Repository\RestaurantRepository;
use App\Utils\traitUploadImg;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\String\Slugger\SluggerInterface;

#[Route('/admin/restaurant')]
final class RestaurantController extends AbstractController
{
    use traitUploadImg;

    #[Route(name: 'app_restaurant_index', methods: ['GET'])]
    public function index(RestaurantRepository $restaurantRepository): Response
    {
        return $this->render('restaurant/index.html.twig', [
            'restaurants' => $restaurantRepository->findAll(),
            'hero'=> [
                'title'=> "L'index des restaurants",
                'description' => "Lorem Ipsum.",
                'enabled' => false,
            ]
        ]);
    }

    #[Route('/new', name: 'app_restaurant_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager, SluggerInterface $slugger): JsonResponse
    {
        $restaurant = new Restaurant();
        $form = $this->createForm(RestaurantType::class, $restaurant);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $imageFile = $form->get('imageRestaurant')->getData(); 
            if ($imageFile) {
                $imagePath = $this->uploadImg($imageFile, 'Restaurants', $slugger);
    
                if ($imagePath === null) {
                    return new JsonResponse(['success' => false, 'message' => 'Erreur lors de l\'upload de l\'image']);
                }
    
                $restaurant->setImageRestaurant($imagePath); 
            }
            $entityManager->persist($restaurant);
            $entityManager->flush();

            return new JsonResponse(['success' => true]);
        }

        return new JsonResponse(['success' => false, 'errors' => (string) $form->getErrors(true, false)]);
    }


    #[Route('/new-form', name: 'app_restaurant_form', methods: ['GET'])]
    public function getForm(Request $request, RestaurantRepository $restaurantRepository): Response
    {
        $id = $request->query->get('id');
        $restaurant = $id ? $restaurantRepository->find($id) : new Restaurant();
        $form = $this->createForm(RestaurantType::class, $restaurant);
    
        return $this->render('reuse/_form.html.twig', [
            'form' => $form->createView(),
            'id' => $id,
            'type' => $restaurant->getLibelleRestaurant() ? 'Mettre à jour' : 'Créer',
            'entity' => 'restaurant',
        ]);
    }

    #[Route('/edit/{id}', name: 'app_restaurant_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Restaurant $restaurant, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(RestaurantType::class, $restaurant);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return new JsonResponse(['success' => true]);
        }
    
        return new JsonResponse([
            'success' => false,
            'errors' => (string) $form->getErrors(true, false)
        ]);
    }

    #[Route('/{id}', name: 'app_restaurant_delete', methods: ['POST'])]
    public function delete(Request $request, Restaurant $restaurant, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$restaurant->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($restaurant);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_restaurant_index', [], Response::HTTP_SEE_OTHER);
    }
}
