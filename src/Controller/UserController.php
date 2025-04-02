<?php

namespace App\Controller;

use App\Entity\OuvertureRestaurant;
use App\Entity\Restaurant;
use App\Form\RestaurantType;
use App\Repository\HotelRepository;
use App\Repository\LouerHotelRepository;
use App\Repository\OuvertureRestaurantRepository;
use App\Repository\UserRepository;
use App\Utils\TraitEmailFormat;

use Symfony\Component\Mime\Email;
use App\Repository\DinosaureRepository;
use App\Repository\RestaurantRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\JsonResponse;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Mailer\Exception\TransportExceptionInterface;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;


final class UserController extends AbstractController
{   
    private HotelRepository $hotelRepository;
    private RestaurantRepository $restaurantRepository;

    use TraitEmailFormat;
    public function __construct(HotelRepository $hotelRepository, RestaurantRepository $restaurantRepository)
    {
        $this->hotelRepository = $hotelRepository;
        $this->restaurantRepository = $restaurantRepository;
    }

    #[Route('/', name: 'app_user_accueil', methods: ['POST'])]
    public function home(LouerHotelRepository $louerHotelRepository, OuvertureRestaurantRepository $ouvertureRestaurantRepository): Response
    {
        $randomHotels = $this->getRandomHotels();
        $randomRestaurants = $this->getRandomRestaurants();
        $dataH = [];
        $dataR = [];
        foreach ($randomHotels as $key => $value) {
            $note = $louerHotelRepository->noteHotel($value->getId());
            $dataH[] = [
                'hotel'=>$value,
                'note'=>$note,
            ] ;
        }

        foreach ($randomRestaurants as $key => $value) {
            $horaires = $ouvertureRestaurantRepository->horaireRestaurant($value->getId());
            $dataR[] = [
                'restaurant' => $value,
                'horaires' => $horaires,
            ];
            
        }

        return $this->render('user/home.html.twig', [
            'randomHotels'=> $dataH,
            'randomRestaurants' => $dataR
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

    #[Route('/mot-de-passe-oublie', name: 'app_mdp_forgotten', methods: ['GET','POST'])]
    public function motDePasseOublie(Request $request, EntityManagerInterface $entityManager, UserRepository $userRepository, MailerInterface $mailerInterface): Response
    {
        if ($request->isMethod('POST')) {
            $email = $request->request->get('email');
            $user = $userRepository->findOneBy(['email' => $email]);
        
            if ($user) {
                $token = bin2hex(random_bytes(32));
                $user->setResetToken($token);
                $user->setResetTokenExpiration(new \DateTime('+1 hour'));
        
                $entityManager->flush();
        
                $resetLink = $this->generateUrl('app_reset_password', [
                    'token' => $token,
                ], UrlGeneratorInterface::ABSOLUTE_URL);
                $this->sendMailResetPwd($email, $resetLink, $mailerInterface);
            }
        }
        return $this->render('security/forgottenPassword.html.twig', [
        ]);
    }

    #[Route('/reset-password/{token}', name: 'app_reset_password', methods: ['GET', 'POST'])]
    public function resetPassword(string $token, Request $request, UserRepository $userRepository, EntityManagerInterface $entityManagerInterface,UserPasswordHasherInterface $passwordHasher): Response
    {
        $user = $userRepository->findOneBy(['resetToken' => $token]);

        if (!$user || $user->getResetTokenExpiration() < new \DateTime()) {
            throw $this->createNotFoundException('Lien invalide ou expiré');
        }

        if ($request->isMethod('POST')) {
            $newPassword = $request->request->get('password');
            $hashedPassword = $passwordHasher->hashPassword($user, $newPassword);

            $user->setPassword($hashedPassword);
            $user->setResetToken(null);
            $user->setResetTokenExpiration(null);
            $entityManagerInterface->flush();

            return $this->redirectToRoute('app_login');
        }

        return $this->render('security/resetPassword.html.twig', [
            'token' => $token,
        ]);
    }


    #[Route('/hotel/{id}', name: 'app_un_hotel', methods: ['GET'])]
    public function afficherUnHotel(int $id ,Request $request, HotelRepository $hotelRepository): Response
    {
        $hotel = $hotelRepository->find($id);
        $libelle = $hotel->getLibelleHotel();
        $desc = $hotel->getDescriptionHotel();
        return $this->render('hotel/un-hotel.html.twig', [
            'hotel' => $hotel,
            'hero'=> [
                'title'=> "Hôtel $libelle",
                'description' => "$desc",
                'enabled' => true,
            ]
        ]);
    }

    #[Route('/restaurant/{id}', name: 'app_un_restaurant', methods: ['GET'])]
    public function afficherUnRestaurant(int $id ,Request $request, RestaurantRepository $restaurantRepository): Response
    {
        $restaurant = $restaurantRepository->find($id);
        $libelle = $restaurant->getLibelleRestaurant();
        return $this->render('restaurant/un-restaurant.html.twig', [
            'restaurant' => $restaurant,
            'hero'=> [
                'title'=> "Le restaurant $libelle",
                'description' => "Nos restaurants vous font la promesse de la plus haute qualité de service mais aussi de sensations.",
                'enabled' => true,
            ]
        ]);
    }

    #[Route('/en-cours-de-developpement', name: 'app_cours_developpement', methods: ['GET'])]
    public function incoming(): Response
    {
        return $this->render('reuse/incoming.html.twig', [
        ]);
    }

    #[Route('/histoire', name: 'app_histoire', methods: ['GET'])]
    public function histoire(): Response
    {
        return $this->render('user/histoire.html.twig', [
            'hero'=> [
                'title'=> "L'histoire de notre île",
                'description' => "Explorez notre encyclopédie remplie d'histoires fascinantes.",
                'enabled' => true,
            ]
        ]);
    }
}
