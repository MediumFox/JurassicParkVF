<?php

namespace App\Controller;

use App\Entity\Dinosaure;
use App\Form\DinosaureType;
use App\Repository\DinosaureRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Utils\TraitUploadImg;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\String\Slugger\SluggerInterface;

#[Route('/admin/dinosaure')]
final class DinosaureController extends AbstractController
{
    use TraitUploadImg;

    #[Route(name: 'app_dinosaure_index', methods: ['GET'])]
    public function index(DinosaureRepository $dinosaureRepository): Response
    {
        return $this->render('dinosaure/index.html.twig', [
            'dinosaures' => $dinosaureRepository->findAll(),
            'hero'=> [
                'title'=> "L'index des dinosaures",
                'description' => "Lorem Ipsum.",
                'enabled' => false,
            ]
        ]);
    }

    #[Route('/new', name: 'app_dinosaure_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager, SluggerInterface $slugger): JsonResponse
    {
        $dinosaure = new Dinosaure();
        $form = $this->createForm(DinosaureType::class, $dinosaure);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $imageFile = $form->get('imageDinosaure')->getData(); 
            if ($imageFile) {
                $imagePath = $this->uploadImg($imageFile, 'Dinosaures', $slugger);
    
                if ($imagePath === null) {
                    return new JsonResponse(['success' => false, 'message' => 'Erreur lors de l\'upload de l\'image']);
                }
    
                $dinosaure->setImageDinosaure($imagePath); 
            }
            $entityManager->persist($dinosaure);
            $entityManager->flush();

            return new JsonResponse(['success' => true]);
        }

        return new JsonResponse(['success' => false, 'errors' => (string) $form->getErrors(true, false)]);
    }


    #[Route('/new-form', name: 'app_dinosaure_form', methods: ['GET'])]
    public function getForm(Request $request, DinosaureRepository $dinosaureRepository): Response
    {
        $id = $request->query->get('id');
        $dinosaure = $id ? $dinosaureRepository->find($id) : new Dinosaure();
        $form = $this->createForm(DinosaureType::class, $dinosaure);
    
        return $this->render('reuse/_form.html.twig', [
            'form' => $form->createView(),
            'id' => $id,
            'type' => $dinosaure->getLibelleDinosaure() ? 'Mettre à jour' : 'Créer',
            'entity' => 'dinosaure',
        ]);
    }

    #[Route('/edit/{id}', name: 'app_dinosaure_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Dinosaure $dinosaure, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(DinosaureType::class, $dinosaure);
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
