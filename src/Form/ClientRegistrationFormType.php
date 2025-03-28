<?php 

namespace App\Form;

use App\Entity\Client;
use Doctrine\DBAL\Types\IntegerType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\IsTrue;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

class ClientRegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('email', EmailType::class, [
                'label'=> 'Adresse email',
                'required' => true,
                'attr'=>['class'=>'border border-bleuGlace p-0.5 rounded w-full focus:outline-none focus:ring-2 focus:ring-bleuClair'],
                'label_attr' => [
                    'class' => 'text-bleuLune font-semibold mb-1 block'
                ],
            ])
            ->add('nom', TextType::class, [
                'label'=> 'Nom',
                'required' => true,
                'attr'=>['class'=>'border border-bleuGlace p-0.5 rounded w-full focus:outline-none focus:ring-2 focus:ring-bleuClair'],
                'label_attr' => [
                    'class' => 'text-bleuLune font-semibold mb-1 block'
                ],
            ])
            ->add('prenom', TextType::class, [
                'label'=> 'Prénom',
                'required' => true,
                'attr'=>['class'=>'border border-bleuGlace p-0.5 rounded w-full focus:outline-none focus:ring-2 focus:ring-bleuClair'],
                'label_attr' => [
                    'class' => 'text-bleuLune font-semibold mb-1 block'
                ],
            ])
            ->add('numeroTelephone', TextType::class, [
                'label'=> 'Numéro de téléphone',
                'required' => true,
                'attr'=>['class'=>'border border-bleuGlace p-0.5 rounded w-full focus:outline-none focus:ring-2 focus:ring-bleuClair'],
                'label_attr' => [
                    'class' => 'text-bleuLune font-semibold mb-1 block'
                ],
            ])
            ->add('adressePostal', TextType::class, [

                'required' => true,
                'attr'=>['class'=>'border border-bleuGlace p-0.5 rounded w-full focus:outline-none focus:ring-2 focus:ring-bleuClair'],
                'label_attr' => [
                    'class' => 'text-bleuLune font-semibold mb-1 block'
                ],
            ])
            ->add('codePostal', NumberType::class, [
                'required' => true,
                'attr'=>['class'=>'border border-bleuGlace p-0.5 rounded w-full focus:outline-none focus:ring-2 focus:ring-bleuClair'],
                'label_attr' => [
                    'class' => 'text-bleuLune font-semibold mb-1 block'
                ],
            ])
            ->add('plainPassword', PasswordType::class, [
                'mapped' => false,
                'attr' => ['autocomplete' => 'new-password', 'class'=>'border border-bleuGlace p-0.5 rounded w-full focus:outline-none focus:ring-2 focus:ring-bleuClair'],
                'label'=> 'Mot de passe',
                'constraints' => [
                    new NotBlank([
                        'message' => 'Please enter a password',
                    ]),
                    new Length([
                        'min' => 6,
                        'minMessage' => 'Your password should be at least {{ limit }} characters',
                        'max' => 4096,
                    ]),
                ],
                'label_attr' => [
                    'class' => 'text-bleuLune font-semibold mb-1 block'
                ],
            ])
            ->add('agreeTerms', CheckboxType::class, [
                'label'=> "Conditions d'utilisation",
                'mapped' => false,
                'constraints' => [
                    new IsTrue([
                        'message' => 'You should agree to our terms.',
                    ]),
                ],
                'label_attr' => [
                    'class' => 'text-bleuLune font-semibold mr-1.5'
                ],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Client::class,
        ]);
    }
}
