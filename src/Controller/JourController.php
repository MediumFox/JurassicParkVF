<?php

namespace App\Controller;

use App\Entity\Jour;
use App\Form\JourType;
use App\Repository\JourRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

#[Route('/admin/jour')]
final class JourController extends AbstractController
{
    #[Route(name: 'app_jour_index', methods: ['GET'])]
    public function index(JourRepository $jourRepository): Response
    {
        return $this->render('jour/index.html.twig', [
            'jours' => $jourRepository->findAll(),
            'hero'=> [
                'title'=> "L'index des jours",
                'description' => "Lorem Ipsum.",
                'enabled' => false,
            ],
            'entity' => 'jour',
            'formRoute' => $this->generateUrl('app_jour_form')
        ]);
    }

    #[Route('/new', name: 'app_jour_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): JsonResponse
    {
        $chambre = new Jour();
        $form = $this->createForm(JourType::class, $chambre);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($chambre);
            $entityManager->flush();

            return new JsonResponse(['success' => true]);
        }

        return new JsonResponse(['success' => false, 'errors' => (string) $form->getErrors(true, false)]);
    }

    #[Route('/new-form', name: 'app_jour_form', methods: ['GET'])]
    public function getForm(Request $request, JourRepository $jourRepository): Response
    {
        $id = $request->query->get('id');
        $jour = $id ? $jourRepository->find($id) : new Jour();
        $form = $this->createForm(JourType::class, $jour);
    
        return $this->render('reuse/_form.html.twig', [
            'form' => $form->createView(),
            'id' => $id,
            'type' => $jour->getLibelleJour() ? 'Mettre à jour' : 'Créer',
            'entity' => 'jour',
        ]);
    }

    #[Route('/edit/{id}', name: 'app_jour_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Jour $jour, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(JourType::class, $jour);
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

    #[Route('/{id}', name: 'app_jour_delete', methods: ['POST'])]
    public function delete(Request $request, Jour $jour, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$jour->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($jour);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_jour_index', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/filter-libelle-jour', name: 'app_jour_filter_name', methods: ['GET'])]
    public function filterName(Request $request, JourRepository $jourRepository): JsonResponse
    {
        $libelle = $request->query->get('libelle');
        $jours = $jourRepository->filterName($libelle);

        if (!$jours) {
            return new JsonResponse(['success' => false]);
        }
    
        $html = $this->renderView('jour/_jour_cards.html.twig', [
            'jours' => $jours,
        ]);
    
        return new JsonResponse([
            'success' => true,
            'html' => $html
        ]);
    }
}
