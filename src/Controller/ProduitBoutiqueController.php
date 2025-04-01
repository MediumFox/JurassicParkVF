<?php

namespace App\Controller;

use App\Service\CartService;
use App\Repository\ProduitRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ProduitBoutiqueController extends AbstractController
{
    #[Route('/boutique', name: 'produit_index')]
    public function index(ProduitRepository $produitRepository): Response
    {
        $produits = $produitRepository->produitsBoutique();

        return $this->render('produit/boutique.html.twig', [
            'produits' => $produits,
            'hero'=> [
                'title'=> "Bienvenue sur notre boutiquosaure !",
                'description' => "Vagabondez à travers les articles comme au fin fond de la jungle profonde.",
                'enabled' => true,
            ],
        ]);
    }

    #[Route('/panier/ajouter/{id}', name: 'panier_ajouter')]
    public function ajouterAuPanier(int $id, CartService $cartService): Response
    {
        $cartService->add($id);
        return $this->redirectToRoute('panier_afficher');
    }

    #[Route('/filter-libelle', name: 'app_produit_filter_name', methods: ['GET'])]
    public function filterName(Request $request, ProduitRepository $produitRepository): JsonResponse
    {
        $libelle = $request->query->get('libelle');
        $produits = $produitRepository->filterName($libelle);

        if (!$produits) {
            return new JsonResponse(['success' => false]);
        }
    
        $html = $this->renderView('produit/_produit_cards.html.twig', [
            'produits' => $produits,
        ]);
    
        return new JsonResponse([
            'success' => true,
            'html' => $html
        ]);
    }
}
