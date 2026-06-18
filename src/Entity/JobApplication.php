<?php

namespace App\Entity;

use App\Repository\JobApplicationRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

#[ORM\Entity(repositoryClass: JobApplicationRepository::class)]
#[ORM\Table(name: '`EREC_JOB_APPLICATION`')]
#[ORM\UniqueConstraint(name: 'uniq_user_campaign', columns: ['user_id', 'campaign_id'])]
#[UniqueEntity(fields: ['user', 'campaign'], message: 'Vous avez déjà postulé à une position pour cette campagne.')]
class JobApplication
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $primary_location = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $secondary_location = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $tertiary_location = null;

    // Un utilisateur ne peut postuler qu'un poste (n'importe quel poste) par campagne

    // Un utilisateur est relié a une candidature
    #[ORM\ManyToOne(inversedBy: 'jobApplications')]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $user = null;

    // Une candidature est relié a une campagne
    #[ORM\ManyToOne(targetEntity: Campaign::class, inversedBy: 'jobApplications')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Campaign $campaign = null;

    // Un candidature est relié a un poste
    #[ORM\ManyToOne(targetEntity: Position::class, inversedBy: 'jobApplications')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Position $position = null;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPrimaryLocation(): ?string
    {
        return $this->primary_location;
    }

    public function setPrimaryLocation(string $primary_location): static
    {
        $this->primary_location = $primary_location;

        return $this;
    }

    public function getSecondaryLocation(): ?string
    {
        return $this->secondary_location;
    }

    public function setSecondaryLocation(?string $secondary_location): static
    {
        $this->secondary_location = $secondary_location;

        return $this;
    }

    public function getTertiaryLocation(): ?string
    {
        return $this->tertiary_location;
    }

    public function setTertiaryLocation(?string $tertiary_location): static
    {
        $this->tertiary_location = $tertiary_location;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(User $user): static
    {
        $this->user = $user;

        return $this;
    }

    public function getCampaign(): ?Campaign
    {
        return $this->campaign;
    }

    public function setCampaign(?Campaign $campaign): static
    {
        $this->campaign = $campaign;

        return $this;
    }

    public function getPosition(): ?Position
    {
        return $this->position;
    }

    public function setPosition(?Position $position): static
    {
        $this->position = $position;

        return $this;
    }


    
}
