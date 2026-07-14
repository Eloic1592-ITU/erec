<?php

namespace App\Form;

use App\Entity\Degree;
use App\Entity\Education;
use App\Entity\FieldOfStudy;
use App\Repository\DegreeRepository;
use App\Repository\FieldOfStudyRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;

class EducationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('degree', EntityType::class, [
                'class' => Degree::class,
                'choice_label' => 'name',
                'label' => 'Diplôme',
                'placeholder' => 'Sélectionnez un diplôme',
                'query_builder' => function (DegreeRepository $repo) {
                    return $repo->createQueryBuilder('d')
                        ->where('d.is_deleted = :isDeletedFalse OR d.is_deleted IS NULL')
                        ->setParameter('isDeletedFalse', false)
                        ->orderBy('d.name', 'ASC');
                },
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Le diplôme ne doit pas être vide.'])
                ],
                'attr' => [
                    'class' => "form-control form-select",
                ],
                'label_attr' => [
                    'class' => "form-label",
                ],
            ])
            ->add('field_of_study', EntityType::class, [
                'class' => FieldOfStudy::class,
                'choice_label' => 'name',
                'label' => 'Domaine d\'étude',
                'placeholder' => 'Sélectionnez un domaine d\'étude',
                'query_builder' => function (FieldOfStudyRepository $repo) {
                    return $repo->createQueryBuilder('f')
                        ->where('f.is_deleted = :isDeletedFalse OR f.is_deleted IS NULL')
                        ->setParameter('isDeletedFalse', false)
                        ->orderBy('f.name', 'ASC');
                },
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Le domaine d\'étude ne doit pas être vide.'])
                ],
                'attr' => [
                    'class' => "form-control form-select",
                ],
                'label_attr' => [
                    'class' => "form-label",
                ],
            ])
            ->add('other_field_of_study', TextType::class, [
                'label' => 'Autre domaine d\'étude',
                'required' => false,
                'attr' => [
                    'class' => "form-control",
                    'placeholder' => 'Entrez un autre domaine d\'étude'
                ],
                'label_attr' => [
                    'class' => "form-label",
                ],
            ])
            ->add('specialty', TextType::class, [
                'label' => 'Spécialité',
                'required' => false,
                'attr' => [
                    'class' => "form-control",
                    'placeholder' => 'Entrez votre spécialité'
                ],
                'label_attr' => [
                    'class' => "form-label",
                ],
            ])
            ->add('institution', TextType::class, [
                'label' => 'Établissement',
                'constraints' => [
                    new Assert\NotBlank(['message' => 'L\'établissement ne doit pas être vide.'])
                ],
                'attr' => [
                    'class' => "form-control",
                    'placeholder' => 'Entrez le nom de l\'établissement'
                ],
                'label_attr' => [
                    'class' => "form-label",
                ],
            ])
            // ->add('graduation_year', TextType::class, [
            //     'label' => 'Année de d\'obtention',
            //     'constraints' => [
            //         new Assert\NotBlank(['message' => 'L\'année de graduation ne doit pas être vide.']),
            //     ],
            //     'attr' => [
            //         'class' => "form-control",
            //         'placeholder' => 'Entrez l\'année d\'obtention'
            //     ],
            //     'label_attr' => [
            //         'class' => "form-label",
            //     ],
            // ])
            // ->add('degreeFile', FileType::class, [
            //     'label' => 'Joindre un diplôme (.jpg .png .pdf)(Taille maximum: 1 MB)',
            //     'mapped' => false,
            //     'constraints' => [
            //         new Assert\NotBlank(['message' => 'Veuillez enregistrez une copie du diplôme.']),
            //         new Assert\File([
            //             'maxSize' => '5M',
            //             'mimeTypes' => [
            //                 'image/jpeg',
            //                 'image/png',
            //                 'application/pdf',
            //             ],
            //             'mimeTypesMessage' => 'Veuillez télécharger un fichier au format .jpg, .png ou .pdf.',
            //         ]),
            //     ],
            //     'attr' => [
            //         'class' => "form-control",
            //     ],
            //     'label_attr' => [
            //         'class' => "form-label",
            //     ],
            // ])
            ->add('coverLetterFile', FileType::class, [
                'label' => 'Joindre une lettre d\'introduction (.jpg .png .pdf)(Taille maximum: 1 MB)',
                'mapped' => false,
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Veuillez enregistrez une copie de votre lettre d\'introduction.']),
                    new Assert\File([
                        'maxSize' => '5M',
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
            ->add('schoolCertificateFile', FileType::class, [
                'label' => 'Joindre un certificat  de scolarité (.jpg .png .pdf)(Taille maximum: 1 MB)',
                'mapped' => false,
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Veuillez enregistrez un certificat de scolarité.']),
                    new Assert\File([
                        'maxSize' => '5M',
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
            'data_class' => Education::class,
        ]);
    }
}
