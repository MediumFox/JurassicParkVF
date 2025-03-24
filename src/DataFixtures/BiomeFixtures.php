<?php

namespace App\DataFixtures;

use App\Entity\Biome;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class BiomeFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $biomes = [
            ['Savane', "Une vaste étendue herbeuse parsemée d’arbres, idéale pour les grands herbivores."],
            ['Forêt tropicale', "Un environnement humide et dense en végétation, abritant des espèces rares et exotiques."],
            ['Désert', "Un biome aride avec des températures extrêmes, peuplé de créatures adaptées à la sécheresse."],
            ['Montagne', "Un terrain escarpé aux conditions climatiques variables, parfait pour les espèces résistantes."],
            ['Marécage', "Un biome humide et vaseux où vivent des espèces amphibies et semi-aquatiques."],
            ['Plaines', "Des étendues ouvertes de végétation basse, idéales pour les grands troupeaux de dinosaures."],
            ['Jungle', "Une forêt dense et tropicale, riche en biodiversité et peu explorée."],
            ['Toundra', "Une zone froide avec peu de végétation, habitée par des espèces résistantes au froid."],
            ['Volcanique', "Un biome rocheux, chaud et instable, proche d’activités géothermiques."],
            ['Lac', "Un grand plan d’eau entouré de végétation aquatique, idéal pour les espèces semi-aquatiques."]
        ];

        foreach ($biomes as $index => [$libelle, $description]) {
            $biome = new Biome();
            $biome->setLibelleBiome($libelle);
            $biome->setDescriptionBiome($description);
            $this->addReference('biome_' . $index, $biome);
            $manager->persist($biome);
        }

        $manager->flush();
    }
}
