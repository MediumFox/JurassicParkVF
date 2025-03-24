<?php

namespace App\DataFixtures;

use App\Entity\Jour;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class JourFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $jours = [
            ['Lundi'],
            ['Mardi'],
            ['Mercredi'],
            ['Jeudi'],
            ['Vendredi'],
            ['Samedi'],
            ['Dimanche'],
        ];

        foreach ($jours as $index => [$libelle]) {
            $jour = new Jour();
            $jour->setLibelleJour(libelleJour: $libelle);
            $manager->persist($jour);
        }

        $manager->flush();
    }
}
