<?php

namespace App\Entity;

use App\Repository\WorkExperienceRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: WorkExperienceRepository::class)]
#[ORM\Table(name: '`EREC_WORK_EXPERIENCE`')]
class WorkExperience
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $position = null;

    #[ORM\Column(length: 255)]
    private ?string $organization = null;

    #[ORM\Column(length: 255)]
    private ?string $location = null;

    #[ORM\Column(type: 'oracle_date')]
    private ?\DateTimeInterface $start_date = null;

    #[ORM\Column(type: 'oracle_date')]
    private ?\DateTimeInterface $end_date = null;

    #[ORM\Column(length: 255)]
    private ?string $reference_name = null;

    #[ORM\Column(length: 255)]
    private ?string $reference_position = null;

    #[ORM\Column(length: 180)]
    private ?string $reference_email = null;

    #[ORM\Column(length: 255)]
    private ?string $reference_phone = null;

    #[ORM\ManyToOne(inversedBy: 'workExperiences')]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $user = null;

    #[ORM\Column(length: 255)]
    private ?string $workFilename = null;

    public function __construct()
    {
        $this->reference_name = "Aucune personne";
        $this->reference_email = "Aucun email";
        $this->reference_position = "Aucun poste";
        $this->reference_phone = "Aucun numero";
    }


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPosition(): ?string
    {
        return $this->position;
    }

    public function setPosition(string $position): static
    {
        $this->position = $position;

        return $this;
    }

    public function getOrganization(): ?string
    {
        return $this->organization;
    }

    public function setOrganization(string $organization): static
    {
        $this->organization = $organization;

        return $this;
    }

    public function getLocation(): ?string
    {
        return $this->location;
    }

    public function setLocation(string $location): static
    {
        $this->location = $location;

        return $this;
    }

    public function getStartDate(): ?\DateTimeInterface
    {
        return $this->start_date;
    }

    public function setStartDate(\DateTimeInterface $start_date): static
    {
        $this->start_date = $start_date;

        return $this;
    }

    public function getEndDate(): ?\DateTimeInterface
    {
        return $this->end_date;
    }

    public function setEndDate(\DateTimeInterface $end_date): static
    {
        $this->end_date = $end_date;

        return $this;
    }

    public function getReferenceName(): ?string
    {
        return $this->reference_name;
    }

    public function setReferenceName(string $reference_name): static
    {
        $this->reference_name = $reference_name;

        return $this;
    }

    public function getReferencePosition(): ?string
    {
        return $this->reference_position;
    }

    public function setReferencePosition(string $reference_position): static
    {
        $this->reference_position = $reference_position;

        return $this;
    }

    public function getReferenceEmail(): ?string
    {
        return $this->reference_email;
    }

    public function setReferenceEmail(string $reference_email): static
    {
        $this->reference_email = $reference_email;

        return $this;
    }

    public function getReferencePhone(): ?string
    {
        return $this->reference_phone;
    }

    public function setReferencePhone(string $reference_phone): static
    {
        $this->reference_phone = $reference_phone;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): static
    {
        $this->user = $user;

        return $this;
    }

    public function getWorkFilename(): ?string
    {
        return $this->workFilename;
    }

    public function setWorkFilename(string $workFilename): static
    {
        $this->workFilename = $workFilename;

        return $this;
    }
}
