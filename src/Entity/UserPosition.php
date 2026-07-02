<?php

namespace App\Entity;

use App\Repository\UserPositionRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: UserPositionRepository::class)]
#[ORM\Table(name: '`EREC_USER_POSITION`')]
class UserPosition
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'userPositions')]
    #[ORM\JoinColumn(name: 'user_id',referencedColumnName: 'id',nullable: false)]
    private ?User $user = null;

    #[ORM\ManyToOne(targetEntity: Position::class, inversedBy: 'userPositions')]
    #[ORM\JoinColumn(name: 'position_id',referencedColumnName: 'id',nullable: false)]
    private ?Position $position = null;

    // Getters & Setters
    public function getId(): ?int
    {
        return $this->id;
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

    public function getPosition(): ?Position
    {
        return $this->position;
    }

    public function setPosition(?Position $position): static
    {
        $this->position = $position;
        return $this;
    }
}