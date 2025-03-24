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
            ['Peluches Dino', "Peluches douces représentant vos dinosaures préférés.", 'peluche.jpg', 25, true, 100],
            ['Casquette Jurassic', "Casquette officielle du parc avec logo brodé.", 'casquette.jpg', 18, true, 50],
            ['Gourde personnalisée', "Gourde réutilisable avec prénom gravé, souvenir idéal.", 'gourde.jpg', 15, true, 75],
            ['Poster panoramique', "Poster géant du parc vu du ciel, édition limitée.", 'poster.jpg', 10, true, 30],
            ['Mug T-Rex', "Mug en céramique avec illustration du célèbre T-Rex.", 'mug.jpg', 12, false, 0],
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
