<?php

namespace App\Form;

use App\Entity\Horaire;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class HoraireType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('ouverture', null, [
                'attr'=>[
                    'class'=>'border border-bleuGlace p-0.5 rounded w-full focus:outline-none focus:ring-2 focus:ring-bleuClair mb-2.5'
                ],
                'label'=>'Ouverture',
                'widget' => 'single_text',
                'label_attr' => [
                    'class' => 'text-bleuLune font-semibold mb-1 block'
                ],
            ])
            ->add('fermeture', null, [
                'attr'=>[
                    'class'=>'border border-bleuGlace p-0.5 rounded w-full focus:outline-none focus:ring-2 focus:ring-bleuClair mb-2.5'
                ],
                'label_attr' => [
                    'class' => 'text-bleuLune font-semibold mb-1 block'
                ],
                'label'=>'Fermeture',
                'widget' => 'single_text',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Horaire::class,
        ]);
    }
}
