<?php

namespace App\DataFixtures;

use App\Entity\Horaire;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class HoraireFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create('fr_FR');

        $startDate = new \DateTime('today');

        for ($i = 0; $i < 7; $i++) {
            $horaire = new Horaire();

            $jour = (clone $startDate)->modify("+$i days");

            $ouverture = (clone $jour)->setTime(rand(8, 10), 0);
            $fermeture = (clone $jour)->setTime(rand(17, 20), 0);

            $horaire->setOuverture($ouverture);
            $horaire->setFermeture($fermeture);

            $manager->persist($horaire);
        }

        $manager->flush();
    }
}
