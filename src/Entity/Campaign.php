<?php

namespace App\Entity;

use App\Repository\CampaignRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;
use App\Entity\Position;
use App\Entity\JobApplication;

#[ORM\Entity(repositoryClass: CampaignRepository::class)]
#[ORM\Table(name: '`EREC_CAMPAIGN`')]
#[ORM\HasLifecycleCallbacks]
class Campaign
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $title = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $description = null;

    #[ORM\Column(nullable: true)]
    private ?bool $is_deleted = null;

    #[ORM\Column(type: 'oracle_date')]
    private ?\DateTimeInterface $created_at = null;

    #[ORM\Column(type: 'oracle_date', nullable: true)]
    private ?\DateTimeInterface $updated_at = null;

    // Il peut avoir plusieurs postes (Position) dans une campagne
    /**
     * @var Collection<int, Position>
     */
    #[ORM\OneToMany(targetEntity: Position::class, mappedBy: 'campaign', orphanRemoval: true)]
    private Collection $positions;

     // Il peut avoir plusieurs candidatures (Job_application) dans une campagne
    /**
     * @var Collection<int, JobApplication>
     */
    #[ORM\OneToMany(targetEntity: JobApplication::class, mappedBy: 'campaign', orphanRemoval: true)]
    private Collection $jobApplications;

    public function __construct()
    {
    $this->positions = new ArrayCollection();
    $this->jobApplications = new ArrayCollection();
    }

    // Creation de campagne
    #[ORM\PrePersist]
    public function onCreate(): void
    {
        if ($this->created_at === null) {
            $this->created_at = new \DateTime();
        }
        // updated_at reste null à l'insertion, on ne le touche pas
    }

    // Modification de campagne
    #[ORM\PreUpdate]
    public function onUpdate(): void
    {
        $this->updated_at = new \DateTime();
    }


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): static
    {
        $this->title = $title;

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


    public function isDeleted(): ?bool
    {
        return $this->is_deleted;
    }

    public function setDeleted(?bool $is_deleted): static
    {
        $this->is_deleted = $is_deleted;

        return $this;
    }


    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->created_at;
    }

    public function setCreatedAt(\DateTimeInterface $created_at): static
    {
        $this->created_at = $created_at;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updated_at;
    }

    public function setUpdatedAt(?\DateTimeInterface $updated_at): static
    {
        $this->updated_at = $updated_at;

        return $this;
    }

    public function addPosition(Position $position): static
    {
        if (!$this->positions->contains($position)) {
            $this->positions->add($position);
            $position->setCampaign($this);
        }

        return $this;
    }

    public function removePosition(Position $position): static
    {
        if ($this->positions->removeElement($position)) {
            if ($position->getCampaign() === $this) {
                $position->setCampaign(null);
            }
        }

        return $this;
    }

    public function addJobApplication(JobApplication $jobApplication): static
    {
        if (!$this->jobApplications->contains($jobApplication)) {
            $this->jobApplications->add($jobApplication);
            $jobApplication->setCampaign($this);
        }

        return $this;
    }

    public function removeJobApplication(JobApplication $jobApplication): static
    {
        if ($this->jobApplications->removeElement($jobApplication)) {
            if ($jobApplication->getCampaign() === $this) {
                $jobApplication->setCampaign(null);
            }
        }

        return $this;
    }
}
