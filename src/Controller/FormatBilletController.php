<?php

namespace App\Controller;

use App\Entity\FormatBillet;
use App\Form\FormatBilletType;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\FormatBilletRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

#[Route('/admin/format/billet')]
final class FormatBilletController extends AbstractController
{
    #[Route(name: 'app_format_billet_index', methods: ['GET'])]
    public function index(FormatBilletRepository $formatBilletRepository): Response
    {
        return $this->render('format_billet/index.html.twig', [
            'format_billets' => $formatBilletRepository->findAll(),
            'hero'=> [
                'title'=> "L'index des formats de billet",
                'description' => "Lorem Ipsum.",
                'enabled' => false,
            ]
        ]);
    }

    #[Route('/new', name: 'app_format_billet_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): JsonResponse
    {
        $chambre = new FormatBillet();
        $form = $this->createForm(FormatBilletType::class, $chambre);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($chambre);
            $entityManager->flush();

            return new JsonResponse(['success' => true]);
        }

        return new JsonResponse(['success' => false, 'errors' => (string) $form->getErrors(true, false)]);
    }

    #[Route('/new-form', name: 'app_format_billet_form', methods: ['GET'])]
    public function getForm(Request $request, FormatBilletRepository $formatRepository): Response
    {
        $id = $request->query->get('id');
        $format = $id ? $formatRepository->find($id) : new FormatBillet();
        $form = $this->createForm(FormatBilletType::class, $format);
    
        return $this->render('reuse/_form.html.twig', [
            'form' => $form->createView(),
            'id' => $id,
            'type' => $format->getLibelleBillet() ? 'Mettre à jour' : 'Créer',
            'entity' => 'format_billet',
        ]);
    }
    #[Route('/edit/{id}', name: 'app_format_billet_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, FormatBillet $formatBillet, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(FormatBilletType::class, $formatBillet);
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
