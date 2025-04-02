<?php

namespace App\DataFixtures;

use App\Entity\Date;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class DateFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $now = new \DateTime();

        for ($i = 0; $i < 20; $i++) {
            $date = new Date();
            $date->setDate((clone $now)->modify("+$i days"));
            $manager->persist($date);
        }

        for ($i = 1; $i <= 20; $i++) {
            $date = new Date();
            $date->setDate((clone $now)->modify("-$i days"));
            $manager->persist($date);
        }

        for ($i = 1; $i <= 20; $i++) {
            $date = new Date();
            $date->setDate((clone $now)->modify("-$i months"));
            $manager->persist($date);
        }

        for ($i = 1; $i <= 20; $i++) {
            $date = new Date();
            $date->setDate((clone $now)->modify("-$i years"));
            $manager->persist($date);
        }

        $manager->flush();
    }
}
