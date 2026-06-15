<?php

namespace App\Entity;

use App\Repository\CertificationRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CertificationRepository::class)]
#[ORM\Table(name: '`EREC_CERTIFICATION`')]
class Certification
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $certification = null;

    #[ORM\Column(length: 255)]
    private ?string $specialty = null;

    #[ORM\Column(length: 255)]
    private ?string $institution = null;

    #[ORM\Column]
    private ?int $certification_year = null;

    #[ORM\ManyToOne(inversedBy: 'certifications')]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $user = null;

    #[ORM\Column(length: 255)]
    private ?string $certificationFilename = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCertification(): ?string
    {
        return $this->certification;
    }

    public function setCertification(string $certification): static
    {
        $this->certification = $certification;

        return $this;
    }

    public function getSpecialty(): ?string
    {
        return $this->specialty;
    }

    public function setSpecialty(string $specialty): static
    {
        $this->specialty = $specialty;

        return $this;
    }

    public function getInstitution(): ?string
    {
        return $this->institution;
    }

    public function setInstitution(string $institution): static
    {
        $this->institution = $institution;

        return $this;
    }

    public function getCertificationYear(): ?int
    {
        return $this->certification_year;
    }

    public function setCertificationYear(int $certification_year): static
    {
        $this->certification_year = $certification_year;

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

    public function getCertificationFilename(): ?string
    {
        return $this->certificationFilename;
    }

    public function setCertificationFilename(string $certificationFilename): static
    {
        $this->certificationFilename = $certificationFilename;

        return $this;
    }
}
