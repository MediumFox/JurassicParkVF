<?php

namespace App\DataFixtures;

use App\Entity\FormatBillet;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class FormatBilletFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $formats = [
            ['Classique', "Un billet standard donnant accès à toutes les zones principales du parc.", 'classique.jpg', 50],
            ['VIP', "Accès privilégié avec coupe-file, visite guidée et places réservées aux spectacles.", 'vip.jpg', 120],
            ['Famille', "Pack avantageux pour 2 adultes et jusqu’à 3 enfants.", 'famille.jpg', 160],
            ['Étudiant', "Tarif réduit sur présentation d’une carte étudiante valide.", 'etudiant.jpg', 35],
            ['Soirée', "Billet valable uniquement en fin de journée pour découvrir le parc au coucher du soleil.", 'soiree.jpg', 25],
        ];

        foreach ($formats as [$libelle, $description, $image, $prix]) {
            $billet = new FormatBillet();
            $billet->setLibelleBillet($libelle);
            $billet->setDescriptionBillet($description);
            $billet->setImageBillet($image);
            $billet->setPrixBillet($prix);

            $manager->persist($billet);
        }

        $manager->flush();
    }
}
