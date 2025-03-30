<?php

// src/Controller/CartController.php
namespace App\Controller;

use App\Service\CartService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
class CartController extends AbstractController
{
    #[Route('/cart', name: 'cart_show')]
    public function show(CartService $cartService): Response
    {
        $cartItems = $cartService->getFullCart();
        $total = $cartService->getTotal();

        return $this->render('cart/index.html.twig', [
            'items' => $cartItems,
            'total' => $total,
        ]);
    }
    #[Route('/cart/remove/{id}', name: 'cart_remove')]
    public function removeFromCart($id, CartService $cartService): Response
    {
        $cartService->remove($id);
        return $this->redirectToRoute('cart_show');
    }


    #[Route('/cart/update', name: 'cart_update', methods: ['POST'])]
    public function updateQuantity(Request $request, CartService $cartService): Response
    {
        $id = $request->request->get('id');
        $quantity = $request->request->get('quantity');

        if ($id && $quantity !== null) {
            $cartService->updateQuantity((int)$id, (int)$quantity);
        }

    return $this->redirectToRoute('cart_show');
}


}
