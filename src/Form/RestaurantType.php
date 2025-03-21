<?php

namespace App\Form;

use App\Entity\Biome;
use App\Entity\Restaurant;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;

class RestaurantType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('libelleRestaurant', TextType::class, [
                'attr'=>[
                    'placeholder'=>'Exemple : Ristourne...',
                ],
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Le libellé est obligatoire']),
                    new Assert\Length([
                        'min' => 3,
                        'max' => 50,
                        'minMessage' => 'Le libellé doit contenir au moins {{ limit }} caractères',
                        'maxMessage' => 'Le libellé ne doit pas dépasser {{ limit }} caractères'
                    ])
                ]
            ])
            ->add('imageRestaurant', FileType::class)
            ->add('nbTable', IntegerType::class, [
                'attr'=>[
                    'placeholder'=> 'Exemple : 4',
                    'min'=>5,
                    'max'=>200,
                ],
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Le nombre de tables est obligatoire']),
                ]
            ])
            ->add('biome', EntityType::class, [
                'class' => Biome::class,
                'choice_label' => 'id',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Restaurant::class,
        ]);
    }
}
