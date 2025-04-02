<?php

namespace App\DataFixtures;

use App\Entity\PayerBillet;
use App\Entity\Client;
use App\Entity\Date;
use App\Entity\FormatBillet;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class PayerBilletFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        $faker = \Faker\Factory::create('fr_FR');

        $clients = $manager->getRepository(Client::class)->findAll();
        $dates = $manager->getRepository(Date::class)->findAll();
        $formats = $manager->getRepository(FormatBillet::class)->findAll();

        $clientSansBillet = $clients[0];
        $clientsAvecBillets = array_slice($clients, 1);

        foreach ($clientsAvecBillets as $client) {
            for ($i = 0; $i < 10; $i++) {
                $payerBillet = new PayerBillet();

                $date = $faker->randomElement($dates);
                $format = $faker->randomElement($formats);

                $payerBillet->setUser($client);
                $payerBillet->setDate($date);
                $payerBillet->setBillet($format);
                $payerBillet->setNom($client->getNom());
                $payerBillet->setPrenom($client->getPrenom());

                $start = $faker->dateTimeBetween('-2 months', '+2 months');
                $end = (clone $start)->modify('+1 day');

                $payerBillet->setDebutBillet($start);
                $payerBillet->setFinBillet($end);

                $manager->persist($payerBillet);
            }
        }

        $manager->flush();
    }

    public function getDependencies(): array
    {
        return [
            ClientFixtures::class,
            DateFixtures::class,
            FormatBilletFixtures::class,
        ];
    }
}
