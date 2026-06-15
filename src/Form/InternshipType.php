<?php

namespace App\Form;

use App\Entity\Internship;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;

class InternshipType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('theme', TextType::class, [
                'label' => 'Stage effectué: "thème"',
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Veuillez saisir votre thème.'])
                ],
                'attr' => [
                    'class' => "form-control",
                    'placeholder' => 'Thème'
                ],
                'label_attr' => [
                    'class' => "form-label",
                ],
            ])
            ->add('organization', TextType::class, [
                'label' => 'Organisation ou Société',
                'constraints' => [
                    new Assert\NotBlank(['message' => "Veuillez saisir le nom de l'Organisation ou de la Société du stage."])
                ],
                'attr' => [
                    'class' => "form-control",
                    'placeholder' => "Nom de l'organisation / société du Satge."
                ],
                'label_attr' => [
                    'class' => "form-label",
                ],
            ])
            ->add('internship_year', TextType::class, [
                'label' => "Année de stage",
                'constraints' => [
                    new Assert\NotBlank(['message' => "Veuillez saisir l'année du stage."]),
                ],
                'attr' => [
                    'class' => "form-control",
                    'placeholder' => 'Entrez l\'année de stage'
                ],
                'label_attr' => [
                    'class' => "form-label",
                ],
            ])
            ->add('duration', IntegerType::class, [
                'label' => "Durée (Nombre de mois)",
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Veuillez saisir l\'année de certification.']),
                    new Assert\Range([
                        'min' => 1,
                        'max' => 12,
                        'notInRangeMessage' => 'La durée du stage doit être entre {{ min }} et {{ max }}.'
                    ])
                ],
                'attr' => [
                    'class' => "form-control",
                    'placeholder' => 'Durée du stage'
                ],
                'label_attr' => [
                    'class' => "form-label",
                ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Internship::class,
        ]);
    }
}
