<?php 
namespace App\Service;

use App\Repository\ProduitRepository;
use Symfony\Component\HttpFoundation\RequestStack;
use App\Repository\ProductRepository;

class CartService
{
    private $session;
    private $productRepository;

    public function __construct(RequestStack $requestStack, ProduitRepository $productRepository)
    {
        $this->session = $requestStack->getSession();
        $this->productRepository = $productRepository;
    }

    public function add($id)
    {
        $cart = $this->session->get('cart', []);
        $cart[$id] = ($cart[$id] ?? 0) + 1;
        $this->session->set('cart', $cart);
    }

    public function remove($id)
    {
        $cart = $this->session->get('cart', []);
        if (array_key_exists($id, $cart)) {
            unset($cart[$id]);
            $this->session->set('cart', $cart);
        }
    }
    public function updateQuantity(int $id, int $quantity)
    {
        $cart = $this->session->get('cart', []);
        if ($quantity > 0) {
            $cart[$id] = $quantity;
        } else {
            unset($cart[$id]);
        }
        $this->session->set('cart', $cart);
    }

    public function getFullCart(): array
    {
        $cart = $this->session->get('cart', []);
        $fullCart = [];

        foreach ($cart as $id => $quantity) {
            $product = $this->productRepository->find($id);
            if ($product) {
                $fullCart[] = [
                    'product' => $product,
                    'quantity' => $quantity
                ];
            }
        }

        return $fullCart;
    }

    public function getTotal(): float
    {
        $total = 0;
        foreach ($this->getFullCart() as $item) {
            $total += $item['product']->getPrixProduit() * $item['quantity'];
        }

        return $total;
    }

    public function clear()
    {
        $this->session->remove('cart');
    }
}