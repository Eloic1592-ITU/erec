<?php

namespace App\Form;

use App\Entity\Position;
use App\Entity\Campaign;
use App\Repository\CampaignRepository;
use Symfony\Component\Form\AbstractType;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;

class PositionType extends AbstractType
{
    private $campaignRepository;
    public function __construct(CampaignRepository $campaignRepository)
    {
        $this->campaignRepository=$campaignRepository;
    }
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class, [
                'label' => "Postes",
                'required' => true,
                'constraints' => [
                    new Assert\NotBlank(['message' => "Veuillez entrer un poste."]),
                ],
                'attr' => [
                    'class' => "form-control",
                    'placeholder' => "Le nom du poste",
                ],
                'label_attr' => [
                    'class' => "form-label m-0",
                ],
            ])
            ->add('reference', TextType::class, [
                'label' => "Référence",
                'required' => true,
                'constraints' => [
                    new Assert\NotBlank(['message' => "Veuillez entrer une référence."]),
                ],
                'attr' => [
                    'class' => "form-control",
                    'placeholder' => "Le nom de la référence",
                ],
                'label_attr' => [
                    'class' => "form-label m-0",
                ],
            ])
            // ->add('closing_date', DateType::class, [
            //     'widget' => 'single_text',
            //     'label' => 'Date de clôture',
            //     'required' => true,
            //     'constraints' => [
            //         new Assert\NotBlank(['message' => 'Veuillez entrer une date de clôture du poste']),
            //     ],
            //     'attr' => [
            //         'class' => "form-control",
            //         'placeholder' => "Date de clôture",
            //     ],
            //     'label_attr' => [
            //         'class' => "form-label m-0",
            //     ],
            // ])
            ->add('campaign', EntityType::class, [
                'class' => Campaign::class,
                'choice_label' => 'title',
                'label' => 'Choix de la campagne',
                'placeholder' => "Choix de la campagne",
                'attr' => [
                    'class' => "form-control form-select",
                ],
                'label_attr' => [
                    'class' => "form-label",
                ],
                'required' => true,
                'constraints' => [
                    new Assert\NotBlank(['message' => "Veuillez choisir une campagne."]),
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Position::class,
        ]);
    }
}
