<?php

namespace App\Form;

use App\Entity\Document;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;

class DocumentType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('cv', FileType::class, [
                'label' => 'Enregistrez votre CV',
                'mapped' => false,
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Veuillez enregistrez votre CV.']),
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
            ->add('lm', FileType::class, [
                'label' => 'Enregistrez votre lettre de motivation',
                'mapped' => false,
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Veuillez enregistrez votre lettre de motivation.']),
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
            'data_class' => Document::class,
        ]);
    }
}
