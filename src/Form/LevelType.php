<?php

namespace App\Form;

use App\Entity\Level;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;

class LevelType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class, [
                'label' => "Niveaux",
                'required' => true,
                'constraints' => [
                    new Assert\NotBlank(['message' => "Veuillez entrer un niveaux."]),
                ],
                'attr' => [
                    'class' => "form-control",
                    'placeholder' => "Le nom du niveaux",
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
            'data_class' => Level::class,
        ]);
    }
}
