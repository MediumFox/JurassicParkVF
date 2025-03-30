<?php

namespace App\DataFixtures;
use Symfony\Component\String\Slugger\SluggerInterface;
use App\Entity\Product;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    private SluggerInterface $slugger;

    public function __construct(SluggerInterface $slugger)
    {
        $this->slugger = $slugger;
    }
    public function load(ObjectManager $manager): void
    {   
        // Exemple d'images de produits locaux
        $imagePaths = [
            'product1.webp',
            'product2.avif',
            'product3.jpg',
            'product4.avif',
            'product5.avif',            
            'product6.jpg',            
            'product7.avif',
            'product8.webp',
            'product9.webp',
            'product10.jpeg',
            'product11.jpg',
            'product12.jpg',
            'product13.jpg',
            'product14.png',
            'product15.avif',
            'product16.jpg',
            'product17.avif',
            'product6.jpg',
        ];
        for ($i = 1; $i <= 18; $i++) {
            $product = new Product();
            $name = "Produit $i"; // ✅ définir la variable $name avant de l'utiliser
            $product->setName($name);
            $product->setDescription("Ceci est la description du produit $i");
            $product->setPrice(mt_rand(10, 100));
            $product->setImage($imagePaths[$i-1]);

            // 🔥 Ajouter le slug ici
            $slug = $this->slugger->slug($name)->lower();
            $product->setSlug($slug);
            $product->setCreatedAt(new \DateTimeImmutable());
            $manager->persist($product);
        }

        $manager->flush();
    }
}
