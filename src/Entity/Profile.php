<?php

namespace App\Entity;

use App\Repository\ProfileRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProfileRepository::class)]
#[ORM\Table(name: '`EREC_PROFILE`')]
class Profile
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $birth_country = null;

    #[ORM\Column(length: 255)]
    private ?string $birth_city = null;

    #[ORM\Column(type: 'oracle_date')]
    private ?\DateTimeInterface $cin_issue_date = null;

    #[ORM\Column(length: 255)]
    private ?string $cin_issue_place = null;

    #[ORM\Column(length: 255)]
    private ?string $address = null;

    #[ORM\Column(length: 255)]
    private ?string $postal_code = null;

    #[ORM\Column(length: 255)]
    private ?string $city = null;

    #[ORM\Column(length: 255)]
    private ?string $country = null;

    #[ORM\Column(length: 255)]
    private ?string $nationality = null;

    #[ORM\Column]
    private ?int $number_of_children = null;

    #[ORM\Column(length: 255)]
    private ?string $phone1 = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $phone2 = null;

    #[ORM\OneToOne(inversedBy: 'profile', cascade: ['persist', 'remove'])]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $user = null;

    #[ORM\ManyToOne(inversedBy: 'profiles')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Civility $civility = null;

    #[ORM\ManyToOne(inversedBy: 'profiles')]
    #[ORM\JoinColumn(nullable: false)]
    private ?MaritalStatus $marital_status = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBirthCountry(): ?string
    {
        return $this->birth_country;
    }

    public function setBirthCountry(string $birth_country): static
    {
        $this->birth_country = $birth_country;

        return $this;
    }

    public function getBirthCity(): ?string
    {
        return $this->birth_city;
    }

    public function setBirthCity(string $birth_city): static
    {
        $this->birth_city = $birth_city;

        return $this;
    }

    public function getCinIssueDate(): ?\DateTimeInterface
    {
        return $this->cin_issue_date;
    }

    public function setCinIssueDate(\DateTimeInterface $cin_issue_date): static
    {
        $this->cin_issue_date = $cin_issue_date;

        return $this;
    }

    public function getCinIssuePlace(): ?string
    {
        return $this->cin_issue_place;
    }

    public function setCinIssuePlace(string $cin_issue_place): static
    {
        $this->cin_issue_place = $cin_issue_place;

        return $this;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(string $address): static
    {
        $this->address = $address;

        return $this;
    }

    public function getPostalCode(): ?string
    {
        return $this->postal_code;
    }

    public function setPostalCode(string $postal_code): static
    {
        $this->postal_code = $postal_code;

        return $this;
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

    public function getCountry(): ?string
    {
        return $this->country;
    }

    public function setCountry(string $country): static
    {
        $this->country = $country;

        return $this;
    }

    public function getNationality(): ?string
    {
        return $this->nationality;
    }

    public function setNationality(string $nationality): static
    {
        $this->nationality = $nationality;

        return $this;
    }

    public function getNumberOfChildren(): ?int
    {
        return $this->number_of_children;
    }

    public function setNumberOfChildren(int $number_of_children): static
    {
        $this->number_of_children = $number_of_children;

        return $this;
    }

    public function getPhone1(): ?string
    {
        return $this->phone1;
    }

    public function setPhone1(string $phone1): static
    {
        $this->phone1 = $phone1;

        return $this;
    }

    public function getPhone2(): ?string
    {
        return $this->phone2;
    }

    public function setPhone2(string $phone2): static
    {
        $this->phone2 = $phone2;

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

    public function getCivility(): ?Civility
    {
        return $this->civility;
    }

    public function setCivility(?Civility $civility): static
    {
        $this->civility = $civility;

        return $this;
    }

    public function getMaritalStatus(): ?MaritalStatus
    {
        return $this->marital_status;
    }

    public function setMaritalStatus(?MaritalStatus $marital_status): static
    {
        $this->marital_status = $marital_status;

        return $this;
    }
}
