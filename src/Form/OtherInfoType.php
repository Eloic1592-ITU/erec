<?php

namespace App\Form;

use App\Entity\OtherInfo;
use App\Entity\User;
use App\Repository\LevelRepository;
use App\Repository\SkillRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;

class OtherInfoType extends AbstractType
{
    private $levelRepository;
    private $skillRepository;

    public function __construct(LevelRepository $levelRepository, SkillRepository $skillRepository)
    {
        $this->levelRepository = $levelRepository;
        $this->skillRepository = $skillRepository;
    }

    private function getLevelChoices(): array
    {
        $levels = $this->levelRepository->createQueryBuilder('l')
            ->where('l.is_deleted = false OR l.is_deleted IS NULL')
            ->getQuery()
            ->getResult();

        $choices = [];
        foreach ($levels as $level) {
            $choices[$level->getName()] = $level->getName();
        }
        return $choices;
    }

    private function getSkillChoices(): array
    {
        $skills = $this->skillRepository->createQueryBuilder('s')
            ->where('s.is_deleted = false OR s.is_deleted IS NULL')
            ->getQuery()
            ->getResult();

        $choices = [];
        foreach ($skills as $skill) {
            $choices[$skill->getName()] = $skill->getName();
        }
        return $choices;
    }

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $levelChoices = $this->getLevelChoices();
        $skillChoices = $this->getSkillChoices();

        $builder
            ->add('malagasy_reading_level', ChoiceType::class, [
                'choices' => $levelChoices,
                'placeholder' => 'Niveau de lecture',
                'required' => true,
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Veuillez choisir votre niveau de lecture.']),
                ],
                'attr' => [
                    'class' => "form-control form-select",
                ],
            ])
            ->add('malagasy_writing_level', ChoiceType::class, [
                'choices' => $levelChoices,
                'placeholder' => "Communication écrite",
                'required' => true,
                'constraints' => [
                    new Assert\NotBlank(['message' => "Veuillez choisir votre niveau."]),
                ],
                'attr' => [
                    'class' => "form-control form-select",
                ],
            ])
            ->add('malagasy_speaking_level', ChoiceType::class, [
                'choices' => $levelChoices,
                'placeholder' => 'Communication orale',
                'required' => true,
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Veuillez choisir votre niveau.']),
                ],
                'attr' => [
                    'class' => "form-control form-select",
                ],
            ])
            ->add('french_reading_level', ChoiceType::class, [
                'choices' => $levelChoices,
                'placeholder' => 'Niveau de lecture',
                'required' => true,
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Veuillez choisir votre niveau de lecture.']),
                ],
                'attr' => [
                    'class' => "form-control form-select",
                ],
            ])
            ->add('french_writing_level', ChoiceType::class, [
                'choices' => $levelChoices,
                'placeholder' => "Communication écrite",
                'required' => true,
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Veuillez choisir votre niveau d\'écriture.']),
                ],
                'attr' => [
                    'class' => "form-control form-select",
                ],
            ])
            ->add('french_speaking_level', ChoiceType::class, [
                'choices' => $levelChoices,
                'placeholder' => 'Communication orale',
                'required' => true,
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Veuillez choisir votre niveau.']),
                ],
                'attr' => [
                    'class' => "form-control form-select",
                ],
            ])
            ->add('english_reading_level', ChoiceType::class, [
                'choices' => $levelChoices,
                'placeholder' => 'Niveau de lecture',
                'required' => true,
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Veuillez choisir votre niveau de lecture.']),
                ],
                'attr' => [
                    'class' => "form-control form-select",
                ],
            ])
            ->add('english_writing_level', ChoiceType::class, [
                'choices' => $levelChoices,
                'placeholder' => "Communication écrite",
                'required' => true,
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Veuillez choisir votre niveau d\'écriture.']),
                ],
                'attr' => [
                    'class' => "form-control form-select",
                ],
            ])
            ->add('english_speaking_level', ChoiceType::class, [
                'choices' => $levelChoices,
                'placeholder' => 'Communication orale',
                'required' => true,
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Veuillez choisir votre niveau.']),
                ],
                'attr' => [
                    'class' => "form-control form-select",
                ],
            ])
            ->add('other_language_name', TextType::class, [
                'required' => false,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Langue',
                ],
            ])
            ->add('other_language_reading_level', ChoiceType::class, [
                'choices' => $levelChoices,
                'placeholder' => 'Niveau de lecture',
                'required' => false,
                'attr' => [
                    'class' => "form-control form-select",
                ],
            ])
            ->add('other_language_writing_level', ChoiceType::class, [
                'choices' => $levelChoices,
                'placeholder' => "Communication écrite",
                'required' => false,
                'attr' => [
                    'class' => "form-control form-select",
                ],
            ])
            ->add('other_language_speaking_level', ChoiceType::class, [
                'choices' => $levelChoices,
                'placeholder' => 'Communication orale',
                'required' => false,
                'attr' => [
                    'class' => "form-control form-select",
                ],
            ])
            ->add('microsoft_word_level', ChoiceType::class, [
                'label' => 'Niveau Microsoft Word',
                'choices' => $levelChoices,
                'placeholder' => 'Choisissez un niveau',
                'required' => true,
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Veuillez choisir votre niveau Microsoft Word.']),
                ],
                'attr' => [
                    'class' => "form-control form-select",
                ],
                'label_attr' => [
                    'class' => "form-label",
                ],
            ])
            ->add('microsoft_excel_level', ChoiceType::class, [
                'label' => 'Niveau Microsoft Excel',
                'choices' => $levelChoices,
                'placeholder' => 'Choisissez un niveau',
                'required' => true,
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Veuillez choisir votre niveau Microsoft Excel.']),
                ],
                'attr' => [
                    'class' => "form-control form-select",
                ],
                'label_attr' => [
                    'class' => "form-label",
                ],
            ])
            ->add('microsoft_powerPoint_level', ChoiceType::class, [
                'label' => 'Niveau Microsoft PowerPoint',
                'choices' => $levelChoices,
                'placeholder' => 'Choisissez un niveau',
                'required' => true,
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Veuillez choisir votre niveau Microsoft PowerPoint.']),
                ],
                'attr' => [
                    'class' => "form-control form-select",
                ],
                'label_attr' => [
                    'class' => "form-label",
                ],
            ])
            ->add('microsoft_oneNote_level', ChoiceType::class, [
                'label' => 'Niveau Microsoft OneNote',
                'choices' => $levelChoices,
                'placeholder' => 'Choisissez un niveau',
                'required' => true,
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Veuillez choisir votre niveau Microsoft OneNote.']),
                ],
                'attr' => [
                    'class' => "form-control form-select",
                ],
                'label_attr' => [
                    'class' => "form-label",
                ],
            ])
            ->add('microsoft_outlook_level', ChoiceType::class, [
                'label' => 'Niveau Microsoft Outlook',
                'choices' => $levelChoices,
                'placeholder' => 'Choisissez un niveau',
                'required' => true,
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Veuillez choisir votre niveau Microsoft Outlook.']),
                ],
                'attr' => [
                    'class' => "form-control form-select",
                ],
                'label_attr' => [
                    'class' => "form-label",
                ],
            ])
            ->add('microsoft_publisher_level', ChoiceType::class, [
                'label' => 'Niveau Microsoft Publisher',
                'choices' => $levelChoices,
                'placeholder' => 'Choisissez un niveau',
                'required' => true,
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Veuillez choisir votre niveau Microsoft Publisher.']),
                ],
                'attr' => [
                    'class' => "form-control form-select",
                ],
                'label_attr' => [
                    'class' => "form-label",
                ],
            ])
            ->add('microsoft_access_level', ChoiceType::class, [
                'label' => 'Niveau Microsoft Access',
                'choices' => $levelChoices,
                'placeholder' => 'Choisissez un niveau',
                'required' => true,
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Veuillez choisir votre niveau Microsoft Access.']),
                ],
                'attr' => [
                    'class' => "form-control form-select",
                ],
                'label_attr' => [
                    'class' => "form-label",
                ],
            ])
            ->add('microsoft_visio_level', ChoiceType::class, [
                'label' => 'Niveau Microsoft Visio',
                'choices' => $levelChoices,
                'placeholder' => 'Choisissez un niveau',
                'required' => true,
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Veuillez choisir votre niveau Microsoft Visio.']),
                ],
                'attr' => [
                    'class' => "form-control form-select",
                ],
                'label_attr' => [
                    'class' => "form-label",
                ],
            ])
            ->add('microsoft_project_level', ChoiceType::class, [
                'label' => 'Niveau Microsoft Project',
                'choices' => $levelChoices,
                'placeholder' => 'Choisissez un niveau',
                'required' => true,
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Veuillez choisir votre niveau Microsoft Project.']),
                ],
                'attr' => [
                    'class' => "form-control form-select",
                ],
                'label_attr' => [
                    'class' => "form-label",
                ],
            ])
            ->add('other_skills', ChoiceType::class, [
                'label' => 'Autres compétences',
                'choices' => $skillChoices,
                'multiple' => true,
                'required' => false,
                'attr' => [
                    'class' => "form-control select2bs4",
                    'style' => "width: 100%;",
                    'data-placeholder' => "Compétences"
                ],
                'label_attr' => [
                    'class' => "form-label",
                ],
                'choice_value' => function ($value) {
                    return $value;
                },
                'choice_label' => function ($value) {
                    return $value;
                }
            ])
            ->add('otherNotInfoSkills', TextType::class, [
                'label' => 'Autres compétences non informatiques',
                'required' => false,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Autres compétences non informatiques',
                ],
            ])
        ;
        
        $builder->addEventListener(FormEvents::PRE_SUBMIT, function(FormEvent $event) use ($skillChoices) {
            $form = $event->getForm();
            $data = $event->getData();
        
            if (isset($data['other_skills'])) {
                foreach ($data['other_skills'] as $skill) {
                    if (!in_array($skill, $skillChoices)) {
                        $skillChoices[$skill] = $skill;
                    }
                }
        
                $form->add('other_skills', ChoiceType::class, [
                    'label' => 'Autres compétences',
                    'choices' => $skillChoices,
                    'multiple' => true,
                    'required' => false,
                    'attr' => [
                        'class' => "form-control select2bs4",
                        'style' => "width: 100%;",
                        'data-placeholder' => "Compétences"
                    ],
                    'label_attr' => [
                        'class' => "form-label",
                    ],
                    'choice_value' => function ($value) {
                        return $value;
                    },
                    'choice_label' => function ($value) {
                        return $value;
                    }
                ]);
            }
        });

        // Écouteur d'événement pour PRE_SET_DATA
        $builder->addEventListener(FormEvents::PRE_SET_DATA, function (FormEvent $event) use ($skillChoices) {
            $form = $event->getForm();
            $data = $event->getData();

            if ($data instanceof OtherInfo) {
                $currentSkills = $data->getOtherSkills();
                if ($currentSkills) {
                    foreach ($currentSkills as $skill) {
                        if (!array_key_exists($skill, $skillChoices)) {
                            $skillChoices[$skill] = $skill;
                        }
                    }

                    $form->add('other_skills', ChoiceType::class, [
                        'label' => 'Autres compétences',
                        'choices' => $skillChoices,
                        'multiple' => true,
                        'required' => false,
                        'attr' => [
                            'class' => "form-control select2bs4",
                            'style' => "width: 100%;",
                            'data-placeholder' => "Compétences"
                        ],
                        'label_attr' => [
                            'class' => "form-label",
                        ],
                        'choice_value' => function ($value) {
                            return $value;
                        },
                        'choice_label' => function ($value) {
                            return $value;
                        },
                        'data' => $currentSkills
                    ]);
                }
            }
        });
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => OtherInfo::class,
        ]);
    }
}
