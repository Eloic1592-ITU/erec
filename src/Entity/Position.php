<?php

namespace App\Entity;

use App\Repository\PositionRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use App\Entity\Campaign;
use App\Entity\JobApplication;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PositionRepository::class)]
#[ORM\Table(name: '`EREC_POSITION`')]
class Position
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    /**
     * @var Collection<int, User>
     */
    #[ORM\OneToMany(targetEntity: User::class, mappedBy: 'reference_position', orphanRemoval: true)]
    private Collection $users;

    #[ORM\Column(length: 255, unique: true)]
    private ?string $reference = null;

    #[ORM\Column(nullable: true)]
    private ?bool $is_deleted = null;

 
    #[ORM\ManyToOne(targetEntity: Campaign::class, inversedBy: 'positions')]
    #[ORM\JoinColumn(name: 'campaign_id', referencedColumnName: 'id', nullable: false)]
    private ?Campaign $campaign = null;

    // Il peut avoir  plusieurs candidatures (Job_application) pour un poste (Position)
    /**
     * @var Collection<int, JobApplication>
     */
    #[ORM\OneToMany(targetEntity: JobApplication::class, mappedBy: 'position', orphanRemoval: true)]
    private Collection $jobApplications;

    #[ORM\Column(type: 'oracle_date')]
    private ?\DateTimeInterface $closing_date = null;

    #[ORM\OneToMany(mappedBy: 'position', targetEntity: UserPosition::class)]
    private Collection $userPositions;

    public function __construct()
    {
        $this->users = new ArrayCollection();
        $this->jobApplications = new ArrayCollection();
        $this->closing_date = new \DateTime(); // valeur par défaut = aujourd'hui
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return Collection<int, User>
     */
    public function getUsers(): Collection
    {
        return $this->users;
    }

    public function addUser(User $user): static
    {
        if (!$this->users->contains($user)) {
            $this->users->add($user);
            $user->setReferencePosition($this);
        }

        return $this;
    }

    public function removeUser(User $user): static
    {
        if ($this->users->removeElement($user)) {
            // set the owning side to null (unless already changed)
            if ($user->getReferencePosition() === $this) {
                $user->setReferencePosition(null);
            }
        }

        return $this;
    }

    public function getReference(): ?string
    {
        return $this->reference;
    }

    public function setReference(string $reference): static
    {
        $this->reference = $reference;

        return $this;
    }

    // public function getSubmittedApplicationCount(): int
    // {
    //     $count = 0;
    //     foreach ($this->getUsers() as $user) {
    //         if ($user->getHasSubmittedApplication()) {
    //             $count++;
    //         }
    //     }
    //     return $count;
    // }


    

    public function isDeleted(): ?bool
    {
        return $this->is_deleted;
    }

    public function setDeleted(?bool $is_deleted): static
    {
        $this->is_deleted = $is_deleted;

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

    /**
     * @return Collection<int, User>
     */
    public function getJobApplications(): Collection
    {
        return $this->jobApplications;
    }

    public function getSubmittedApplicationCount(): int
    {
        $count = 0;
        foreach ($this->jobApplications as $jobApplication) {
            if ($jobApplication->getHasSubmittedApplication()) {
                $count++;
            }
        }
        return $count;
    }


    public function addJobApplication(JobApplication $jobApplication): static
    {
        if (!$this->jobApplications->contains($jobApplication)) {
            $this->jobApplications->add($jobApplication);
            $jobApplication->setPosition($this);
        }

        return $this;
    }
    public function removeJobApplication(JobApplication $jobApplication): static
    {
        if ($this->jobApplications->removeElement($jobApplication)) {
            if ($jobApplication->getPosition() === $this) {
                $jobApplication->setPosition(null);
            }
        }

        return $this;
    }

    public function getClosingDate(): ?\DateTimeInterface
    {
        return $this->closing_date;
    }

    public function setClosingDate(\DateTimeInterface $closing_date): static
    {
        $this->closing_date = $closing_date;

        return $this;
    }
}
