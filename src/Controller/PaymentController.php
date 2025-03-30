<?php

// src/Controller/PaymentController.php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class PaymentController extends AbstractController
{
    
    #[Route('/payement', name: 'payement')]
    public function paymentForm()
    {
        return $this->render('payment/payement_form.html.twig');
    }

    #[Route('/payment/confirm', name: 'payment_confirm', methods: ['POST'])]
    public function confirmPayment(Request $request)
    {
        // Simuler l'acceptation du paiement
        $cardNumber = $request->request->get('card_number');
        $expiryDate = $request->request->get('expiry_date');
        $cvv = $request->request->get('cvv');

        if ($cardNumber && $expiryDate && $cvv) {
            $this->addFlash('success', 'Paiement accepté !');
            return $this->redirectToRoute('pickup_point');
        } else {
            $this->addFlash('error', 'Informations de paiement invalides.');
            return $this->redirectToRoute('payement');
        }
    }

    
    #[Route('/payement/pickup', name: 'pickup_point')]
    public function pickupPoint()
    {
        // Simuler une liste de points de récupération
        $pickupPoints = [
            'Magasin 1 - Paris',
            'Magasin 2 - Lyon',
            'Magasin 3 - Marseille'
        ];

        return $this->render('payment/pickup_point.html.twig', [
            'pickupPoints' => $pickupPoints,
        ]);
    }
}
