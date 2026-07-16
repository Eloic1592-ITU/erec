<?php

namespace App\Entity;

use App\Repository\ContractTypeRepository;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

#[ORM\Entity(repositoryClass: ContractTypeRepository::class)]
#[ORM\Table(name: '`EREC_CONTRACT_TYPE`')]
class ContractType
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 30, unique: true)]
    private string $code;

    #[ORM\Column(length: 100)]
    private string $label;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $description = null;

    #[ORM\Column]
    private bool $certificationRequired = false;

    #[ORM\Column]
    private bool $internshipRequired = false;


    #[ORM\Column(nullable: true)]
    private ?bool $is_deleted = null;

    /**
    * @var Collection<int, Campaign>
    */
    #[ORM\OneToMany(targetEntity: Campaign::class, mappedBy: 'contractType')]
    private Collection $campaigns;

    public function __construct()
    {
        $this->campaigns = new ArrayCollection();
    }


    public function getId(): ?int
    {
        return $this->id;
    }


    public function getCode(): string
    {
        return $this->code;
    }

    public function setCode(string $code): static
    {
        $this->code = $code;

        return $this;
    }

    public function getLabel(): string
    {
        return $this->label;
    }

    public function setLabel(string $label): static
    {
        $this->label = $label;

        return $this;
    }


    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): static
    {
        $this->description = $description;

        return $this;
    }


    public function isCertificationRequired(): bool
    {
        return $this->certificationRequired;
    }

    public function setCertificationRequired(bool $certificationRequired): static
    {
        $this->certificationRequired = $certificationRequired;

        return $this;
    }


    public function isInternshipRequired(): bool
    {
        return $this->internshipRequired;
    }

    public function setInternshipRequired(bool $internshipRequired): static
    {
        $this->internshipRequired = $internshipRequired;

        return $this;
    }


    public function isDeleted(): ?bool
    {
        return $this->is_deleted;
    }

    public function setDeleted(?bool $is_deleted): static
    {
        $this->is_deleted = $is_deleted;

        return $this;
    }
    
    public function getCampaigns(): Collection
    {
        return $this->campaigns;
    }
}