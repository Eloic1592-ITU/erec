<?php

namespace App\Form;

use App\Entity\Certification;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;

class CertificationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('certification', TextType::class, [
                'label' => 'Certification / Attestation',
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Veuillez saisir votre certification.'])
                ],
                'attr' => [
                    'class' => "form-control",
                    'placeholder' => 'Entrez le nom de la certification'
                ],
                'label_attr' => [
                    'class' => "form-label",
                ],
            ])
            ->add('specialty', TextType::class, [
                'label' => 'Spécialité',
                'attr' => [
                    'class' => "form-control",
                    'placeholder' => 'Entrez la spécialité'
                ],
                'label_attr' => [
                    'class' => "form-label",
                ],
            ])
            ->add('institution', TextType::class, [
                'label' => 'Etablissement / Institution',
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Veuillez saisir votre institution.'])
                ],
                'attr' => [
                    'class' => "form-control",
                    'placeholder' => 'Entrez le nom de l\'institution'
                ],
                'label_attr' => [
                    'class' => "form-label",
                ],
            ])
            ->add('certification_year', TextType::class, [
                'label' => "Année d'obtention",
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Veuillez saisir l\'année de certification.']),
                ],
                'attr' => [
                    'class' => "form-control",
                    'placeholder' => 'Entrez l\'année de certification'
                ],
                'label_attr' => [
                    'class' => "form-label",
                ],
            ])
            ->add('certificationFile', FileType::class, [
                'label' => "Joindre une copie du certificat / de l'attestation (.jpg .png .pdf)(Taille maximum: 1 MB)",
                'mapped' => false,
                'constraints' => [
                    new Assert\NotBlank(['message' => "Veuillez enregistrez une copie du certificat / de l'attestation."]),
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
            'data_class' => Certification::class,
        ]);
    }
}
