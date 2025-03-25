<?php

namespace App\DataFixtures;

use App\Entity\Hotel;
use App\Entity\FormatChambre;
use App\Entity\Chambre;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class ChambreFixtures extends Fixture implements DependentFixtureInterface
{
    private ManagerRegistry $doctrine;

    public function __construct(ManagerRegistry $doctrine)
    {
        $this->doctrine = $doctrine;
    }

    public function load(ObjectManager $manager): void
    {
        $fChambres = $this->doctrine->getRepository(FormatChambre::class)->findAll();
        $hotels = $this->doctrine->getRepository(Hotel::class)->findAll();

        for ($i = 1; $i <= 200; $i++) {
            $chambre = new Chambre();
            $chambre->setEtageChambre('Première étage');
            $chambre->setNumeroChambre('124');
            $format = $fChambres[array_rand($fChambres)];
            $hotel = $hotels[array_rand($hotels)];
            $chambre->setFormatChambre($format);
            $chambre->setHotel($hotel);
   
            $manager->persist($chambre);
        }

        $manager->flush();
    }

    public function getDependencies(): array
    {
        return [
            FormatChambreFixtures::class,
            HotelFixtures::class,
        ];
    }
}
