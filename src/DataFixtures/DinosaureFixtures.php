<?php

namespace App\DataFixtures;

use Faker\Factory;
use App\Entity\Enclos;
use App\Entity\Dinosaure;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class DinosaureFixtures extends Fixture implements DependentFixtureInterface
{
    private ManagerRegistry $doctrine;

    public function __construct(ManagerRegistry $doctrine)
    {
        $this->doctrine = $doctrine;
    }

    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create('fr_FR');

        $enclosList = $this->doctrine->getRepository(Enclos::class)->findAll();

        $noms = [
            'Dsungaripterus', 'Pachycephalosaurus', 'Apatosaurus', 'Gigantspinosaurus', 'Baryonyx',
            'Attenborosaurus', 'Struthiomimus', 'Ouranosaurus', 'Compsognathus', 'Polacanthus',
            'Suchomimus', 'Ichthyosaurus', 'Maaradactylus', 'Tropeognathus', 'Mamenchisaurus',
            'Archaeornithomimus', 'Archaeornithomimus', 'Carnotaurus', 'Elasmosaurus', 'Gallimimus',
            'Sinosauropteryx', 'Giganotosaurus', 'Pentaceratops',
            'Corythosaurus', 'Jeholopterus', 'Euoplocephalus', 'Indoraptor', 'Chungkingosaurus',
            'Chasmosaurus', 'Liopleurodon', 'Tarbosaurus',
            'Proceratosaurus', 'Stegoceratops', 'Monolophosaurus', 'Nothosaurus', 'Spinoceratops',
            'Deinocheirus', 'Styxosaurus', 'Dunkleosteus', 'Alamosaurus', 'Concavenator',
            'Tsintaosaurus', 'Dilophosaurus', 'Sinoceratops'
        ];

        $regimes = ['Herbivore', 'Carnivore', 'Omnivore'];
        $eres = ['Jurassique', 'Crétacé', 'Trias','Neogene','Paleogene','Permien','Carbonifère','Devonien','Silurien', 'Ordovicien', 'Cambrien'];

        foreach ($noms as $nom) {
            $dino = new Dinosaure();
            $dino->setLibelleDinosaure($nom);
            $dino->setRegimeDinosaure($faker->randomElement($regimes));
            $dino->setEreDinosaure($faker->randomElement($eres));
            $dino->setDescriptionDinosaure($faker->paragraph(2));
            $dino->setImageDinosaure('img/Dinosaures/'.$nom.'.png');
            $dino->setEnclos($faker->randomElement($enclosList));

            $manager->persist($dino);
        }

        $manager->flush();
    }

    public function getDependencies(): array
    {
        return [
            EnclosFixtures::class,
        ];
    }
}
