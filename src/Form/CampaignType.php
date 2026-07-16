<?php

namespace App\Form;

use App\Entity\Campaign;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use App\Entity\ContractType;
class CampaignType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title', TextType::class, [
                'label' => '*Titre',
                'constraints' => [
                    new Assert\NotBlank([
                        'message' => 'Veuillez saisir le titre.',
                    ]),
                ],
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Entrez le titre de la campagne',
                ],
                'label_attr' => [
                    'class' => 'form-label',
                ],
            ])

            ->add('description', TextareaType::class, [
                'label' => 'Description (optionnel)',
                'attr' => [
                    'class' => 'form-control',
                    'rows' => 5,
                    'placeholder' => 'Entrez la description de la campagne',
                ],
                'label_attr' => [
                    'class' => 'form-label',
                ],
            ])
            ->add('contractType', EntityType::class, [
                'class' => ContractType::class,
                'choice_label' => 'label',
                'label' => 'Type de contrat',
                'placeholder' => 'Choisissez un type de contrat',
                'required' => true,
                'attr' => [
                    'class' => 'form-control form-select',
                ],
                'label_attr' => [
                    'class' => 'form-label',
                ],
                'constraints' => [
                    new Assert\NotBlank([
                        'message' => 'Type de contrat obligatoire'
                    ])
                ],
            ]);
            
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Campaign::class,
        ]);
    }
}
