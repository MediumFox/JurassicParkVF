<?php

namespace App\Controller;

use App\Entity\Client;
use App\Form\ClientType;
use App\Entity\Administrateur;
use App\Form\AdministrateurType;
use App\Repository\ClientRepository;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\AdministrateurRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

#[Route('/admin')]
final class AdministrateurController extends AbstractController
{

    #[Route('/client', name: 'app_admin_client', methods: ['GET'])]
    public function new(ClientRepository $clientRepository): Response
    {
        return $this->render('client/index.html.twig', [
            'clients' => $clientRepository->findAll(),
            'hero'=> [
                'title'=> "L'index des clients",
                'description' => "Lorem Ipsum.",
                'enabled' => false,
            ],
            'entity' => 'client',
            'formRoute' => $this->generateUrl('app_client_form')
        ]);
    }

    #[Route('/new-form', name: 'app_client_form', methods: ['GET'])]
    public function getForm(Request $request, ClientRepository $clientRepository): Response
    {
        $id = $request->query->get('id');
        $client = $id ? $clientRepository->find($id) : new Client();
        $form = $this->createForm(ClientType::class, $client);
    
        return $this->render('reuse/_form.html.twig', [
            'form' => $form->createView(),
            'id' => $id,
            'type' => $client->getNom() ? 'Mettre à jour' : 'Créer',
            'entity' => 'client',
        ]);
    }


    #[Route('/filter-libelle-client', name: 'app_client_filter_name', methods: ['GET'])]
    public function filterName(Request $request, ClientRepository $clientRepository): JsonResponse
    {
        $libelle = $request->query->get('libelle');
        $clients = $clientRepository->filterName($libelle);

        if (!$clients) {
            return new JsonResponse(['success' => false]);
        }
    
        $html = $this->renderView('client/_client_cards.html.twig', [
            'clients' => $clients,
        ]);
    
        return new JsonResponse([
            'success' => true,
            'html' => $html
        ]);
    }

    #[Route('/profile', name: 'app_profile_admin', methods: ['GET', 'POST'])]
    public function profile(Request $request): Response
    {
        $admin = $this->getUser();

        if (!$this->isGranted('ROLE_ADMIN')) {
            throw $this->createAccessDeniedException("Vous n'êtes pas un administrateur.");
        }
        
        $form = $this->createForm(AdministrateurType::class, $admin);

        return $this->render('administrateur/profile.html.twig', [
            'admin' => $admin,
            'hero'=> [
                'title'=> "Mon profil",
                'description' => "Lorem Ipsum.",
                'enabled' => false,
            ],
            'form' => $form->createView()
        ]);
    }
}
