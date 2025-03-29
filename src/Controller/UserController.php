<?php

namespace App\Controller;

use App\Entity\Restaurant;
use App\Form\RestaurantType;
use App\Repository\HotelRepository;
use Symfony\Component\Mime\Email;
use App\Repository\DinosaureRepository;
use App\Repository\RestaurantRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\JsonResponse;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Mailer\Exception\TransportExceptionInterface;


final class UserController extends AbstractController
{   
    private HotelRepository $hotelRepository;
    private RestaurantRepository $restaurantRepository;
    public function __construct(HotelRepository $hotelRepository, RestaurantRepository $restaurantRepository)
    {
        $this->hotelRepository = $hotelRepository;
        $this->restaurantRepository = $restaurantRepository;
    }

    #[Route('/', name: 'app_user_accueil', methods: ['POST'])]
    public function home(Request $request, EntityManagerInterface $entityManager): Response
    {
        $randomHotels = $this->getRandomHotels();
        $randomRestaurants = $this->getRandomRestaurants();
        return $this->render('user/home.html.twig', [
            'randomHotels'=> $randomHotels,
            'randomRestaurants' => $randomRestaurants
        ]);
    }

    #[Route('/dinopedia', name: 'app_dinopedia', methods: ['GET'])]
    public function dinopedia(DinosaureRepository $dinosaureRepository): Response
    {
        return $this->render('dinosaure/dinopedia.html.twig', [
            'dinosaures' => $dinosaureRepository->findAll(),
            'hero'=> [
                'title'=> "Dinopédia",
                'description' => "Explorez notre encyclopédie de dinosaures fascinants.",
                'enabled' => true,
            ]
        ]);
    }

    #[Route('/filter-libelle-dinopedia', name: 'app_dinopedia_filter_name', methods: ['GET'])]
    public function filterName(Request $request, DinosaureRepository $dinosaureRepository): JsonResponse
    {
        $libelle = $request->query->get('libelle');
        $regime = $request->query->get('regime');
        $ere = $request->query->get('ere');
        $results = $dinosaureRepository->filterName($libelle, $regime, $ere);
        $data = [];

        foreach ($results as $dinosaure) {
            $data[] = [
                'id' => $dinosaure->getId(),
                'nom' => $dinosaure->getLibelleDinosaure(),
                'regime' => $dinosaure->getRegimeDinosaure(),
                'description' => $dinosaure->getDescriptionDinosaure(),
                'ere' => $dinosaure->getEreDinosaure(),
                'image' => $dinosaure->getImageDinosaure()
            ];
        }
    
        return new JsonResponse([
            'success' => true,
            'count' => count($data),
            'results' => $data
        ]);
    }

    #[Route('/dinopedia/{id}', name: 'app_dinopedia_dino', methods: ['GET'])]
    public function unDino(int $id, DinosaureRepository $dinosaureRepository): JsonResponse
    {
        $unDino = $dinosaureRepository->find($id);
        $nextId = $dinosaureRepository->findNextId($id);
        $previousId = $dinosaureRepository->findPreviousId($id);
        if ($unDino) {
            return new JsonResponse([
                'success' => true,
                'dinosaure' => [
                    'id' => $unDino->getId(),
                    'libelle' => $unDino->getLibelleDinosaure(),
                    'description' => $unDino->getDescriptionDinosaure(),
                    'image' => $unDino->getImageDinosaure(),
                    'ere'=> $unDino->getEreDinosaure(),
                    'regime'=>$unDino->getRegimeDinosaure(),
                ],
                'nextId' =>[
                    'id'=>  $nextId ? $nextId->getId() : null,
                    'libelle'=> $nextId ? $nextId->getLibelleDinosaure() : null,
                ],
                'previousId' =>[
                    'id'=>  $previousId ? $previousId->getId() : null,
                    'libelle'=> $previousId ? $previousId->getLibelleDinosaure() : null,
                ]
            ]);
        }
        return new JsonResponse(['success' => false]);
    }

    private function getRandomHotels(int $count = 4): array
    {
        $hotels = $this->hotelRepository->findAll();
        shuffle($hotels);
        return array_slice($hotels, 0, $count);
    }

    private function getRandomRestaurants(int $count = 4): array
    {
        $restaurants = $this->restaurantRepository->findAll();
        shuffle($restaurants);
        return array_slice($restaurants, 0, $count);
    }
}
