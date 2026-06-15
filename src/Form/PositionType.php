<?php

namespace App\Form;

use App\Entity\Position;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;

class PositionType extends AbstractType
{
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
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Position::class,
        ]);
    }
}
