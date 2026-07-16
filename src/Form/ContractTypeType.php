<?php

namespace App\Form;

use App\Entity\ContractType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Validator\Constraints as Assert;

class ContractTypeType extends AbstractType
{
  public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('code', TextType::class, [
                'label' => '*Code',
                'constraints' => [
                    new Assert\NotBlank([
                        'message' => 'Veuillez saisir le code du contrat.',
                    ]),
                ],
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Ex: CDI, CDD, ALTERNANCE',
                ],
                'label_attr' => [
                    'class' => 'form-label',
                ],
            ])

            ->add('label', TextType::class, [
                'label' => '*Libellé',
                'constraints' => [
                    new Assert\NotBlank([
                        'message' => 'Veuillez saisir le libellé du contrat.',
                    ]),
                ],
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Ex: Contrat à Durée Indéterminée',
                ],
                'label_attr' => [
                    'class' => 'form-label',
                ],
            ])

            ->add('description', TextareaType::class, [
                'label' => 'Description (optionnel)',
                'required' => false,
                'attr' => [
                    'class' => 'form-control',
                    'rows' => 4,
                    'placeholder' => 'Décrivez le type de contrat...',
                ],
                'label_attr' => [
                    'class' => 'form-label',
                ],
            ])

            ->add('certificationRequired', CheckboxType::class, [
                'label' => 'Certification obligatoire',
                'required' => false,
                'attr' => [
                    'class' => 'form-check-input',
                ],
                'label_attr' => [
                    'class' => 'form-check-label',
                ],
            ])

            ->add('internshipRequired', CheckboxType::class, [
                'label' => 'Stage obligatoire',
                'required' => false,
                'attr' => [
                    'class' => 'form-check-input',
                ],
                'label_attr' => [
                    'class' => 'form-check-label',
                ],
            ]);

            // ->add('is_deleted', CheckboxType::class, [
            //     'label' => 'Désactivé',
            //     'required' => false,
            //     'attr' => [
            //         'class' => 'form-check-input',
            //     ],
            //     'label_attr' => [
            //         'class' => 'form-check-label',
            //     ],
            // ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => ContractType::class,
        ]);
    }
}
