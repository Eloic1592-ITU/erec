<?php

namespace App\Form;

use App\Entity\FieldOfStudy;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;

class FieldOfStudyType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class, [
                'label' => "Domaine d'études",
                'required' => true,
                'constraints' => [
                    new Assert\NotBlank(['message' => "Veuillez entrer un domaine d'études."]),
                ],
                'attr' => [
                    'class' => "form-control",
                    'placeholder' => "Le nom du domaine d'études",
                ],
                'label_attr' => [
                    'class' => "form-label m-0",
                ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => FieldOfStudy::class,
        ]);
    }
}
