<?php

namespace App\Controller;

use App\Entity\Biome;
use App\Form\BiomeType;
use App\Repository\BiomeRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

#[Route('/admin/biome')]
final class BiomeController extends AbstractController
{
    #[Route(name: 'app_biome_index', methods: ['GET'])]
    public function index(BiomeRepository $biomeRepository): Response
    {
        return $this->render('biome/index.html.twig', [
            'biomes' => $biomeRepository->findAll(),
            'hero'=> [
                'title'=> "L'index des biomes",
                'description' => "Retrouvez-ici tous les biomes qui sont reliés aux restaurants, aux hôtels ainsi qu'aux enclos. Les suppresions peuvent avoir un fort impact sur le site, soyez prudent.",
                'enabled' => false,
            ],
            'entity' => 'biome',
            'formRoute' => $this->generateUrl('app_biome_form')
        ]);
    }

    #[Route('/new', name: 'app_biome_new', methods: ['POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): JsonResponse
    {
        $biome = new Biome();
        $form = $this->createForm(BiomeType::class, $biome);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($biome);
            $entityManager->flush();

            return new JsonResponse(['success' => true]);
        }

        return new JsonResponse(['success' => false, 'errors' => (string) $form->getErrors(true, false)]);
    }

    #[Route('/new-form', name: 'app_biome_form', methods: ['GET'])]
    public function getForm(Request $request, BiomeRepository $biomeRepository): Response
    {
        $id = $request->query->get('id');
        $biome = $id ? $biomeRepository->find($id) : new Biome();
        $form = $this->createForm(BiomeType::class, $biome);
    
        return $this->render('reuse/_form.html.twig', [
            'form' => $form->createView(),
            'id' => $id,
            'type' => $biome->getLibelleBiome() ? 'Mettre à jour' : 'Créer',
            'entity' => 'biome',
        ]);
    }

    #[Route('/edit/{id}', name: 'app_biome_edit', methods: ['POST'])]
    public function edit(Request $request, Biome $biome, EntityManagerInterface $entityManager): JsonResponse
    {
        $form = $this->createForm(BiomeType::class, $biome);
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

    #[Route('/{id}', name: 'app_biome_delete', methods: ['POST'])]
    public function delete(Request $request, Biome $biome, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$biome->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($biome);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_biome_index', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/filter-libelle-biome', name: 'app_biome_filter_name', methods: ['GET'])]
    public function filterName(Request $request, BiomeRepository $biomeRepository): JsonResponse
    {
        $libelle = $request->query->get('libelle');
        $biomes = $biomeRepository->filterName($libelle);

        if (!$biomes) {
            return new JsonResponse(['success' => false]);
        }
    
        $html = $this->renderView('biome/_biome_cards.html.twig', [
            'biomes' => $biomes,
        ]);
    
        return new JsonResponse([
            'success' => true,
            'html' => $html
        ]);
    }
}
