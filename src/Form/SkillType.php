<?php

namespace App\Form;

use App\Entity\Skill;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;

class SkillType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class, [
                'label' => "Compétences",
                'required' => true,
                'constraints' => [
                    new Assert\NotBlank(['message' => "Veuillez entrer une compétences."]),
                ],
                'attr' => [
                    'class' => "form-control",
                    'placeholder' => "Le nom de la compétences",
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
            'data_class' => Skill::class,
        ]);
    }
}
