<?php

namespace App\Form;

use App\Entity\Produit;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class ProduitType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('libelleProduit', TextType::class, [
                'attr'=>[
                    'placeholder'=>'Exemple : t-bag...',
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
            ->add('imageProduit', FileType::class)
            ->add('descriptionProduit', TextareaType::class, [
                'attr'=>[
                    'placeholder'=>'...'
                ],
                'constraints' => [
                    new Assert\NotBlank(['message' => 'La description est obligatoire']),
                    new Assert\Length([
                        'min' => 25,
                        'max' => 1000,
                        'minMessage' => 'La description doit contenir au moins {{ limit }} caractères',
                        'maxMessage' => 'La description ne doit pas dépasser {{ limit }} caractères'
                    ])
                ]
            ])
            ->add('stock', IntegerType::class, [
                'attr'=>[
                    'placeholder'=> '10',
                    'min'=>1,
                    'max'=>10000,
                ],
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Le stock est obligatoire']),
                ]
            ])
            ->add('disponibleAchat', CheckboxType::class, [
                'mapped' => false,
            ])
            ->add('prixProduit', NumberType::class, [
                'attr'=>[
                    'placeholder'=> '10,99',
                    'min'=>0.10,
                    'max'=>10000,
                ],
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Le prix est obligatoire']),
                ]
            ]);
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Produit::class,
        ]);
    }
}
