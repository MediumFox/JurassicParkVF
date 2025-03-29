<?php

namespace App\Controller;

use App\Entity\Chambre;
use App\Form\ChambreType;
use App\Repository\ChambreRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

#[Route('/admin/chambre')]
final class ChambreController extends AbstractController
{
    #[Route(name: 'app_chambre_index', methods: ['GET'])]
    public function index(ChambreRepository $chambreRepository): Response
    {
        return $this->render('chambre/index.html.twig', [
            'chambres' => $chambreRepository->findAll(),
            'hero'=> [
                'title'=> "L'index des chambres",
                'description' => "Lorem Ipsum.",
                'enabled' => false,
            ],
            'entity' => 'chambre',
            'formRoute' => $this->generateUrl('app_chambre_form')
        ]);
    }

    #[Route('/new', name: 'app_chambre_new', methods: ['GET', 'POST'])]    
    public function new(Request $request, EntityManagerInterface $entityManager): JsonResponse
    {
        $chambre = new Chambre();
        $form = $this->createForm(ChambreType::class, $chambre);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($chambre);
            $entityManager->flush();

            return new JsonResponse(['success' => true]);
        }

        return new JsonResponse(['success' => false, 'errors' => (string) $form->getErrors(true, false)]);
    }

    #[Route('/edit/{id}', name: 'app_chambre_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Chambre $chambre, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ChambreType::class, $chambre);
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

    #[Route('/new-form', name: 'app_chambre_form', methods: ['GET'])]
    public function getForm(Request $request, ChambreRepository $chambreRepository): Response
    {
        $id = $request->query->get('id');
        $chambre = $id ? $chambreRepository->find($id) : new Chambre();
        $form = $this->createForm(ChambreType::class, $chambre);
    
        return $this->render('reuse/_form.html.twig', [
            'form' => $form->createView(),
            'id' => $id,
            'type' => $chambre->getNumeroChambre() ? 'Mettre à jour' : 'Créer',
            'entity' => 'chambre',
        ]);
    }

    #[Route('/{id}', name: 'app_chambre_delete', methods: ['POST'])]
    public function delete(Request $request, Chambre $chambre, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$chambre->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($chambre);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_chambre_index', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/filter-libelle-chambre', name: 'app_chambre_filter_name', methods: ['GET'])]
    public function filterName(Request $request, ChambreRepository $chambreRepository): JsonResponse
    {
        $libelle = $request->query->get('libelle');
        $chambres = $chambreRepository->filterName($libelle);

        if (!$chambres) {
            return new JsonResponse(['success' => false]);
        }
    
        $html = $this->renderView('chambre/_chambre_cards.html.twig', [
            'chambres' => $chambres,
        ]);
    
        return new JsonResponse([
            'success' => true,
            'html' => $html
        ]);
    }
}
