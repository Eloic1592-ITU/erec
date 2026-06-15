<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Event\PreSubmitEvent;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormError;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Context\ExecutionContextInterface;
use Symfony\Component\Validator\Constraints as Assert;

class RegistrationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('first_name', TextType::class, [
                'label' => 'Prénom(s)',
                'required' => true,
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Veuillez entrer votre prénom.']),
                    new Assert\Length([
                        'min' => 2,
                        'max' => 254,
                        'minMessage' => 'Votre prénom doit contenir au moins {{ limit }} caractères',
                        'maxMessage' => 'Votre prénom ne peut pas dépasser {{ limit }} caractères',
                    ]),
                    new Assert\Callback([$this, 'validateUserName']),
                ],
                'attr' => [
                    'class' => "form-control",
                    'placeholder' => 'Prénom(s)',
                ],
                'label_attr' => [
                    'class' => "form-label",
                ],
            ])
            ->add('last_name', TextType::class, [
                'label' => 'Nom',
                'required' => true,
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Veuillez entrer votre nom.']),
                    new Assert\Length([
                        'min' => 2,
                        'max' => 254,
                        'minMessage' => 'Votre prénom doit contenir au moins {{ limit }} caractères',
                        'maxMessage' => 'Votre prénom ne peut pas dépasser {{ limit }} caractères',
                    ]),
                    new Assert\Callback([$this, 'validateUserName']),
                ],
                'attr' => [
                    'class' => "form-control",
                    'placeholder' => 'Nom',
                ],
                'label_attr' => [
                    'class' => "form-label",
                ],
            ])
            ->add('birth_date', DateType::class, [
                'widget' => 'single_text',
                'label' => 'Date de Naissance',
                'required' => true,
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Veuillez entrer votre date de naissance.']),
                    new Assert\Callback([$this, 'validateAge'])
                ],
                'attr' => [
                    'class' => "form-control",
                ],
                'label_attr' => [
                    'class' => "form-label",
                ],
            ])
            ->add('cin', TextType::class, [
                'label' => 'CIN',
                'required' => true,
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Veuillez entrer votre CIN.']),
                ],
                'attr' => [
                    'class' => "form-control",
                    'placeholder' => 'xxx xxx xxx xxx',
                ],
                'label_attr' => [
                    'class' => "form-label",
                ],
            ])
            ->add('email', EmailType::class, [
                'label' => 'Email',
                'required' => true,
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Veuillez entrer votre adresse email.']),
                    new Assert\Email(['message' => 'L\'adresse email "{{ value }}" n\'est pas une adresse valide.']),
                ],
                'attr' => [
                    'class' => "form-control",
                    'placeholder' => 'xxx@xxx.xxx',
                ],
                'label_attr' => [
                    'class' => "form-label",
                ],
            ])
        ;

        // Force error to the field
        $builder->get('birth_date')->addEventListener(FormEvents::PRE_SUBMIT, function (FormEvent $event) {
            $form = $event->getForm();
            $birth = $event->getData();
            $specialChars = '!@#$%^&*()_=+[{]};:",<.>?\\|';
            if (!empty($birth) && strlen($birth) != 10 && strpbrk($birth, $specialChars) !== false) {
                $form->addError(new FormError('Veuillez entrer une date valide'));
            }
        });
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }

    /**
     * @param $birthDate
     * @param ExecutionContextInterface $context
     * @return void
     */
    public function validateAge($birthDate, ExecutionContextInterface $context) {
        if ($birthDate instanceof \DateTime) {
            $today = new \DateTime();
            $age = $today->diff($birthDate)->y;

            if ($age < 18) {
                $context->buildViolation('Vous devez avoir au moins 18 ans pour vous inscrire.')
                    ->addViolation();
            }
        } else {
            $context->buildViolation('Veuillez entrer une date valide')
                ->addViolation();
        }
    }

    /**
     * @param $username
     * @param ExecutionContextInterface $context
     * @return void
     */
    public function validateUserName($username, ExecutionContextInterface $context) {
        $specialChars = '!@#$%^&*()-_=+[{]};:",<.>/?\\|';
        if (strpbrk($username, $specialChars) !== false) {
            $context->buildViolation('Information invalide, veuillez ne pas utiliser des caractères spéciaux')
                ->addViolation();
        }
    }
}
