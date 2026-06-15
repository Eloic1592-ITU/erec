<?php

namespace App\Entity;

use App\Repository\DocumentRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DocumentRepository::class)]
#[ORM\Table(name: '`EREC_DOCUMENT`')]
class Document
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: 'string')]
    private string $cvFilename;

    #[ORM\OneToOne(inversedBy: 'document', cascade: ['persist', 'remove'])]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $user = null;

    #[ORM\Column(length: 255)]
    private ?string $lmFilename = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCvFilename(): string
    {
        return $this->cvFilename;
    }

    public function setCvFilename(string $cvFilename): self
    {
        $this->cvFilename = $cvFilename;

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

    public function getLmFilename(): ?string
    {
        return $this->lmFilename;
    }

    public function setLmFilename(string $lmFilename): static
    {
        $this->lmFilename = $lmFilename;

        return $this;
    }
} 
