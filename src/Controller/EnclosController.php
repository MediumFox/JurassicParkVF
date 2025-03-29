<?php

namespace App\Controller;

use App\Entity\Enclos;
use App\Form\EnclosType;
use App\Repository\EnclosRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

#[Route('/admin/enclos')]
final class EnclosController extends AbstractController
{
    #[Route(name: 'app_enclos_index', methods: ['GET'])]
    public function index(EnclosRepository $enclosRepository): Response
    {
        return $this->render('enclos/index.html.twig', [
            'enclos' => $enclosRepository->findAll(),
            'hero'=> [
                'title'=> "L'index des enclos",
                'description' => "Lorem Ipsum.",
                'enabled' => false,
            ],
            'entity' => 'enclos',
            'formRoute' => $this->generateUrl('app_enclos_form')
        ]);
    }

    #[Route('/new', name: 'app_enclos_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): JsonResponse
    {
        $chambre = new Enclos();
        $form = $this->createForm(EnclosType::class, $chambre);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($chambre);
            $entityManager->flush();

            return new JsonResponse(['success' => true]);
        }

        return new JsonResponse(['success' => false, 'errors' => (string) $form->getErrors(true, false)]);
    }

    #[Route('/new-form', name: 'app_enclos_form', methods: ['GET'])]
    public function getForm(Request $request, EnclosRepository $enclosRepository): Response
    {
        $id = $request->query->get('id');
        $enclos = $id ? $enclosRepository->find($id) : new Enclos();
        $form = $this->createForm(EnclosType::class, $enclos);
    
        return $this->render('reuse/_form.html.twig', [
            'form' => $form->createView(),
            'id' => $id,
            'type' => $enclos->getLibelleEnclos() ? 'Mettre à jour' : 'Créer',
            'entity' => 'enclos',
        ]);
    }

    #[Route('/edit/{id}', name: 'app_enclos_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Enclos $enclo, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(EnclosType::class, $enclo);
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

    #[Route('/{id}', name: 'app_enclos_delete', methods: ['POST'])]
    public function delete(Request $request, Enclos $enclo, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$enclo->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($enclo);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_enclos_index', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/filter-libelle-enclos', name: 'app_enclos_filter_name', methods: ['GET'])]
    public function filterName(Request $request, EnclosRepository $enclosRepository): JsonResponse
    {
        $libelle = $request->query->get('libelle');
        $enclos = $enclosRepository->filterName($libelle);

        if (!$enclos) {
            return new JsonResponse(['success' => false]);
        }
    
        $html = $this->renderView('enclos/_enclos_cards.html.twig', [
            'enclos' => $enclos,
        ]);
    
        return new JsonResponse([
            'success' => true,
            'html' => $html
        ]);
    }
}
