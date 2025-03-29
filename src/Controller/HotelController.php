<?php

namespace App\Controller;

use App\Entity\Hotel;
use App\Form\HotelType;
use App\Repository\HotelRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Utils\traitUploadImg;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

#[Route('/admin/hotel')]
final class HotelController extends AbstractController
{
    use traitUploadImg;
    
    #[Route(name: 'app_hotel_index', methods: ['GET'])]
    public function index(HotelRepository $hotelRepository): Response
    {
        return $this->render('hotel/index.html.twig', [
            'hotels' => $hotelRepository->findAll(),
            'hero'=> [
                'title'=> "L'index des hôtels",
                'description' => "Lorem Ipsum.",
                'enabled' => false,
            ],
            'entity' => 'hôtel',
            'formRoute' => $this->generateUrl('app_hotel_form')
        ]);
    }

    #[Route('/new', name: 'app_hotel_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager, SluggerInterface $slugger): JsonResponse
    {
        $hotel = new Hotel();
        $form = $this->createForm(HotelType::class, $hotel);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $imageFile = $form->get('imageHotel')->getData(); 
            if ($imageFile) {
                $imagePath = $this->uploadImg($imageFile, 'Hotels', $slugger);
    
                if ($imagePath === null) {
                    return new JsonResponse(['success' => false, 'message' => 'Erreur lors de l\'upload de l\'image']);
                }
    
                $hotel->setImageHotel($imagePath); 
            }
    
            $entityManager->persist($hotel);
            $entityManager->flush();

            return new JsonResponse(['success' => true]);
        }

        return new JsonResponse(['success' => false, 'errors' => (string) $form->getErrors(true, false)]);
    }

    #[Route('/new-form', name: 'app_hotel_form', methods: ['GET'])]
    public function getForm(Request $request, HotelRepository $hotelRepository): Response
    {
        $id = $request->query->get('id');
        $hotel = $id ? $hotelRepository->find($id) : new Hotel();
        $form = $this->createForm(HotelType::class, $hotel);
    
        return $this->render('reuse/_form.html.twig', [
            'form' => $form->createView(),
            'id' => $id,
            'type' => $hotel->getLibelleHotel() ? 'Mettre à jour' : 'Créer',
            'entity' => 'hotel',
        ]);
    }

    #[Route('/edit/{id}', name: 'app_hotel_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Hotel $hotel, EntityManagerInterface $entityManager, SluggerInterface $slugger): Response
    {
        $form = $this->createForm(HotelType::class, $hotel);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $imageFile = $form->get('imageDinosaure')->getData();

            if ($imageFile) {
                if ($hotel->getImageHotel()) {
                    $this->removeImg($hotel->getImageHotel(), 'Dinosaures');
                }
    
                $imagePath = $this->uploadImg($imageFile, 'Dinosaures', $slugger);
    
                if ($imagePath === null) {
                    return new JsonResponse(['success' => false, 'message' => 'Erreur lors de l\'upload de l\'image']);
                }
    
                $hotel->setImageHotel($imagePath);
            }
    
            $entityManager->flush();
            return new JsonResponse(['success' => true]);
        }
    
        return new JsonResponse([
            'success' => false,
            'errors' => (string) $form->getErrors(true, false)
        ]);
    }

    #[Route('/{id}', name: 'app_hotel_delete', methods: ['POST'])]
    public function delete(Request $request, Hotel $hotel, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete' . $hotel->getId(), $request->request->get('_token'))) {
            $entityManager->remove($hotel);
            $entityManager->flush();
        }
    
        $this->removeImg($hotel->getImageHotel(), 'Hotels');
        return $this->redirectToRoute('app_hotel_index', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/filter-libelle-hotel', name: 'app_hotel_filter_name', methods: ['GET'])]
    public function filterName(Request $request, HotelRepository $hotelRepository): JsonResponse
    {
        $libelle = $request->query->get('libelle');
        $hotel = $hotelRepository->filterName($libelle);

        if (!$hotel) {
            return new JsonResponse(['success' => false]);
        }
    
        $html = $this->renderView('hotel/_hotel_cards.html.twig', [
            'hotels' => $hotel,
        ]);
    
        return new JsonResponse([
            'success' => true,
            'html' => $html
        ]);
    }


}
