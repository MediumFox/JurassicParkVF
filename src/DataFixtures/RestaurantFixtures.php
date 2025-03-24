<?php

namespace App\DataFixtures;

use App\Entity\Biome;
use App\Entity\Restaurant;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Symfony\Bridge\Doctrine\ManagerRegistry;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class RestaurantFixtures extends Fixture implements DependentFixtureInterface
{
    private ManagerRegistry $doctrine;

    public function __construct(ManagerRegistry $doctrine)
    {
        $this->doctrine = $doctrine;
    }

    public function load(ObjectManager $manager): void
    {
        $restaurants = [
            ['Jurassic Grill', 'grill.jpg', 40],
            ['Dino Dîner', 'diner.jpg', 30],
            ['Volcan Pizza', 'pizza.jpg', 25],
            ['Herbivore Café', 'cafe.jpg', 20],
            ['T-Rex Snack', 'snack.jpg', 15],
        ];

        $biomes = $this->doctrine->getRepository(Biome::class)->findAll();

        foreach ($restaurants as [$libelle, $image, $nbTable]) {
            $biome = $biomes[array_rand($biomes)];

            $restaurant = new Restaurant();
            $restaurant->setLibelleRestaurant($libelle);
            $restaurant->setImageRestaurant($image);
            $restaurant->setNbTable($nbTable);
            $restaurant->setBiome($biome);

            $manager->persist($restaurant);
        }

        $manager->flush();
    }

    public function getDependencies(): array
    {
        return [
            BiomeFixtures::class,
        ];
    }
}
