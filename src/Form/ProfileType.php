<?php

namespace App\Form;

use App\Entity\Profile;
use App\Repository\CivilityRepository;
use App\Repository\MaritalStatusRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use App\Entity\Civility;
use App\Entity\MaritalStatus;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Form\Extension\Core\Type\CountryType;


class ProfileType extends AbstractType
{
    private $civilityRepository;
    private $maritalStatusRepository;

    public function __construct(CivilityRepository $civilityRepository, MaritalStatusRepository $maritalStatusRepository)
    {
        $this->civilityRepository = $civilityRepository;
        $this->maritalStatusRepository = $maritalStatusRepository;
    }

    private function getCivilityChoices(): array
    {
        $civilityChoices = [];
        foreach ($this->civilityRepository->findAll() as $civility) {
            $civilityChoices[$civility->getName()] = $civility->getName();
        }
        return $civilityChoices;
    }

    private function getMaritalStatusChoices(): array
    {
        $maritalStatusChoices = [];
        foreach ($this->maritalStatusRepository->findAll() as $status) {
            $maritalStatusChoices[$status->getName()] = $status->getName();
        }
        return $maritalStatusChoices;
    }

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $civilityChoices = $this->getCivilityChoices();
        $maritalStatusChoices = $this->getMaritalStatusChoices();

        $builder
            ->add('civility', EntityType::class, [
                'class' => Civility::class,
                'choice_label' => 'name',
                'label' => 'Civilité',
                'required' => true,
                'placeholder' => 'Sélectionnez votre civilité',
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Veuillez choisir votre civilité.']),
                ],
                'attr' => [
                    'class' => 'form-control form-select',
                ],
                'label_attr' => [
                    'class' => 'form-label',
                ],
            ])
            ->add('birth_country', CountryType::class, [
                'label' => 'Pays de naissance',
                'required' => true,
                'placeholder' => 'Pays de naissance',
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Veuillez entrer votre pays de naissance.']),
                ],
                'attr' => [
                    'class' => 'form-select',
                ],
                'label_attr' => [
                    'class' => 'form-label',
                ]
            ])
            ->add('birth_city', TextType::class, [
                'label' => 'Ville de naissance',
                'required' => true,
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Veuillez entrer votre ville de naissance.']),
                ],
                'attr' => [
                    'class' => "form-control",
                    'placeholder' => 'Ville de naissance',
                ],
                'label_attr' => [
                    'class' => "form-label",
                ],
            ])
            ->add('cin_issue_date', DateType::class, [
                'label' => 'Date d\'émission de la CIN',
                'widget' => 'single_text',
                'required' => true,
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Veuillez entrer la date d\'émission de votre CIN.']),
                ],
                'attr' => [
                    'class' => "form-control",
                    'placeholder' => 'Date d\'émission de la CIN',
                ],
                'label_attr' => [
                    'class' => "form-label",
                ],
            ])
            ->add('cin_issue_place', TextType::class, [
                'label' => 'Lieu d\'émission de la CIN',
                'required' => true,
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Veuillez entrer le lieu d\'émission de votre CIN.']),
                ],
                'attr' => [
                    'class' => "form-control",
                    'placeholder' => 'Lieu d\'émission de la CIN',
                ],
                'label_attr' => [
                    'class' => "form-label",
                ],
            ])
            ->add('address', TextType::class, [
                'label' => 'Adresse',
                'required' => true,
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Veuillez entrer votre adresse.']),
                ],
                'attr' => [
                    'class' => "form-control",
                    'placeholder' => 'Adresse',
                ],
                'label_attr' => [
                    'class' => "form-label",
                ],
            ])
            ->add('postal_code', TextType::class, [
                'label' => 'Code postal',
                'required' => true,
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Veuillez entrer votre code postal.']),
                ],
                'attr' => [
                    'class' => "form-control",
                    'placeholder' => 'Code postal',
                ],
                'label_attr' => [
                    'class' => "form-label",
                ],
            ])
            ->add('city', TextType::class, [
                'label' => 'Ville',
                'required' => true,
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Veuillez entrer votre ville.']),
                ],
                'attr' => [
                    'class' => "form-control",
                    'placeholder' => 'Ville',
                ],
                'label_attr' => [
                    'class' => "form-label",
                ],
            ])
            ->add('country', CountryType::class, [
                'label' => 'Pays',
                'required' => true,
                'placeholder' => 'Sélectionnez votre pays',
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Veuillez sélectionner votre pays.']),
                ],
                'attr' => [
                    'class' => 'form-select',
                ],
                'label_attr' => [
                    'class' => 'form-label',
                ]
            ])
            
            ->add('nationality', TextType::class, [
                'label' => 'Nationalité',
                'required' => true,
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Veuillez entrer votre nationalité.']),
                ],
                'attr' => [
                    'class' => "form-control",
                    'placeholder' => 'Nationalité',
                ],
                'label_attr' => [
                    'class' => "form-label",
                ],
            ])
            ->add('marital_status', EntityType::class, [
                'class' => MaritalStatus::class,
                'choice_label' => 'name', // ou autre colonne qui contient "Célibataire", etc.
                'label' => 'Situation matrimoniale',
                'required' => true,
                'placeholder' => 'Sélectionnez votre statut marital',
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Veuillez choisir votre statut marital.']),
                ],
                'attr' => [
                    'class' => 'form-control form-select',
                ],
                'label_attr' => [
                    'class' => 'form-label',
                ],
            ])
            // ->add('number_of_children', IntegerType::class, [
            //     'label' => 'Nombre d\'enfants',
            //     'required' => false,
            //     'attr' => [
            //         'class' => "form-control",
            //     ],
            //     'label_attr' => [
            //         'class' => "form-label",
            //     ],
            // ])
            ->add('phone1', TelType::class, [
                'label' => 'Téléphone 1',
                'required' => true,
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Veuillez entrer votre numéro de téléphone.']),
                ],
                'attr' => [
                    'class' => "form-control tel",
                    'placeholder' => 'Exemple : 032 XX XXX XX'
                ],
                'label_attr' => [
                    'class' => "form-label"
                ]
            ])
            ->add('phone2', TelType::class, [
                'label' => 'Téléphone 2',
                'required' => false,
                'empty_data' => '',
                'attr' => [
                    'class' => "form-control tel",
                    'placeholder' => 'Exemple : 032 XX XXX XX'
                ],
                'label_attr' => [
                    'class' => "form-label",
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Profile::class,
        ]);
    }
}
