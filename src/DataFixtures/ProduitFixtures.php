<?php

namespace App\DataFixtures;

use App\Entity\Produit;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class ProduitFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $produits = [
            ['Peluches Dino', "Peluches douces représentant vos dinosaures préférés.", 'img/Produits/peluche.jpg', 25, true, 100],
            ['Casquette Jurassic', "Casquette officielle du parc avec logo brodé.", 'img/Produits/casquette.jpg', 18, true, 50],
            ['Gourde personnalisée', "Gourde réutilisable avec prénom gravé, souvenir idéal.", 'img/Produits/gourde.jpg', 15, true, 75],
            ['Poster panoramique', "Poster géant du parc vu du ciel, édition limitée.", 'img/Produits/poster.jpg', 100, true, 30],
            ['Mug T-Rex', "Mug en céramique avec illustration du célèbre T-Rex.", 'img/Produits/mug.jpg', 12, false, 0],
            ['Sweat Velociraptor', "Sweat à capuche ultra-confort avec motif Velociraptor en action.", 'img/Produits/sweat.jpg', 40, true, 45],
            ['Bracelet Fossile', "Bracelet en cuir avec pièce imitation fossile, élégant et préhistorique.", 'img/Produits/bracelet.jpg', 22, true, 60],
            ['Sac à dos Isla Nublar', "Sac pratique avec carte du parc imprimée, idéal pour les explorateurs.", 'img/Produits/sac.jpg', 35, true, 35],      
            ['Carnet Jurassic Notes', "Petit carnet à spirale pour noter vos observations de terrain.", 'img/Produits/carnet.jpg', 7, true, 120],
            ['Stylo Raptor', "Stylo noir avec tête de raptor en 3D, parfait pour écrire avec style.", 'img/Produits/stylo.jpg', 40, true, 200],
            ['T-Shirt DNA Lab', "T-shirt minimaliste avec logo du laboratoire ADN.", 'img/Produits/tshirt.jpg', 20, true, 80],
            ['Badge VIP Jurassic', "Badge collector pour visiteurs privilégiés (ne donne pas accès au T-Rex 🦖).", 'img/Produits/badge.jpg', 5, true, 300],
        ];

        foreach ($produits as [$libelle, $description, $image, $prix, $disponible, $stock]) {
            $produit = new Produit();
            $produit->setLibelleProduit($libelle);
            $produit->setDescriptionProduit($description);
            $produit->setImageProduit($image);
            $produit->setPrixProduit($prix);
            $produit->setDisponibleAchat($disponible);
            $produit->setStock($stock);
            $manager->persist($produit);
        }

        $manager->flush();
    }
}
