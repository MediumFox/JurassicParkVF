<?php

namespace App\Controller;

use ReflectionClass;
use SimpleXMLElement;
use App\Entity\Dinosaure;
use App\Form\DinosaureType;
use App\Utils\TraitUploadImg;
use App\Repository\DinosaureRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

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
            ],
            'entity' => 'dinosaure',
            'formRoute' => $this->generateUrl('app_dinosaure_form')
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

    #[Route('/new-form-duplicate', name: 'app_dinosaure_duplicate_form', methods: ['GET'])]
    public function getFormDuplicate(Request $request, DinosaureRepository $dinosaureRepository): Response
    {
        $id = $request->query->get('id');
        $dinosaure = $dinosaureRepository->find($id);
    
        if (!$dinosaure) {
            throw $this->createNotFoundException('Dinosaure introuvable');
        }

        $nouveauDino = clone $dinosaure;
    
        $reflection = new ReflectionClass($nouveauDino);
        $property = $reflection->getProperty('id');
        $property->setAccessible(true);
        $property->setValue($nouveauDino, null);
    
        $nouveauDino->setLibelleDinosaure($dinosaure->getLibelleDinosaure() . ' (copie)');
    
        $form = $this->createForm(DinosaureType::class, $nouveauDino);
    
        return $this->render('dinosaure/_form_duplicate.html.twig', [
            'form' => $form->createView(),
            'id' => $dinosaure->getId(),
            'entity' => 'dinosaure',
            'type' => 'Dupliquer',
        ]);
    }
    
    

    #[Route('/edit/{id}', name: 'app_dinosaure_edit', methods: [ 'POST'])]
    public function edit(Request $request, Dinosaure $dinosaure, EntityManagerInterface $entityManager, SluggerInterface $slugger): Response
    {
        $form = $this->createForm(DinosaureType::class, $dinosaure);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $imageFile = $form->get('imageDinosaure')->getData(); 
            if ($imageFile) {
                if ($dinosaure->getImageDinosaure()) {
                    $this->removeImg($dinosaure->getImageDinosaure(), 'Dinosaures');
                }
                
                $imagePath = $this->uploadImg($imageFile, 'Dinosaures', $slugger);
    
                if ($imagePath === null) {
                    return new JsonResponse(['success' => false, 'message' => 'Erreur lors de l\'upload de l\'image']);
                }

                $dinosaure->setImageDinosaure($imagePath); 
            }
            $entityManager->flush();
            return new JsonResponse(['success' => true]);
        }
    
        return new JsonResponse([
            'success' => false,
            'errors' => (string) $form->getErrors(true, false)
        ]);
    }

    #[Route('/duplicate/{id}', name: 'app_dinosaure_duplicate', methods: ['POST'])]
    public function duplicate(Request $request, Dinosaure $dinosaure, EntityManagerInterface $entityManager, SluggerInterface $slugger): Response
    {
        $nouveauDino = clone $dinosaure;
    
        $reflection = new ReflectionClass($nouveauDino);
        $property = $reflection->getProperty('id');
        $property->setAccessible(true);
        $property->setValue($nouveauDino, null);
    
        $form = $this->createForm(DinosaureType::class, $nouveauDino);
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
            $imageFile = $form->get('imageDinosaure')->getData();
            if ($imageFile) {
                $imagePath = $this->uploadImg($imageFile, 'Dinosaures', $slugger);
                if ($imagePath === null) {
                    return new JsonResponse(['success' => false, 'message' => 'Erreur lors de l\'upload de l\'image']);
                }
                $nouveauDino->setImageDinosaure($imagePath);
            }
    
            $entityManager->persist($nouveauDino);
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

        $this->removeImg($dinosaure->getImageDinosaure(), 'Dinosaures');
        return $this->redirectToRoute('app_dinosaure_index', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/json', name: 'app_dinosaure_json', methods: ['GET', 'POST'])]
    public function dinosaureJson(Request $request, DinosaureRepository $dinosaureRepository, EntityManagerInterface $entityManager): Response
    {
        $lesDinosaures =  $dinosaureRepository->findAll();
        foreach ($lesDinosaures as $dinosaure) {
            $data[] = [
                'id' => $dinosaure->getId(),
                'libelle' => $dinosaure->getLibelleDinosaure(),
                'description' => $dinosaure->getDescriptionDinosaure(),
                'image'=> $dinosaure->getImageDinosaure(),
                'regime'=> $dinosaure->getRegimeDinosaure(),
                'enclos'=> $dinosaure->getEnclos(),
                'ere'=>$dinosaure->getEreDinosaure(),
            ];
        }
    
        $jsonData = json_encode($data, JSON_PRETTY_PRINT );

        return new Response(
            $jsonData,
            Response::HTTP_OK,
            [
                'Content-Type' => 'application/json',
                'Content-Disposition' => 'attachment; filename="dinosaures.json"',
            ]
        );
    }

    #[Route('/xml', name: 'app_dinosaure_xml', methods: ['GET', 'POST'])]
    public function dinosaureXml(Request $request, DinosaureRepository $dinosaureRepository, EntityManagerInterface $entityManager): Response
    {
        $lesDinosaures =  $dinosaureRepository->findAll();
        
        $xml = new SimpleXMLElement('<dinosaures/>');

        foreach ($lesDinosaures as $dinosaure) {
            $dinosaureXml = $xml->addChild('dinosaure');
            $dinosaureXml->addChild('id', $dinosaure->getId());
            $dinosaureXml->addChild('libelle', $dinosaure->getLibelleDinosaure());
            $dinosaureXml->addChild('description', $dinosaure->getDescriptionDinosaure());
            $dinosaureXml->addChild('image', $dinosaure->getImageDinosaure());
            $dinosaureXml->addChild('regime', $dinosaure->getRegimeDinosaure());
            $enclos = $dinosaure->getEnclos();
            $dinosaureXml->addChild('enclos', $enclos->getLibelleEnclos());
            $dinosaureXml->addChild('ere', $dinosaure->getEreDinosaure()) ;
        }
    
        return new Response(
            $xml->asXML(),
            Response::HTTP_OK,
            [
                'Content-Type' => 'application/xml',
                'Content-Disposition' => 'attachment; filename="dinosaures.xml"',
            ]
        );
    }

    #[Route('/filter-libelle-dinosaure', name: 'app_dinosaure_filter_name', methods: ['GET'])]
    public function filterName(Request $request, DinosaureRepository $dinosaureRepository): JsonResponse
    {
        $libelle = $request->query->get('libelle');
        $regime = $request->query->get('regime');
        $ere = $request->query->get('ere');
        $dinosaures = $dinosaureRepository->filterName($libelle,$regime,$ere);

        if (!$dinosaures) {
            return new JsonResponse(['success' => false]);
        }
    
        $html = $this->renderView('dinosaure/_dinosaure_cards.html.twig', [
            'dinosaures' => $dinosaures,
        ]);
    
        return new JsonResponse([
            'success' => true,
            'html' => $html
        ]);
    }
}
