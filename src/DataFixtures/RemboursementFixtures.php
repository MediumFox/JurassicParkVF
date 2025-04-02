<?php

namespace App\DataFixtures;

use App\Entity\Remboursement;
use App\Entity\Client;
use App\Entity\PayerBillet;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class RemboursementFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create('fr_FR');

        $clients = $manager->getRepository(Client::class)->findAll();
        $billets = $manager->getRepository(PayerBillet::class)->findAll();

        for ($i = 0; $i < 7; $i++) {
            $remboursement = new Remboursement();

            $client = $faker->randomElement($clients);
            $billet = $faker->randomElement($billets);
            $date = $faker->dateTimeBetween('-2 months', 'now');

            $remboursement->setClient($client);
            $remboursement->setBillet($billet);
            $remboursement->setDateDemande($date);
            $remboursement->setStatut($faker->randomElement(['En attente', 'Validé', 'Refusé']));
            $remboursement->setMotif($faker->sentence(10));
            $remboursement->setMontant($faker->randomFloat(2, 10, 100));

            $manager->persist($remboursement);
            $this->addReference("remboursement_$i", $remboursement);
        }

        $manager->flush();
    }

    public function getDependencies(): array
    {
        return [
            ClientFixtures::class,
            PayerBilletFixtures::class,
        ];
    }
}
