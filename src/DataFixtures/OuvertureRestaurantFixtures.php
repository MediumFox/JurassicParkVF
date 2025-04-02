<?php

namespace App\DataFixtures;

use App\Entity\OuvertureRestaurant;
use App\Entity\Restaurant;
use App\Entity\Jour;
use App\Entity\Horaire;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Faker\Factory;

class OuvertureRestaurantFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create('fr_FR');

        $restaurants = $manager->getRepository(Restaurant::class)->findAll();
        $jours = $manager->getRepository(Jour::class)->findAll();
        $horaires = $manager->getRepository(Horaire::class)->findAll();

        foreach ($restaurants as $restaurant) {
            $joursOuverts = $faker->randomElements($jours, rand(5, 7));

            foreach ($joursOuverts as $jour) {
                $horairesDuJour = $faker->randomElements($horaires, rand(1, 2));

                foreach ($horairesDuJour as $horaire) {
                    $ouverture = new OuvertureRestaurant();
                    $ouverture->setRestaurant($restaurant);
                    $ouverture->setJour($jour);
                    $ouverture->setHoraire($horaire);

                    $manager->persist($ouverture);
                }
            }
        }

        $manager->flush();
    }

    public function getDependencies(): array
    {
        return [
            RestaurantFixtures::class,
            HoraireFixtures::class,
            JourFixtures::class,
        ];
    }
}
