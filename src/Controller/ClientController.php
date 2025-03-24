<?php

namespace App\Controller;

use App\Entity\Client;
use App\Form\ClientType;
use App\Entity\LouerHotel;
use App\Entity\PayerBillet;
use App\Form\LouerHotelType;
use App\Form\ReserverBilletType;
use App\Repository\HotelRepository;
use App\Repository\ClientRepository;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\FormatBilletRepository;
use App\Repository\FormatChambreRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

#[Route('/client')]
final class ClientController extends AbstractController
{
    #[Route(name: 'app_client_index', methods: ['GET'])]
    public function index(ClientRepository $clientRepository): Response
    {
        return $this->render('client/index.html.twig', [
            'clients' => $clientRepository->findAll(),
        ]);
    }

    #[Route('/{id}', name: 'app_client_show', methods: ['GET'])]
    public function show(Client $client): Response
    {
        return $this->render('client/show.html.twig', [
            'client' => $client,
        ]);
    }

    #[Route('/{id}', name: 'app_client_delete', methods: ['POST'])]
    public function delete(Request $request, Client $client, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$client->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($client);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_client_index', [], Response::HTTP_SEE_OTHER);
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
            $request->getSession()->set('payer_billet_data', [
                'form' => $payerBillet,
                'prenoms' => $prenoms,
                'noms' => $noms,
                'billets' => $fBillets
            ]);
            return $this->redirectToRoute('app_client_louer');
        }

        return $this->render('client/reserver-aventure.html.twig', [
            'form' => $form->createView(),
            'type' => 'billet',
            'formatsBillet'=> $formatBilletRepository->findAll(),
            'hero'=> [
                'title'=> "Réserver votre aventure",
                'description' => "Lorem Ipsum.",
                'enabled' => false,
            ]
        ]);
    }

    #[Route('/reserver-aventure/hotel', name: 'app_client_louer', methods: ['POST', 'GET'])]
    public function louerHotel(Request $request, HotelRepository $hotelRepository, FormatChambreRepository $formatChambreRepository): Response
    {
        // if(!$request->getSession()->get('payer_billet_data')){
        //     return $this->redirectToRoute('app_user_accueil');
        // }

        if ($request->isMethod('POST')) {
            $hotelId = $request->request->get('hotel_id');
            $formatId = $request->request->get('format_chambre_id');
            $nbNuits = $request->request->get('nb_nuits');
    
            $data = [
                'hotel_id' => $hotelId,
                'format_chambre_id' => $formatId,
                'nb_nuits' => $nbNuits
            ];
    
            $request->getSession()->set('louer_hotel_data', $data);
    
            return $this->redirectToRoute('app_client_reserver');
        }
    

        return $this->render('client/reserver-aventure.html.twig', [
            'type' => 'hotel',
            'hotels'=> $hotelRepository->findAll(),
            'formatChambre'=> $formatChambreRepository->findAll(),
            'hero'=> [
                'title'=> "Réserver votre aventure",
                'description' => "Lorem Ipsum.",
                'enabled' => false,
            ]
        ]);
    }
}
