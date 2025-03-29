<?php

namespace App\DataFixtures;

use App\Entity\Biome;
use App\Entity\Hotel;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class HotelFixtures extends Fixture implements DependentFixtureInterface
{    
    private ManagerRegistry $doctrine;
    public function __construct(ManagerRegistry $doctrine)
    {
        $this->doctrine = $doctrine;
    }

    public function load(ObjectManager $manager): void
    {
        $hotels = [
            ['Hôtel Jurassique', 'Un hôtel tout confort au cœur du parc, idéal pour observer les dinosaures.', 'img/Hotels/hotel1.jpg', 'biome_0'],
            ['Hôtel Safari', 'Dormez sous les étoiles avec vue sur les plaines préhistoriques.', 'img/Hotels/hotel2.jpg', 'biome_5'],
            ['Refuge Volcanique', 'Un hébergement insolite à proximité d’un ancien volcan actif.', 'img/Hotels/hotel3.jpg', 'biome_8'],
            ['Lodge Tropical', 'Une immersion totale dans la jungle, au plus près de la nature.', 'img/Hotels/hotel4.jpg', 'biome_6'],
        ];
        $biomes = $this->doctrine->getRepository(Biome::class)->findAll();
        foreach ($hotels as [$libelle, $description, $image, $biomeRef]) {
            $biome = $biomes[array_rand($biomes)];
            $hotel = new Hotel();
            $hotel->setLibelleHotel($libelle);
            $hotel->setDescriptionHotel($description);
            $hotel->setImageHotel($image);
            $hotel->setBiome($biome);

            $manager->persist($hotel);
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
