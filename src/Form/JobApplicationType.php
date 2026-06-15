<?php

namespace App\Form;

use App\Entity\JobApplication;
use App\Repository\LocationRepository;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;

class JobApplicationType extends AbstractType
{
    private $locationRepository;
    public function __construct(LocationRepository $locationRepository)
    {
        $this->locationRepository = $locationRepository;
    }
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $locations = $this->locationRepository->findAll();
        $locationOptions = [];
        foreach ($locations as $location) {
            $locationOptions[$location->getName()] = $location->getName();
        }

        $builder
            ->add('primary_location', ChoiceType::class, [
                'choices' => $locationOptions,
                'label' => "Lieu d'affectation",
                'placeholder' => "Choisissez un lieu d'affectation",
                'attr' => [
                    'class' => "form-control form-select",
                ],
                'label_attr' => [
                    'class' => "form-label",
                ],
                'required' => true,
                'constraints' => [
                    new Assert\NotBlank(['message' => "Veuillez entrer un lieu d'affectation."]),
                ]
            ])
            ->add('secondary_location', ChoiceType::class, [
                'choices' => $locationOptions,
                'label' => "2ème lieu d'affectation souhaité",
                'placeholder' => "2ème lieu d'affectation souhaité",
                'attr' => [
                    'class' => "form-control form-select",
                ],
                'label_attr' => [
                    'class' => "form-label",
                ],
                'required' => true,
                'constraints' => [
                    new Assert\NotBlank(['message' => "Veuillez entrer un lieu d'affectation."]),
                ]
            ])
            ->add('tertiary_location', ChoiceType::class, [
                'choices' => $locationOptions,
                'label' => "3ème lieu d'affectation souhaité",
                'placeholder' => "3ème lieu d'affectation souhaité",
                'attr' => [
                    'class' => "form-control form-select",
                ],
                'label_attr' => [
                    'class' => "form-label",
                ],
                'required' => true,
                'constraints' => [
                    new Assert\NotBlank(['message' => "Veuillez entrer un lieu d'affectation."]),
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => JobApplication::class,
        ]);
    }
}
