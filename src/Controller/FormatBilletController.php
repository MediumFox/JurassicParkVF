<?php

namespace App\Controller;

use App\Entity\FormatBillet;
use App\Form\FormatBilletType;
use App\Repository\FormatBilletRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/admin/format/billet')]
final class FormatBilletController extends AbstractController
{
    #[Route(name: 'app_format_billet_index', methods: ['GET'])]
    public function index(FormatBilletRepository $formatBilletRepository): Response
    {
        return $this->render('format_billet/index.html.twig', [
            'format_billets' => $formatBilletRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_format_billet_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $formatBillet = new FormatBillet();
        $form = $this->createForm(FormatBilletType::class, $formatBillet);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($formatBillet);
            $entityManager->flush();

            return $this->redirectToRoute('app_format_billet_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('format_billet/new.html.twig', [
            'format_billet' => $formatBillet,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_format_billet_show', methods: ['GET'])]
    public function show(FormatBillet $formatBillet): Response
    {
        return $this->render('format_billet/show.html.twig', [
            'format_billet' => $formatBillet,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_format_billet_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, FormatBillet $formatBillet, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(FormatBilletType::class, $formatBillet);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_format_billet_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('format_billet/edit.html.twig', [
            'format_billet' => $formatBillet,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_format_billet_delete', methods: ['POST'])]
    public function delete(Request $request, FormatBillet $formatBillet, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$formatBillet->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($formatBillet);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_format_billet_index', [], Response::HTTP_SEE_OTHER);
    }
}
