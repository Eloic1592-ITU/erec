<?php

namespace App\Entity;

use App\Repository\EducationRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EducationRepository::class)]
#[ORM\Table(name: '`EREC_EDUCATION`')]
class Education
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $other_field_of_study = null;

    #[ORM\Column(length: 255)]
    private ?string $specialty = null;

    #[ORM\Column(length: 255)]
    private ?string $institution = null;

    #[ORM\Column]
    private ?int $graduation_year = null;

    #[ORM\ManyToOne(inversedBy: 'education')]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $user = null;

    #[ORM\Column(length: 255)]
    private ?string $degreeFilename = null;

    #[ORM\ManyToOne(inversedBy: 'education')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Degree $degree = null;

    #[ORM\ManyToOne(inversedBy: 'education')]
    #[ORM\JoinColumn(nullable: false)]
    private ?FieldOfStudy $field_of_study = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $coverLetterFilename = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $schoolCertificateFilename = null;  
    
    public function __construct()
    {
        $this->degreeFilename= 'Aucune diplôme';
        $this->graduation_year = 0;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getOtherFieldOfStudy(): ?string
    {
        return $this->other_field_of_study;
    }

    public function setOtherFieldOfStudy(?string $other_field_of_study): static
    {
        $this->other_field_of_study = $other_field_of_study;

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

    public function getGraduationYear(): ?int
    {
        return $this->graduation_year;
    }

    public function setGraduationYear(int $graduation_year): static
    {
        $this->graduation_year = $graduation_year;

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

    public function getDegreeFilename(): ?string
    {
        return $this->degreeFilename;
    }

    public function setDegreeFilename(string $degreeFilename): static
    {
        $this->degreeFilename = $degreeFilename;

        return $this;
    }

    public function getDegree(): ?Degree
    {
        return $this->degree;
    }

    public function setDegree(?Degree $degree): static
    {
        $this->degree = $degree;

        return $this;
    }

    public function getFieldOfStudy(): ?FieldOfStudy
    {
        return $this->field_of_study;
    }

    public function setFieldOfStudy(?FieldOfStudy $field_of_study): static
    {
        $this->field_of_study = $field_of_study;

        return $this;
    }

    public function getCoverLetterFilename(): ?string
    {
        return $this->coverLetterFilename;
    }
    
    public function setCoverLetterFilename(?string $coverLetterFilename): static
    {
        $this->coverLetterFilename = $coverLetterFilename;
        return $this;
    }

    public function getSchoolCertificateFilename(): ?string
    {
        return $this->schoolCertificateFilename;
    }
    
    public function setSchoolCertificateFilename(?string $schoolCertificateFilename): static
    {
        $this->schoolCertificateFilename = $schoolCertificateFilename;
        return $this;
    }
}
