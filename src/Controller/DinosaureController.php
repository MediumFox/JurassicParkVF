<?php

namespace App\Controller;

use App\Entity\Dinosaure;
use App\Form\DinosaureType;
use App\Repository\DinosaureRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

#[Route('/admin/dinosaure')]
final class DinosaureController extends AbstractController
{
    #[Route(name: 'app_dinosaure_index', methods: ['GET'])]
    public function index(DinosaureRepository $dinosaureRepository): Response
    {
        return $this->render('dinosaure/index.html.twig', [
            'dinosaures' => $dinosaureRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_dinosaure_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $dinosaure = new Dinosaure();
        $form = $this->createForm(DinosaureType::class, $dinosaure);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($dinosaure);
            $entityManager->flush();

            return $this->redirectToRoute('app_dinosaure_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('dinosaure/new.html.twig', [
            'dinosaure' => $dinosaure,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_dinosaure_show', methods: ['GET'])]
    public function show(Dinosaure $dinosaure): Response
    {
        return $this->render('dinosaure/show.html.twig', [
            'dinosaure' => $dinosaure,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_dinosaure_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Dinosaure $dinosaure, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(DinosaureType::class, $dinosaure);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_dinosaure_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('dinosaure/edit.html.twig', [
            'dinosaure' => $dinosaure,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_dinosaure_delete', methods: ['POST'])]
    public function delete(Request $request, Dinosaure $dinosaure, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$dinosaure->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($dinosaure);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_dinosaure_index', [], Response::HTTP_SEE_OTHER);
    }
}
