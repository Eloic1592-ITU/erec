<?php

namespace App\Entity;

use App\Repository\EngagementRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EngagementRepository::class)]
#[ORM\Table(name: '`EREC_ENGAGEMENT`')]
class Engagement
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $city = null;

    #[ORM\Column(type: 'oracle_date')]
    private ?\DateTimeInterface $date_engagement = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $second_position = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $third_position = null;

    #[ORM\OneToOne(inversedBy: 'engagement', cascade: ['persist', 'remove'])]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $user = null;

    public function __construct()
    {
        $this->second_position = "Aucun poste défini";
        $this->third_position = "Aucun poste défini";
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(string $city): static
    {
        $this->city = $city;

        return $this;
    }

    public function getDateEngagement(): ?\DateTimeInterface
    {
        return $this->date_engagement;
    }

    public function setDateEngagement(\DateTimeInterface $date_engagement): static
    {
        $this->date_engagement = $date_engagement;

        return $this;
    }

    public function getSecondPosition(): ?string
    {
        return $this->second_position;
    }

    public function setSecondPosition(?string $second_position): static
    {
        $this->second_position = $second_position;

        return $this;
    }

    public function getThirdPosition(): ?string
    {
        return $this->third_position;
    }

    public function setThirdPosition(?string $third_position): static
    {
        $this->third_position = $third_position;

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
