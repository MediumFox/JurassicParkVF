<?php

namespace App\Controller;

use App\Entity\Biome;
use App\Form\BiomeType;
use App\Repository\BiomeRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/admin/biome')]
final class BiomeController extends AbstractController
{
    #[Route(name: 'app_biome_index', methods: ['GET'])]
    public function index(BiomeRepository $biomeRepository): Response
    {
        return $this->render('biome/index.html.twig', [
            'biomes' => $biomeRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_biome_form', methods: ['GET'])]
    public function getForm(Request $request): Response
    {
        $biome = new Biome();
        $form = $this->createForm(BiomeType::class, $biome);
    
        return $this->render('biome/_form.html.twig', [
            'form' => $form->createView(),
        ]);
    }
    

    #[Route('/{id}', name: 'app_biome_show', methods: ['GET'])]
    public function show(Biome $biome): Response
    {
        return $this->render('biome/show.html.twig', [
            'biome' => $biome,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_biome_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Biome $biome, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(BiomeType::class, $biome);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_biome_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('biome/edit.html.twig', [
            'biome' => $biome,
            'form' => $form,
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
}
