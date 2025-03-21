<?php

namespace App\Controller;

use App\Entity\FormatChambre;
use App\Form\FormatChambreType;
use App\Repository\FormatChambreRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/admin/format/chambre')]
final class FormatChambreController extends AbstractController
{
    #[Route(name: 'app_format_chambre_index', methods: ['GET'])]
    public function index(FormatChambreRepository $formatChambreRepository): Response
    {
        return $this->render('format_chambre/index.html.twig', [
            'format_chambres' => $formatChambreRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_format_chambre_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $formatChambre = new FormatChambre();
        $form = $this->createForm(FormatChambreType::class, $formatChambre);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($formatChambre);
            $entityManager->flush();

            return $this->redirectToRoute('app_format_chambre_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('format_chambre/new.html.twig', [
            'format_chambre' => $formatChambre,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_format_chambre_show', methods: ['GET'])]
    public function show(FormatChambre $formatChambre): Response
    {
        return $this->render('format_chambre/show.html.twig', [
            'format_chambre' => $formatChambre,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_format_chambre_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, FormatChambre $formatChambre, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(FormatChambreType::class, $formatChambre);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_format_chambre_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('format_chambre/edit.html.twig', [
            'format_chambre' => $formatChambre,
            'form' => $form,
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
}
