<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Context\ExecutionContextInterface;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('first_name', TextType::class, [
                'label' => 'Prénom(s)',
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Veuillez entrer votre prénom']),
                    new Assert\Length([
                        'min' => 2, 
                        'max' => 255,
                        'minMessage' => 'Votre prénom doit contenir au moins {{ limit }} caractères',
                        'maxMessage' => 'Votre prénom ne peut pas dépasser {{ limit }} caractères',
                    ])
                ],
                'attr' => [
                    'class' => 'form-control', 
                    'placeholder' => 'Prénom',
                ],
                'label_attr' => [
                    'class' => "form-label",
                ],
            ])
            ->add('last_name', TextType::class, [
                'label' => 'Nom',
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Veuillez entrer votre nom']),
                    new Assert\Length([
                        'min' => 2, 
                        'max' => 255,
                        'minMessage' => 'Votre nom doit contenir au moins {{ limit }} caractères',
                        'maxMessage' => 'Votre nom ne peut pas dépasser {{ limit }} caractères',
                    ])
                ],
                'attr' => [
                    'class' => 'form-control', 
                    'placeholder' => 'Nom',
                ],
                'label_attr' => [
                    'class' => "form-label",
                ],
            ])
            ->add('birth_date', DateType::class, [
                'widget' => 'single_text',
                'label' => 'Date de naissance',
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Veuillez entrer votre date de naissance']),
                    new Assert\Callback([$this, 'validateAge']),
                ],
                'attr' => [
                    'class' => 'form-control'
                ],
                'label_attr' => [
                    'class' => "form-label",
                ],
            ])
            ->add('plainPassword', PasswordType::class, [
                'label' => 'Verification par mot de passe',
                'attr' => [
                    'class' => 'form-control', 
                    'placeholder' => 'Votre mot de passe'
                ],
                'label_attr' => [
                    'class' => "form-label",
                ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }

    public function validateAge($birthDate, ExecutionContextInterface $context)
    {
        if ($birthDate instanceof \DateTime) {
            $today = new \DateTime();
            $age = $today->diff($birthDate)->y;

            if ($age < 18) {
                $context->buildViolation('Vous devez avoir au moins 18 ans pour vous inscrire.')
                    ->addViolation();
            }
        } else {
            $context->buildViolation('Veuillez entrer une date valide')
                ->addViolation();
        }
    }
}
