<?php

namespace App\Form;

use App\Entity\Chambre;
use App\Entity\Hotel;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ChambreType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('numeroChambre', TextType::class, [
                'attr'=>[
                    'placeholder'=>'Exemple : 166',
                    'class'=>'border border-bleuGlace p-0.5 rounded w-full focus:outline-none focus:ring-2 focus:ring-bleuClair'
                ],
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Le libellé est obligatoire']),
                    new Assert\Length([
                        'min' => 3,
                        'max' => 50,
                        'minMessage' => 'Le libellé doit contenir au moins {{ limit }} caractères',
                        'maxMessage' => 'Le libellé ne doit pas dépasser {{ limit }} caractères'
                    ])
                ],
                'label_attr' => [
                    'class' => 'text-bleuLune font-semibold mb-1 block'
                ],
                    
            ])
            ->add('etageChambre', ChoiceType::class, [
                'attr'=>[
                    'class'=>'border border-bleuGlace p-0.5 rounded w-full focus:outline-none focus:ring-2 focus:ring-bleuClair'
                ],
                'label' => 'Quel étage',
                'choices' => [
                    'Premier' => 'Premier étage',
                    'Deuxième' => 'Deuxième étage',
                    'Troisième' => 'Troisième étage',
                    'Quatrième' => 'Quatrième étage'
                ],
                'placeholder' => 'Sélectionnez un étage',
                'constraints' => [
                    new Assert\NotBlank(['message' => 'L&apos;étage est obligatoire']),
                ],
                'label_attr' => [
                    'class' => 'text-bleuLune font-semibold mb-1 block'
                ],
            ])
            ->add('hotel', EntityType::class, [
                'attr'=>[
                    'class'=>'border border-bleuGlace p-0.5 rounded w-full focus:outline-none focus:ring-2 focus:ring-bleuClair'
                ],
                'class' => Hotel::class,
                'choice_label' => 'libelleHotel',
                'label_attr' => [
                    'class' => 'text-bleuLune font-semibold mb-1 block'
                ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Chambre::class,
        ]);
    }
}
