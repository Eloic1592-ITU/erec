<?php

namespace App\Form;

use App\Entity\Engagement;
use App\Repository\PositionRepository;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;

class EngagementType extends AbstractType
{
    private $positionRepository;
    private $security;

    public function __construct(PositionRepository $positionRepository, Security $security)
    {
        $this->positionRepository = $positionRepository;
        $this->security = $security;
    }

    private function getPositionChoices(): array
    {
        // Obtenir l'utilisateur connecté
        $user = $this->security->getUser();

        if (!$user instanceof \App\Entity\User) {
            throw new \Exception('User object is not an instance of App\Entity\User');
        }

        $referencePosition = $user ? $user->getReferencePosition() : null;

        // Récupérer tous les postes sauf celle de l'utilisateur connecté
        $positions = $this->positionRepository->createQueryBuilder('p')
            ->where('p != :referencePosition')
            ->andWhere('p.is_deleted = false OR p.is_deleted IS NULL')
            ->setParameter('referencePosition', $referencePosition)
            ->getQuery()
            ->getResult();

        // Créer un tableau de choix pour le formulaire
        $choices = [];
        foreach ($positions as $position) {
            $choices[$position->getName()] = $position->getName();
        }

        return $choices;
    }

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $positionChoices = $this->getPositionChoices();

        $builder
            ->add('city', TextType::class, [
                'required' => true,
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Veuillez entrer une ville.'])
                ],
                'attr' => [
                    'class' => 'border-top-0 border-end-0 border-start-0 text-center',
                    'placeholder' => 'Ville'
                ],
            ])
            ->add('second_position', ChoiceType::class, [
                'choices' => $positionChoices,
                'label' => '2ème poste souhaité',
                'placeholder' => 'Choisissez un 2ème poste',
                'required' => false,
                'attr' => [
                    'class' => "form-control form-select",
                ],
                'label_attr' => [
                    'class' => "form-label",
                ],
            ])
            ->add('third_position', ChoiceType::class, [
                'choices' => $positionChoices,
                'label' => '3ème poste souhaité',
                'placeholder' => 'Choisissez un 3ème poste',
                'required' => false,
                'attr' => [
                    'class' => "form-control form-select",
                ],
                'label_attr' => [
                    'class' => "form-label",
                ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Engagement::class,
        ]);
    }
}
