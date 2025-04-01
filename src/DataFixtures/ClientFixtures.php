<?php

namespace App\DataFixtures;

use App\Entity\Client;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class ClientFixtures extends Fixture
{
    private UserPasswordHasherInterface $hasher;

    public function __construct(UserPasswordHasherInterface $hasher)
    {
        $this->hasher = $hasher;
    }

    public function load(ObjectManager $manager): void
    {
        $clients = [
            ['Dupont', 'Lucas', 'lucas.dupont@mail.com', '0612345678', '12 Rue des Tricératops', 75001],
            ['Lemoine', 'Marie', 'marie.lemoine@mail.com', '0623456789', '5 Avenue des Raptors', 69002],
            ['Nguyen', 'Kevin', 'kevin.nguyen@mail.com', '0634567890', '24 Allée des Palmiers', 13003],
            ['Bertrand', 'Claire', 'claire.bertrand@mail.com', '0645678901', '8 Boulevard des Fossiles', 44000],
            ['Rodriguez', 'Sophie', 'sophie.rodriguez@mail.com', '0656789012', '15 Route du T-Rex', 34000],
        ];

        foreach ($clients as [$nom, $prenom, $email, $telephone, $adresse, $cp]) {
            $client = new Client();
            $client->setNom($nom);
            $client->setPrenom($prenom);
            $client->setEmail($email);
            $client->setNumeroTelephone($telephone);
            $client->setAdressePostal($adresse);
            $client->setCodePostal($cp);
            $client->setIsVerified(true);
            $client->setOtp(null); 
            $client->setRoles(['ROLE_CLIENT']);

            $password = $this->hasher->hashPassword($client, 'user1234');
            $client->setPassword($password);

            $manager->persist($client);
        }

        $manager->flush();
    }
}
