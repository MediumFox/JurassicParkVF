<?php

namespace App\Controller;

use App\Entity\Produit;
use App\Form\ProduitType;
use App\Repository\ProduitRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

#[Route('/admin/produit')]
final class ProduitController extends AbstractController
{
    #[Route(name: 'app_produit_index', methods: ['GET'])]
    public function index(ProduitRepository $produitRepository): Response
    {
        return $this->render('produit/index.html.twig', [
            'produits' => $produitRepository->findAll(),
            'hero'=> [
                'title'=> "L'index des produits",
                'description' => "Lorem Ipsum.",
                'enabled' => false,
            ]
        ]);
    }

    #[Route('/new', name: 'app_produit_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): JsonResponse
    {
        $chambre = new Produit();
        $form = $this->createForm(ProduitType::class, $chambre);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($chambre);
            $entityManager->flush();

            return new JsonResponse(['success' => true]);
        }

        return new JsonResponse(['success' => false, 'errors' => (string) $form->getErrors(true, false)]);
    }

    #[Route('/new-form', name: 'app_produit_form', methods: ['GET'])]
    public function getForm(Request $request, ProduitRepository $produitRepository): Response
    {
        $id = $request->query->get('id');
        $produit = $id ? $produitRepository->find($id) : new Produit();
        $form = $this->createForm(ProduitType::class, data: $produit);
    
        return $this->render('reuse/_form.html.twig', [
            'form' => $form->createView(),
            'id' => $id,
            'type' => $produit->getLibelleProduit() ? 'Mettre à jour' : 'Créer',
            'entity' => 'produit',
        ]);
    }

    #[Route('/edit/{id}', name: 'app_produit_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Produit $produit, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ProduitType::class, $produit);
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

    #[Route('/{id}', name: 'app_produit_delete', methods: ['POST'])]
    public function delete(Request $request, Produit $produit, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$produit->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($produit);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_produit_index', [], Response::HTTP_SEE_OTHER);
    }
}
