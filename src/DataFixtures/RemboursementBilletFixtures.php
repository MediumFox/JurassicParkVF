<?php

namespace App\DataFixtures;

use App\Entity\Remboursement;
use App\Entity\RemboursementBillet;
use App\Entity\PayerBillet;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class RemboursementBilletFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create();

        $billets = $manager->getRepository(PayerBillet::class)->findAll();

        for ($i = 0; $i < 7; $i++) {
            $remboursement = $this->getReference("remboursement_$i", Remboursement::class);

            $nbBillets = rand(1, 3);
            $billetsSelectionnes = $faker->randomElements($billets, $nbBillets);

            foreach ($billetsSelectionnes as $billet) {
                $remboursementBillet = new RemboursementBillet();
                $remboursementBillet->setRemboursement($remboursement);
                $remboursementBillet->setBillet($billet);

                $manager->persist($remboursementBillet);
            }
        }

        $manager->flush();
    }

    public function getDependencies(): array
    {
        return [
            RemboursementFixtures::class,
            PayerBilletFixtures::class,
        ];
    }
}
