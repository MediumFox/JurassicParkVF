<?php

namespace App\Form;

use DateTime;
use App\Entity\PayerBillet;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class ReserverBilletType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('debutBillet', DateType::class, [
                'widget' => 'single_text',
                'html5' => true,
                'attr' => [
                    'min' => (new DateTime())->format('Y-m-d'),
                    'class' => 'border border-bleuGlace p-0.5 rounded w-full focus:outline-none focus:ring-2 focus:ring-bleuClair',
                    'placeholder' => 'jj/mm/aaaa',
                ],
                'constraints' => [
                    new Assert\NotBlank(['message' => 'La date de début est obligatoire']),
                ],
            ])
        
            ->add('finBillet', DateType::class, [
                'widget' => 'single_text',
                'html5' => true,
                'attr' => [
                    'min' => (new DateTime())->format('Y-m-d'),
                    'class' => 'border border-bleuGlace p-0.5 rounded w-full focus:outline-none focus:ring-2 focus:ring-bleuClair',
                    'placeholder' => 'jj/mm/aaaa',
                ],
                'constraints' => [
                    new Assert\NotBlank(['message' => 'La date de début est obligatoire']),
                ],
                
            ])

        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => PayerBillet::class,
        ]);
    }
}
