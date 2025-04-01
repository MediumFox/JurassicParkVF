<?php

namespace App\Controller;

use App\Service\CartService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class PanierController extends AbstractController
{
    #[Route('/panier', name: 'panier_afficher')]
    public function afficher(CartService $cartService): Response
    {
        $articles = $cartService->getFullCart();
        $total = $cartService->getTotal();

        return $this->render('produit/panier.html.twig', [
            'articles' => $articles,
            'total' => $total,
            'hero'=> [
                'title'=> "Voici votre panier.",
                'description' => "Revenez en arrière s'il vous manque des articles.",
                'enabled' => true,
            ],
        ]);
    }

    #[Route('/panier/supprimer/{id}', name: 'panier_supprimer')]
    public function supprimerDuPanier(int $id, CartService $cartService): Response
    {
        $cartService->remove($id);
        return $this->redirectToRoute('panier_afficher');
    }

    #[Route('/panier/modifier', name: 'panier_modifier', methods: ['POST'])]
    public function modifierQuantite(Request $request, CartService $cartService): Response
    {
        $id = $request->request->get('id');
        $quantite = $request->request->get('quantite');

        if ($id && $quantite !== null) {
            $cartService->updateQuantity((int)$id, (int)$quantite);
        }

        return $this->redirectToRoute('panier_afficher');
    }
}
