<?php

namespace App\Controller;

use App\Entity\Horaire;
use App\Form\HoraireType;
use App\Repository\HoraireRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

#[Route('/admin/horaire')]
final class HoraireController extends AbstractController
{
    #[Route(name: 'app_horaire_index', methods: ['GET'])]
    public function index(HoraireRepository $horaireRepository): Response
    {
        return $this->render('horaire/index.html.twig', [
            'horaires' => $horaireRepository->findAll(),
            'hero'=> [
                'title'=> "L'index des horaires",
                'description' => "Lorem Ipsum.",
                'enabled' => false,
            ],
            'entity' => 'horaire',
            'formRoute' => $this->generateUrl('app_horaire_form')
        ]);
    }

    #[Route('/new', name: 'app_horaire_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): JsonResponse
    {
        $chambre = new Horaire();
        $form = $this->createForm(HoraireType::class, $chambre);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($chambre);
            $entityManager->flush();

            return new JsonResponse(['success' => true]);
        }

        return new JsonResponse(['success' => false, 'errors' => (string) $form->getErrors(true, false)]);
    }

    #[Route('/new-form', name: 'app_horaire_form', methods: ['GET'])]
    public function getForm(Request $request, HoraireRepository $horaireRepository): Response
    {
        $id = $request->query->get('id');
        $horaire = $id ? $horaireRepository->find($id) : new Horaire();
        $form = $this->createForm(HoraireType::class, $horaire);
    
        return $this->render('reuse/_form.html.twig', [
            'form' => $form->createView(),
            'id' => $id,
            'type' => $horaire->getOuverture() ? 'Mettre à jour' : 'Créer',
            'entity' => 'horaire',
        ]);
    }

    #[Route('/edit/{id}', name: 'app_horaire_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Horaire $horaire, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(HoraireType::class, $horaire);
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
    #[Route('/{id}', name: 'app_horaire_delete', methods: ['POST'])]
    public function delete(Request $request, Horaire $horaire, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$horaire->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($horaire);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_horaire_index', [], Response::HTTP_SEE_OTHER);
    }
}
