<?php

namespace App\Entity;

use App\Repository\InternshipRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: InternshipRepository::class)]
#[ORM\Table(name: '`EREC_INTERNSHIP`')]
class Internship
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $theme = null;

    #[ORM\Column(length: 255)]
    private ?string $organization = null;

    #[ORM\Column]
    private ?int $internship_year = null;

    #[ORM\Column]
    private ?int $duration = null;

    #[ORM\ManyToOne(inversedBy: 'internships')]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $user = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTheme(): ?string
    {
        return $this->theme;
    }

    public function setTheme(string $theme): static
    {
        $this->theme = $theme;

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

    public function getInternshipYear(): ?int
    {
        return $this->internship_year;
    }

    public function setInternshipYear(int $internship_year): static
    {
        $this->internship_year = $internship_year;

        return $this;
    }

    public function getDuration(): ?int
    {
        return $this->duration;
    }

    public function setDuration(int $duration): static
    {
        $this->duration = $duration;

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
}
