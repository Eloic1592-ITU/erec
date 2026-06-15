<?php

namespace App\Form;

use App\Entity\Civility;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;

class CivilityType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class, [
                'label' => "Civilité",
                'required' => true,
                'constraints' => [
                    new Assert\NotBlank(['message' => "Veuillez entrer une civilité."]),
                ],
                'attr' => [
                    'class' => "form-control",
                    'placeholder' => "Le nom de la civilité",
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
            'data_class' => Civility::class,
        ]);
    }
}
