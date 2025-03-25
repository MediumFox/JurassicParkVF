<?php

namespace App\DataFixtures;

use App\Entity\FormatChambre;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ManagerRegistry; 
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class FormatChambreFixtures extends Fixture implements DependentFixtureInterface
{
    private ManagerRegistry $doctrine;

    public function __construct(ManagerRegistry $doctrine)
    {
        $this->doctrine = $doctrine;
    }
    public function load(ObjectManager $manager): void
    {
        $formats = [
            ['Chambre Standard', "Une chambre confortable avec un lit double, salle de bain privée et vue sur le parc.", 90],
            ['Chambre Familiale', "Spacieuse, idéale pour les familles avec lits superposés, lit double et coin salon.", 140],
            ['Suite Luxe', "Suite haut de gamme avec jacuzzi privé, balcon panoramique et services exclusifs.", 250],
            ['Cabane Jungle', "Hébergement insolite perché dans les arbres, avec accès direct à la nature.", 120],
            ['Tente Safari', "Tente équipée pour une immersion totale dans le décor préhistorique, avec confort moderne.", 100],
        ];

        foreach ($formats as [$libelle, $description, $prix]) {
            $format = new FormatChambre();
            $format->setLibelleFormatChambre($libelle);
            $format->setDescriptionFormatBillet($description);
            $format->setPrixFormatChambre($prix);

            $manager->persist($format);
        }

        $manager->flush();
    }

    public function getDependencies(): array
    {
        return [
            HotelFixtures::class,
        ];
    }
}
