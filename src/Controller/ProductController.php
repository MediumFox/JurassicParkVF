<?php

namespace App\Controller;

use App\Repository\ProductRepository;
use App\Service\CartService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController
{
    #[Route('/produits', name: 'product_index')]
    public function index(ProductRepository $productRepository): Response
    {
        $products = $productRepository->findAll();

        return $this->render('product/index.html.twig', [
            'products' => $products,
        ]);
    }

    #[Route('/cart/add/{id}', name: 'cart_add')]
    public function addToCart($id, CartService $cartService): Response
    {
        $cartService->add($id);
        return $this->redirectToRoute('cart_show');
    }    

    #[Route('/panier', name: 'cart')]
    public function showCart(CartService $cartService): Response
    {
        // Récupérer les articles dans le panier
        $cartItems = $cartService->getFullCart();
        $total = $cartService->getTotal();

        return $this->render('cart/index.html.twig', [
            'cartItems' => $cartItems,
            'total' => $total,
        ]);
    }
    
}
