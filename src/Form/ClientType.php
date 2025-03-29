<?php

namespace App\Form;

use App\Entity\Biome;
use App\Entity\Client;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;


class ClientType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom', TextType::class,[
                'attr'=>[
                    'placeholder' => 'Axel',
                    'maxlength' => 50,
                    'minlenght' => 2,
                    'class'=>'border border-bleuGlace p-0.5 rounded w-full focus:outline-none focus:ring-2 focus:ring-bleuClair mb-2.5'
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
            ->add('prenom', TextType::class,[
                'attr'=>[
                    'placeholder' => 'Renard',
                    'maxlength' => 50,
                    'minlenght' => 2,
                    'class'=>'border border-bleuGlace p-0.5 rounded w-full focus:outline-none focus:ring-2 focus:ring-bleuClair mb-2.5'
                ],
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Le libellé est obligatoire']),
                    new Assert\Length([
                        'min' => 3,
                        'max' => 50,
                        'minMessage' => 'Le libellé doit contenir au moins {{ limit }} caractères',
                        'maxMessage' => 'Le prénom ne doit pas dépasser {{ limit }} caractères'
                    ])
                ]
            ])
            ->add('email', EmailType::class,[
                'attr'=>[
                    'placeholder' => '...',
                    'class'=>'border border-bleuGlace p-0.5 rounded w-full focus:outline-none focus:ring-2 focus:ring-bleuClair mb-2.5'
                ],
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Le libellé est obligatoire']),
                ]
            ])
            ->add('numeroTelephone', TextType::class,[
                'attr'=>[
                    'placeholder' => '0948456362',
                    'class'=>'border border-bleuGlace p-0.5 rounded w-full focus:outline-none focus:ring-2 focus:ring-bleuClair mb-2.5'
                ],
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Le numéro est obligatoire']),
                ]
            ])
            ->add('adressePostal', TextType::class,[
                'attr'=>[
                    'placeholder' => 'La ruetabaga',
                    'class'=>'border border-bleuGlace p-0.5 rounded w-full focus:outline-none focus:ring-2 focus:ring-bleuClair mb-2.5'
                ],
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Adresse postal est obligatoire']),
                ]
            ])
            ->add('codePostal', NumberType::class,[
                'attr'=>[
                    'placeholder' => '44000',
                    'class'=>'border border-bleuGlace p-0.5 rounded w-full focus:outline-none focus:ring-2 focus:ring-bleuClair mb-2.5'
                ],
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Le code postal est obligatoire']),
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Client::class,
        ]);
    }
}
