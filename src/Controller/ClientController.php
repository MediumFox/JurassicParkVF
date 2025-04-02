<?php

namespace App\Controller;

use App\Entity\ReserverRestaurant;
use App\Repository\ChambreRepository;
use App\Repository\LouerHotelRepository;
use App\Utils\TraitEmailFormat;
use DateTime;
use App\Entity\Date;
use App\Entity\Client;
use App\Entity\LouerHotel;
use App\Entity\PayerBillet;
use App\Form\ReserverBilletType;
use App\Repository\HotelRepository;
use App\Repository\ClientRepository;
use App\Repository\RestaurantRepository;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\FormatBilletRepository;
use App\Repository\FormatChambreRepository;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

#[Route('/client')]
final class ClientController extends AbstractController
{
    use TraitEmailFormat;

    #[Route(name: 'app_client_index', methods: ['GET'])]
    public function index(ClientRepository $clientRepository): Response
    {
        return $this->render('client/index.html.twig', [
            'clients' => $clientRepository->findAll(),
        ]);
    }

    #[Route('/profile', name: 'app_client_profile', methods: ['GET', 'POST'])]
    public function profile(ClientRepository $clientRepository, Request $request, EntityManagerInterface $entityManagerInterface): Response
    {
        $client = $this->getUser(); 

        if (!$client) {
            return $this->redirectToRoute('app_user_accueil');
        }

        if ($request->getMethod() === 'POST') {
            $client->setEmail($request->request->get('email'));
            $client->setNom($request->request->get('nom'));
            $client->setPrenom($request->request->get('prenom'));
            $client->setNumeroTelephone($request->request->get('numeroTelephone'));
            $client->setAdressePostal($request->request->get('adressePostal'));
            $client->setCodePostal($request->request->get('codePostal'));
        
            $entityManagerInterface->persist($client);
            $entityManagerInterface->flush();
        }
        

        return $this->render('client/profile.html.twig', [
            'client' => $client,
            'hero'=> [
                'title'=> "Mon espace client",
                'description' => "",
                'enabled' => true,
            ],
            'page'=>'2',
        ]);
    }

    #[Route('/hotel-loue', name: 'app_hotel_loue', methods: ['GET', 'POST'])]
    public function hotelLoue(LouerHotelRepository $louerHotelRepository, ChambreRepository $chambreRepository, HotelRepository $hotelRepository): Response
    {
        $client = $this->getUser(); 

        $data = $louerHotelRepository->findBy(['user' => $client]);
        $array = [];
        
        foreach ($data as $value) {
            $chambre = $chambreRepository->find($value->getChambre());
            $hotel = $hotelRepository->find($chambre->getHotel());
            $date = $value->getDate();
            if (!in_array($hotel, $array, true)) {
                $array[] = [
                    'hotel' => $hotel,
                    'date' => $date->getId(),
                    'note'=> $value->getNote(),
                    'dateDeb'=> $value->getDebutLocation(),
                ];
            }
        }
        
        if (!$client) {
            return $this->redirectToRoute('app_user_accueil');
        }

        return $this->render('client/louer-hotel.html.twig', [
            'data'=> $array,
            'client' => $client,
            'hero'=> [
                'title'=> "Vos hôtels loués",
                'description' => "Retrouvez ci-dessous la liste des hotels que vous avez loué",
                'enabled' => true,
            ],
            'page'=>'4',
        ]);
    }

    
    #[Route('/change-note', name: 'app_change_note', methods: ['GET'])]
    public function changeNote(LouerHotelRepository $louerHotelRepository, Request $request): JsonResponse
    {
        $value = $request->query->get('value');
        $date = (int)$request->query->get('date');


        $result = $louerHotelRepository->updateNote( $date, $value);

        return new JsonResponse(['success' => true]);
    }
    
    #[Route('/reserver-aventure/billet', name: 'app_client_payer', methods: ['POST', 'GET'])]
    public function reserverBillet(Request $request, FormatBilletRepository $formatBilletRepository): Response
    {
        $payerBillet = new PayerBillet();
        $form = $this->createForm(ReserverBilletType::class, $payerBillet);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $prenoms = $request->request->all('prenom');
            $noms = $request->request->all('nom');
            $fBillets = $request->request->all('fBillet');
            $prixBillets = $request->request->get('prixBillets');
            $request->getSession()->remove('payer_billet_data');
            $request->getSession()->set('payer_billet_data', [
                'form' => $payerBillet,
                'prenoms' => $prenoms,
                'noms' => $noms,
                'billets' => $fBillets
            ]);
            $request->getSession()->set('prixBillet', $prixBillets);
            return $this->redirectToRoute('app_client_louer');
        }
        $data = null;
        if ($request->getSession()->get('payer_billet_data')) {
            $sessionData = $request->getSession()->get('payer_billet_data');
            $formData = $sessionData['form'];
        
            $data = [
                'debutBillet' => $formData->getDebutBillet()?->format('Y-m-d'),
                'finBillet' => $formData->getFinBillet()?->format('Y-m-d'),
                'prenoms' => $sessionData['prenoms'],
                'noms' => $sessionData['noms'],
                'billets' => $sessionData['billets']
            ];
        }        

        return $this->render('client/reserver-aventure.html.twig', [
            'form' => $form->createView(),
            'type' => 'billet',
            'formatsBillet'=> $formatBilletRepository->findAll(),
            'hero'=> [
                'title'=> "Réserver votre aventure",
                'description' => "Lorem Ipsum.",
                'enabled' => false,
            ],
            'data'=>$data
        ]);
    }

    #[Route('/reserver-aventure/hotel', name: 'app_client_louer', methods: ['POST', 'GET'])]
    public function louerHotel(Request $request, HotelRepository $hotelRepository, FormatChambreRepository $formatChambreRepository): Response
    {
        if(!$request->getSession()->get('payer_billet_data')){
            return $this->redirectToRoute('app_user_accueil');
        }

        if ($request->isMethod('POST')) {
            $hotelId = $request->request->get('choixHotel');
            $formatId = $request->request->all('fChambre');
            $prixTotal = $request->request->get('prixTotal');
            $data = [
                'hotel_id' => $hotelId,
                'format_chambre_id' => $formatId,
                'prixTotal'=> $prixTotal
            ];
            $request->getSession()->remove('louer_hotel_data');
            $request->getSession()->set('louer_hotel_data', $data);
            return $this->redirectToRoute('app_client_reserver');
        }

        $data = null;
        if ($request->getSession()->get('louer_hotel_data')) {
            $sessionData = $request->getSession()->get('louer_hotel_data');
        
            $data = [
                'hotel_id' => $sessionData['hotel_id'],
                'fChambres' => $sessionData['format_chambre_id']
            ];
        }      
    
        $prixBillet = $request->getSession()->get('prixBillet');
        return $this->render('client/reserver-aventure.html.twig', [
            'type' => 'hotel',
            'hotels'=> $hotelRepository->findAll(),
            'formatChambre'=> $formatChambreRepository->findAll(),
            'hero'=> [
                'title'=> "Réserver votre aventure",
                'description' => "Restaurants.",
                'enabled' => false,
            ],
            'prixBillet'=>$prixBillet,
            'data'=>$data
        ]);
    }

    #[Route('/reserver-aventure/restaurant', name: 'app_client_reserver', methods: ['POST', 'GET'])]
    public function reserverRestaurant(Request $request, RestaurantRepository $restaurantRepository): Response
    {
        if(!$request->getSession()->get('payer_billet_data') && !$request->getSession()->get('louer_hotel_data')){
            return $this->redirectToRoute('app_client_payer');
        }

        if ($request->isMethod('POST')) {
            $choixRes = $request->request->get('choixRes');
 
            if($choixRes != "non"){
                $dateReservation = $request->request->get('dateReservation');
                $choixRestaurant = $request->request->get('choixRestaurant');
                $data = [
                    'dateReservation' => $dateReservation,
                    'choixRestaurant' => $choixRestaurant,
                ];
                $request->getSession()->remove('reserver_restaurant_data');
                $request->getSession()->set('reserver_restaurant_data', $data);
            }

            $request->getSession()->set('choixRes', $choixRes);
            return $this->redirectToRoute('app_client_recapitulatif');
        }
        $data = null;
        if ($request->getSession()->get('reserver_restaurant_data')) {
            $sessionData = $request->getSession()->get('reserver_restaurant_data');
            $choixRes = $request->getSession()->get('choixRes');
            $data = [
                'choixRes' => $choixRes,
                'choixRestaurant' => $sessionData['choixRestaurant'],
                'dateReservation' => $sessionData['dateReservation']
            ];
        }      
        return $this->render('client/reserver-aventure.html.twig', [
            'type' => 'restaurant',
            'restaurants'=> $restaurantRepository->findAll(),
            'hero'=> [
                'title'=> "Réserver votre aventure",
                'description' => "Hotels.",
                'enabled' => false,
            ],
            'data'=> $data
        ]);
    }

    #[Route('/reserver-aventure/recapitulatif', name: 'app_client_recapitulatif', methods: ['GET', 'POST'])]
    public function recapitulatifCommande(Request $request,RestaurantRepository $restaurantRepository,FormatBilletRepository $formatBilletRepository, HotelRepository $hotelRepository, FormatChambreRepository $formatChambreRepository): Response
    {
        if(!$request->getSession()->get('payer_billet_data') && !$request->getSession()->get('louer_hotel_data') && !$request->getSession()->get('reserver_restaurant_data')){
            return $this->redirectToRoute('app_client_payer');
        }

        $lesFormatsBillets = $formatBilletRepository->findAll();
        $lesHotels = $hotelRepository->findAll();
        $lesFormatsChambres = $formatChambreRepository->findAll();
        $lesRestaurants = $restaurantRepository->findAll();

        $billets = $request->getSession()->get('payer_billet_data');
        $hotel = $request->getSession()->get('louer_hotel_data');
        $restaurant = $request->getSession()->get('reserver_restaurant_data');
        return $this->render('client/reserver-aventure.html.twig', [
            'type' => 'récapitulatif',
            'hero'=> [
                'title'=> "Réserver votre aventure",
                'description' => "Voici le récapitulatif de votre commande",
                'enabled' => false,
            ],
            'billets'=> $billets,
            'hotel'=> $hotel,
            'restaurant'=>$restaurant,
            'formats'=>$lesFormatsBillets,
            'lesHotels' => $lesHotels,
            'lesFormatsChambres' => $lesFormatsChambres,
            'lesRestaurants'=>$lesRestaurants,
        ]);
    }

    #[Route('/reserver-aventure/insert', name: 'app_client_insert', methods: ['POST', 'GET'])]
    public function insertDataReservation(MailerInterface $mailerInterface,Request $request, ChambreRepository $chambreRepository,RestaurantRepository $restaurantRepository,EntityManagerInterface $entityManager,FormatBilletRepository $formatBilletRepository, HotelRepository $hotelRepository, FormatChambreRepository $formatChambreRepository): Response
    {
        if(!$request->getSession()->get('payer_billet_data') && !$request->getSession()->get('louer_hotel_data') && !$request->getSession()->get('reserver_restaurant_data')){
            return $this->redirectToRoute('app_client_payer');
        }
        $client = $this->getUser();
        $payerBilletData = $request->getSession()->get('payer_billet_data');
        $prenoms = $payerBilletData['prenoms'];
        $noms = $payerBilletData['noms'];
        $billets = $payerBilletData['billets'];

        $debutBillet = $payerBilletData['form']->getDebutBillet();
        $finBillet = $payerBilletData['form']->getFinBillet();
        
        $created = new DateTime();
        $date = new Date();
        $date->setDate($created);
        $entityManager->persist($date);
        $entityManager->flush();

        foreach ($prenoms as $key => $value) {
            $unBillet = $formatBilletRepository->find($billets[$key]);

            $payerBillet = new PayerBillet();
            $payerBillet->setUser($client);
            $payerBillet->setDebutBillet($debutBillet);
            $payerBillet->setFinBillet($finBillet);
            $payerBillet->setNom($noms[$key]);
            $payerBillet->setPrenom($value);
            $payerBillet->setBillet($unBillet);
            $payerBillet->setDate($date);

            $entityManager->persist($payerBillet);
        }

        $louerHotelData = $request->getSession()->get('louer_hotel_data');
        $hotelId = $louerHotelData['hotel_id'];
        $formatChambre = $louerHotelData['format_chambre_id'];

        $hotel = $hotelRepository->find($hotelId);

        foreach ($formatChambre as $key => $value) {
            $chambre = $formatChambreRepository->find($value);
            $uneChambre =  $chambreRepository->findChamberReservation($hotel, $chambre);
            $louerHotel = new LouerHotel();
            $louerHotel->setUser($client);
            $louerHotel->setDate($date);
            $louerHotel->setDebutLocation($debutBillet);
            $louerHotel->setFinLocation($finBillet);
            $louerHotel->setChambre($uneChambre);
            $louerHotel->setNote(null);
            $entityManager->persist($louerHotel);
        }

        $choixRes = $request->getSession()->get('choixRes');
        $reserverRestaurantData = $request->getSession()->get('reserver_restaurant_data');
        if($choixRes == "oui"){
            $restaurantId = $reserverRestaurantData['choixRestaurant'];
            $dateReservationStr = $reserverRestaurantData['dateReservation'];
            $dateReservation = DateTime::createFromFormat('Y-m-d\TH:i', $dateReservationStr);

            $restaurant = $restaurantRepository->find($restaurantId);
            $reserverRestaurant = new ReserverRestaurant();
            $reserverRestaurant->setClient($client);
            $reserverRestaurant->setDate($date);
            $reserverRestaurant->setRestaurant($restaurant);
            $reserverRestaurant->setDateReservation($dateReservation);
            $reserverRestaurant->setNbPersonne(count($prenoms));
            $reserverRestaurant->setPresent(false);
            $entityManager->persist($reserverRestaurant);
        }

        $entityManager->flush();

        $this->sendMailRecapitulatif($client->getEmail(), $mailerInterface);
        $request->getSession()->remove('payer_billet_data');
        $request->getSession()->remove('louer_hotel_data');
        $request->getSession()->remove('reserver_restaurant_data');
        return $this->redirectToRoute('app_user_accueil');
    }
}