<?php

namespace App\DataFixtures;

use App\Entity\Client;
use App\Entity\Chambre;
use App\Entity\Date;
use App\Entity\LouerHotel;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class LouerHotelFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        $faker = \Faker\Factory::create('fr_FR');

        $clients = $manager->getRepository(Client::class)->findAll();
        $chambres = $manager->getRepository(Chambre::class)->findAll();
        $dates = $manager->getRepository(Date::class)->findAll();

        $clientSansHotel = $clients[0];
        $clientsAvecHotels = array_slice($clients, 1);

        foreach ($clientsAvecHotels as $client) {
            for ($i = 0; $i < 10; $i++) {
                $sejour = new LouerHotel();

                $chambre = $faker->randomElement($chambres);
                $date = $faker->randomElement($dates);

                $start = $faker->dateTimeBetween('-2 months', '+2 months');
                $end = (clone $start)->modify('+'.rand(1, 5).' days');

                $note = rand(0, 1) ? rand(1, 5) : null; // 50% de chances d'avoir une note

                $sejour->setUser($client);
                $sejour->setChambre($chambre);
                $sejour->setDate($date);
                $sejour->setDebutLocation($start);
                $sejour->setFinLocation($end);
                $sejour->setNote($note);

                $manager->persist($sejour);
            }
        }

        $manager->flush();
    }

    public function getDependencies(): array
    {
        return [
            ClientFixtures::class,
            ChambreFixtures::class,
            DateFixtures::class,
        ];
    }
}
