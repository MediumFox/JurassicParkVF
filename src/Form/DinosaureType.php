<?php

namespace App\Form;

use App\Entity\Dinosaure;
use App\Entity\Enclos;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DinosaureType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('imageDinosaure', FileType::class, [
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Une image est obligatoire']),
                ]
            ])
            ->add('libelleDinosaure', TextType::class,[
                'attr'=>[
                    'placeholder'=>'Exemple : T-Rex'
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
            ->add('regimeDinosaure', ChoiceType::class, [
                'label' => 'Régime du dinosaure',
                'choices' => [
                    'Herbivores' => 'Herbivores',
                    'Carnivores' => 'Carnivores',
                    'Omnivores' => 'Omnivores',
                ],
                'placeholder' => 'Sélectionnez un régime',
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Le régime est obligatoire']),
                ]
            ])
            ->add('ereDinosaure', ChoiceType::class, [
                'label' => 'Ere du dinosaure',
                'choices' => [
                    'Neogene' => 'Neogene',
                    'Paleogene' => 'Paleogene',
                    'Cretace' => 'Cretace',
                    'Jurassique' => 'Jurassique',
                    'Trias' => 'Trias',
                    'Permien' => 'Permien',
                    'Carbonifère' => 'Carbonifère',
                    'Devonien' => 'Devonien',
                    'Silurien' => 'Silurien',
                    'Ordovicien' => 'Ordovicien',
                    'Cambrien' => 'Cambrien',
                ],
                'placeholder' => 'Sélectionnez une ère',
                'constraints' => [
                    new Assert\NotBlank(['message' => 'L&apos;étage est obligatoire']),
                ]
            ])
            ->add('descriptionDinosaure', TextareaType::class, [
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
            ->add('enclos', EntityType::class, [
                'class' => Enclos::class,
                'choice_label' => 'id',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Dinosaure::class,
        ]);
    }
}
