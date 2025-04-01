<?php

namespace App\DataFixtures;

use App\Entity\Administrateur;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class AdministrateurFixtures extends Fixture
{
    private UserPasswordHasherInterface $hasher;

    public function __construct(UserPasswordHasherInterface $hasher)
    {
        $this->hasher = $hasher;
    }

    public function load(ObjectManager $manager): void
    {
        $noms = [
            ['Pierre', 'Chartier', 'admin1@parc.com', '0600000001', 1],
            ['Martin', 'Bruno', 'admin2@parc.com', '0600000002', 2],
            ['Lemoine', 'Chloé', 'admin3@parc.com', '0600000003', 3],
            ['Bernard', 'David', 'admin4@parc.com', '0600000004', 2],
            ['Petit', 'Emma', 'admin5@parc.com', '0600000005', 1],
        ];

        foreach ($noms as [$nom, $prenom, $email, $tel, $niveau]) {
            $admin = new Administrateur();
            $admin->setNom($nom);
            $admin->setPrenom($prenom);
            $admin->setEmail($email);
            $admin->setNumeroTelephone($tel);
            $admin->setIsVerified(true);
            $admin->setAdminLevel($niveau);
            $admin->setRoles(['ROLE_ADMIN']);

            $hashedPassword = $this->hasher->hashPassword($admin, 'admin1234');
            $admin->setPassword($hashedPassword);

            $manager->persist($admin);
        }

        $manager->flush();
    }
}
