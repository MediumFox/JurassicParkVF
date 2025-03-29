<?php

namespace App\Controller;

use App\Entity\FormatChambre;
use App\Form\FormatChambreType;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\FormatChambreRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

#[Route('/admin/format/chambre')]
final class FormatChambreController extends AbstractController
{
    #[Route(name: 'app_format_chambre_index', methods: ['GET'])]
    public function index(FormatChambreRepository $formatChambreRepository): Response
    {
        return $this->render('format_chambre/index.html.twig', [
            'format_chambres' => $formatChambreRepository->findAll(),
            'hero'=> [
                'title'=> "L'index des formats de chambre",
                'description' => "Lorem Ipsum.",
                'enabled' => false,
            ],
            'entity' => 'format de chambre',
            'formRoute' => $this->generateUrl('app_format_chambre_form')
        ]);
    }

    #[Route('/new', name: 'app_format_chambre_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): JsonResponse
    {
        $chambre = new FormatChambre();
        $form = $this->createForm(FormatChambreType::class, $chambre);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($chambre);
            $entityManager->flush();

            return new JsonResponse(['success' => true]);
        }

        return new JsonResponse(['success' => false, 'errors' => (string) $form->getErrors(true, false)]);
    }

    #[Route('/new-form', name: 'app_format_chambre_form', methods: ['GET'])]
    public function getForm(Request $request, FormatChambreRepository $formatRepository): Response
    {
        $id = $request->query->get('id');
        $format = $id ? $formatRepository->find($id) : new FormatChambre();
        $form = $this->createForm(FormatChambreType::class, $format);
    
        return $this->render('reuse/_form.html.twig', [
            'form' => $form->createView(),
            'id' => $id,
            'type' => $format->getLibelleFormatChambre() ? 'Mettre à jour' : 'Créer',
            'entity' => 'format_chambre',
        ]);
    }

    #[Route('/edit/{id}', name: 'app_format_chambre_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, FormatChambre $formatChambre, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(FormatChambreType::class, $formatChambre);
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

    #[Route('/{id}', name: 'app_format_chambre_delete', methods: ['POST'])]
    public function delete(Request $request, FormatChambre $formatChambre, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$formatChambre->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($formatChambre);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_format_chambre_index', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/filter-libelle-format-chambre', name: 'app_format_chambre_filter_name', methods: ['GET'])]
    public function filterName(Request $request, FormatChambreRepository $formatChambre): JsonResponse
    {
        $libelle = $request->query->get('libelle');
        $fChambres = $formatChambre->filterName($libelle);

        if (!$fChambres) {
            return new JsonResponse(['success' => false]);
        }
    
        $html = $this->renderView('format_chambre/_format_chambre_cards.html.twig', [
            'format_chambres' => $fChambres,
        ]);
    
        return new JsonResponse([
            'success' => true,
            'html' => $html
        ]);
    }
}
