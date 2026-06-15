<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Validator\Constraints as Assert;

class UserPasswordType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('plainPassword', PasswordType::class, [
                'label' => 'Veuiller saisir votre mot de passe actuel',
                'attr' => [
                    'class' => 'form-control', 
                    'placeholder' => 'Votre mot de passe'
                ],
                'label_attr' => [
                    'class' => "form-label",
                ],
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Ce champ est requis']),
                ],
            ])
            ->add('newPassword', RepeatedType::class, [
                'type' => PasswordType::class,
                'first_options' => [
                    'label' => 'Veuiller saisir votre nouveau mot de passe',
                    'attr' => [
                        'class' => 'form-control',
                        'placeholder' => 'Votre nouveau mot de passe'
                    ],
                    'label_attr' => [
                        'class' => "form-label",
                    ],
                    'constraints' => [
                        new Assert\NotBlank(['message' => 'Ce champ est requis']),
                        new Assert\Length([
                            'min' => 8,
                            'minMessage' => 'Votre mot de passe doit contenir au moins {{ limit }} caractères',
                        ]),
                        new Assert\Regex([
                            'pattern' => '/[A-Za-z]/',
                            'match' => true,
                            'message' => 'Votre mot de passe doit contenir des lettres',
                        ]),
                    ],
                ],
                'second_options' => [
                    'label' => 'Veuiller retaper votre nouveau mot de passe',
                    'attr' => [
                        'class' => 'form-control',
                        'placeholder' => 'Retaper votre mot de passe'
                    ],
                    'label_attr' => [
                        'class' => "form-label",
                    ],
                ],
                'invalid_message' => 'Les mots de passe ne correspondent pas.',
            ])
        ;
    }
}
