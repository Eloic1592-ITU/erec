<?php

namespace App\Form;

use App\Entity\User;
use App\Entity\WorkExperience;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;

class WorkExperienceType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('position', TextType::class, [
                'label' => 'Poste occupé',
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Veuillez saisir le poste.']),
                ],
                'attr' => [
                    'class' => "form-control",
                    'placeholder' => 'Entrez le poste occupé',
                ],
                'label_attr' => [
                    'class' => "form-label",
                ],
            ])
            ->add('organization', TextType::class, [
                'label' => 'Organisme ou Société',
                'constraints' => [
                    new Assert\NotBlank(['message' => "Veuillez saisir le nom de l'organisation."]),
                ],
                'attr' => [
                    'class' => "form-control",
                    'placeholder' => "Nom de l'organisme / de la Société",
                ],
                'label_attr' => [
                    'class' => "form-label",
                ],
            ])
            ->add('location', TextType::class, [
                'label' => 'Lieu',
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Veuillez saisir le lieu.']),
                ],
                'attr' => [
                    'class' => "form-control",
                    'placeholder' => 'Entrez le lieu',
                ],
                'label_attr' => [
                    'class' => "form-label",
                ],
            ])
            ->add('start_date', DateType::class, [
                'label' => 'Date de début',
                'widget' => 'single_text',
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Veuillez saisir la date de début.']),
                    new Assert\LessThanOrEqual([
                        'value' => new \DateTime(),
                        'message' => 'La date ne peut pas être postérieure à aujourd’hui.',
                    ]),
                ],
                'attr' => [
                    'class' => "form-control",
                    'placeholder' => 'Entrez la date de début',
                    'max' => (new \DateTime())->format('Y-m-d'),
                ],
                'label_attr' => [
                    'class' => "form-label",
                ],
            ])            
            ->add('end_date', DateType::class, [
                'label' => 'Date de fin',
                'widget' => 'single_text',
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Veuillez saisir la date de fin.']),
                ],
                'attr' => [
                    'class' => "form-control",
                    'placeholder' => 'Entrez la date de fin',
                ],
                'label_attr' => [
                    'class' => "form-label",
                ],
            ])
            // ->add('reference_name', TextType::class, [
            //     'constraints' => [
            //         new Assert\NotBlank(['message' => 'Veuillez saisir le nom complet.']),
            //     ],
            //     'attr' => [
            //         'class' => "form-control",
            //         'placeholder' => 'Nom et prénom(s)',
            //     ],
            // ])
            // ->add('reference_position', TextType::class, [
            //     'constraints' => [
            //         new Assert\NotBlank(['message' => 'Veuillez saisir le poste.']),
            //     ],
            //     'attr' => [
            //         'class' => "form-control",
            //         'placeholder' => 'Fonction',
            //     ],
            // ])
            // ->add('reference_email', EmailType::class, [
            //     'constraints' => [
            //         new Assert\NotBlank(['message' => "Veuillez saisir l'adresse e-mail."]),
            //         new Assert\Email(['message' => 'Veuillez saisir un email valide.']),
            //     ],
            //     'attr' => [
            //         'class' => "form-control",
            //         'placeholder' => 'Adresse e-mail',
            //     ],
            // ])
            // ->add('reference_phone', TelType::class, [
            //     'constraints' => [
            //         new Assert\NotBlank(['message' => 'Veuillez saisir le numéro de téléphone.']),
            //     ],
            //     'attr' => [
            //         'class' => "form-control tel w-100",
            //         'placeholder' => 'Exemple : 034 xx xxx xx',
            //         'maxLength' => 13,
            //     ],
            // ])
            ->add('workFile', FileType::class, [
                'label' => "Insérer une copie d’attestation de travail/ Stage (.jpg .png .pdf)(Taille maximum: 1 MB)",
                'mapped' => false,
                'constraints' => [
                    /*new Assert\NotBlank(['message' => "Veuillez une copie d'attestation de travail."]),*/
                    new Assert\File([
                        'maxSize' => '2M',
                        'mimeTypes' => [
                            'image/jpeg',
                            'image/png',
                            'application/pdf',
                        ],
                        'mimeTypesMessage' => 'Veuillez télécharger un fichier au format .jpg, .png ou .pdf.',
                    ]),
                ],
                'attr' => [
                    'class' => "form-control",
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
            'data_class' => WorkExperience::class,
        ]);
    }
}
