<?php

namespace App\Form;

use App\Entity\FormatBillet;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class FormatBilletType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('libelleBillet', TextType::class, [
                'attr'=>[
                    'placeholder'=>'Exemple : prenium...',
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
            ->add('imageBillet0', FileType::class)
            ->add('descriptionBillet', TextareaType::class, [
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
            ->add('prixBillet', NumberType::class, [
                'attr'=>[
                    'placeholder'=> 'Exemple : 20.99',
                    'min'=>20,
                    'max'=>10000,
                ],
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Le prix est obligatoire']),
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => FormatBillet::class,
        ]);
    }
}
