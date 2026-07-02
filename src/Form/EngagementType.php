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

    public function __construct(PositionRepository $positionRepository)
    {
        $this->positionRepository = $positionRepository;
    }

    private function getPositionChoices(?string $ref): array
    {
        if (!$ref) {
            return [];
        }

        // Récupérer la position de référence via la ref
        $referencePosition = $this->positionRepository->findOneBy(['reference' => $ref]);

        if (!$referencePosition) {
            return [];
        }

        // Récupérer tous les postes de la même campagne sauf celui de référence
        $positions = $this->positionRepository->createQueryBuilder('p')
            ->where('p.campaign = :campaign')
            ->andWhere('p != :referencePosition')
            ->andWhere('p.is_deleted = false OR p.is_deleted IS NULL')
            ->setParameter('campaign', $referencePosition->getCampaign())
            ->setParameter('referencePosition', $referencePosition)
            ->getQuery()
            ->getResult();
             
        // Créer un tableau de choix pour le formulaire    
        $choices = [];
        foreach ($positions as $position) {
            $choices[$position->getName()] = $position->getName();
        }

        // dump($choices);
        return $choices;
    }

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $positionChoices = $this->getPositionChoices($options['ref']);

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
            'ref' => null,
        ]);

        $resolver->setAllowedTypes('ref', ['null', 'string']);
    }
}
