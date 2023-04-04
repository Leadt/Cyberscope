<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\Image;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\FileType;



class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('pseudo_user', TextType::class, [
                'label' => false,
                'attr' => ['placeholder' => 'Pseudo'],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Veuillez entrez un pseudo',
                    ]),
                    new Length([
                        'min' => 3,
                        'minMessage' => 'Le pseudo doit contenir au moins 3 caratères',
                        'max' => 180,
                    ]),
                ],

            ])
            ->add('nom_user', TextType::class, [
                'label' => false,
                'attr' => ['placeholder' => 'Nom'],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Veuillez entrez un nom',
                    ]),
                    new Length([
                        'min' => 2,
                        'minMessage' => 'Le nom doit contenir au moins 2 caratères',
                        'max' => 30,
                    ]),
                ],

            ])
            ->add('prenom_user', TextType::class, [
                'label' => false,
                'attr' => ['placeholder' => 'Prénom'],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Veuillez entrez un prénom',
                    ]),
                    new Length([
                        'min' => 2,
                        'minMessage' => 'Le prénom doit contenir au moins 2 caratères',
                        'max' => 30,
                    ]),
                ],

            ])
            ->add('plainPassword', PasswordType::class, [
                // instead of being set onto the object directly,
                // this is read and encoded in the controller
                'label' => false, 'mapped' => false,


                'attr' => ['autocomplete' => 'new-password', 'placeholder' => 'Mot de passe'],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Veuillez entrez un mot de passe',
                    ]),
                    new Length([
                        'min' => 6,
                        'minMessage' => 'Le mot de passe doit contenir au moins 6 caratères',
                        // max length allowed by Symfony for security reasons
                        'max' => 20,
                    ]),
                ],
            ])
            ->add('photo_user', FileType::class, [
                'required' => false,
                'mapped' => false,
                'constraints' => [
                    new Image(['maxSize' => '1024k'])
                ],
                'attr' => array(
                    'accept' => 'image/*'
                ),
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
