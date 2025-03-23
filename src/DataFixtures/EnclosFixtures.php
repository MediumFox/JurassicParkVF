<?php

namespace App\DataFixtures;

use App\Entity\Biome;
use App\Entity\Enclos;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class EnclosFixtures extends Fixture implements DependentFixtureInterface
{
    private ManagerRegistry $doctrine;

    public function __construct(ManagerRegistry $doctrine)
    {
        $this->doctrine = $doctrine;
    }

    public function load(ObjectManager $manager): void
    {
        $biomes = $this->doctrine->getRepository(Biome::class)->findAll();

        for ($i = 1; $i <= 10; $i++) {
            $enclos = new Enclos();
            $enclos->setLibelleEnclos("Enclos #" . $i);

            $biome = $biomes[array_rand($biomes)];
            $enclos->setBiome($biome);
            $manager->persist($enclos);
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
