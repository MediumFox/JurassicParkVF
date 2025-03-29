<?php

namespace App\Form;

use App\Entity\Biome;
use App\Entity\Enclos;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EnclosType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('libelleEnclos', TextType::class, [
                'attr'=>[
                    'placeholder'=>'Enclos dynamique',
                    'class'=>'border border-bleuGlace p-0.5 rounded w-full focus:outline-none focus:ring-2 focus:ring-bleuClair mb-2.5'
                ],
                'label_attr' => [
                    'class' => 'text-bleuLune font-semibold mb-1 block'
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
            ->add('biome', EntityType::class, [
                'attr'=>[
                    'class'=>'border border-bleuGlace p-0.5 rounded w-full focus:outline-none focus:ring-2 focus:ring-bleuClair mb-2.5'
                ],
                'class' => Biome::class,
                'choice_label' => 'libelleBiome',
                'label_attr' => [
                    'class' => 'text-bleuLune font-semibold mb-1 block'
                ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Enclos::class,
        ]);
    }
}
