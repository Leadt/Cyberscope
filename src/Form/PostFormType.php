<?php

namespace App\Form;

use App\Entity\Post;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\Image;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class PostFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('titre_post', TextType::class, [
                'label' => false,
                'attr' => ['placeholder' => 'Titre'],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Veuillez entrez un titre',
                    ]),
                    new Length([
                        'max' => 100,
                        'maxMessage' => 'Le titre ne doit pas dépasser 100 caratères',
                    ]),
                ],

            ])
            ->add('description_post', TextType::class, [
                'label' => false,
                'attr' => ['placeholder' => 'Description'],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Veuillez entrez une description',
                    ]),
                    new Length([
                        'min' => 3,
                        'minMessage' => 'La description doit contenir au moins 3 caratères',
                        'max' => 155,
                        'maxMessage' => 'La description ne doit pas dépasser 155 caratères'
                    ]),
                ],

            ])
            ->add('image_post', FileType::class, [
                'required' => false,
                'mapped' => false,
                'constraints' => [
                    new Image(['maxSize' => '1024k'])
                ],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Post::class,
        ]);
    }
}
