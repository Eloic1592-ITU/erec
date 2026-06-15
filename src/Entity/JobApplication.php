<?php

namespace App\Entity;

use App\Repository\JobApplicationRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: JobApplicationRepository::class)]
#[ORM\Table(name: '`EREC_JOB_APPLICATION`')]
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

    #[ORM\OneToOne(inversedBy: 'jobApplication', cascade: ['persist', 'remove'])]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $user = null;

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
}
