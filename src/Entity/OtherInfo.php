<?php

namespace App\Entity;

use App\Repository\OtherInfoRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: OtherInfoRepository::class)]
#[ORM\Table(name: '`EREC_OTHER_INFO`')]
class OtherInfo
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $malagasy_reading_level = null;

    #[ORM\Column(length: 255)]
    private ?string $malagasy_writing_level = null;

    #[ORM\Column(length: 255)]
    private ?string $malagasy_speaking_level = null;

    #[ORM\Column(length: 255)]
    private ?string $french_reading_level = null;

    #[ORM\Column(length: 255)]
    private ?string $french_writing_level = null;

    #[ORM\Column(length: 255)]
    private ?string $french_speaking_level = null;

    #[ORM\Column(length: 255)]
    private ?string $english_reading_level = null;

    #[ORM\Column(length: 255)]
    private ?string $english_writing_level = null;

    #[ORM\Column(length: 255)]
    private ?string $english_speaking_level = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $other_language_name = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $other_language_reading_level = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $other_language_writing_level = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $other_language_speaking_level = null;

    #[ORM\Column(length: 255)]
    private ?string $microsoft_word_level = null;

    #[ORM\Column(length: 255)]
    private ?string $microsoft_excel_level = null;

    #[ORM\Column(length: 255)]
    private ?string $microsoft_powerPoint_level = null;

    #[ORM\Column(length: 255)]
    private ?string $microsoft_oneNote_level = null;

    #[ORM\Column(length: 255)]
    private ?string $microsoft_outlook_level = null;

    #[ORM\Column(length: 255)]
    private ?string $microsoft_publisher_level = null;

    #[ORM\Column(length: 255)]
    private ?string $microsoft_access_level = null;

    #[ORM\Column(length: 255)]
    private ?string $microsoft_visio_level = null;

    #[ORM\Column(length: 255)]
    private ?string $microsoft_project_level = null;

    #[ORM\Column(type: Types::ARRAY, nullable: true)]
    private ?array $other_skills = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $otherNotInfoSkills = null;

    #[ORM\OneToOne(inversedBy: 'otherInfo', cascade: ['persist', 'remove'])]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $user = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMalagasyReadingLevel(): ?string
    {
        return $this->malagasy_reading_level;
    }

    public function setMalagasyReadingLevel(string $malagasy_reading_level): static
    {
        $this->malagasy_reading_level = $malagasy_reading_level;

        return $this;
    }

    public function getMalagasyWritingLevel(): ?string
    {
        return $this->malagasy_writing_level;
    }

    public function setMalagasyWritingLevel(string $malagasy_writing_level): static
    {
        $this->malagasy_writing_level = $malagasy_writing_level;

        return $this;
    }

    public function getMalagasySpeakingLevel(): ?string
    {
        return $this->malagasy_speaking_level;
    }

    public function setMalagasySpeakingLevel(string $malagasy_speaking_level): static
    {
        $this->malagasy_speaking_level = $malagasy_speaking_level;

        return $this;
    }

    public function getFrenchReadingLevel(): ?string
    {
        return $this->french_reading_level;
    }

    public function setFrenchReadingLevel(string $french_reading_level): static
    {
        $this->french_reading_level = $french_reading_level;

        return $this;
    }

    public function getFrenchWritingLevel(): ?string
    {
        return $this->french_writing_level;
    }

    public function setFrenchWritingLevel(string $french_writing_level): static
    {
        $this->french_writing_level = $french_writing_level;

        return $this;
    }

    public function getFrenchSpeakingLevel(): ?string
    {
        return $this->french_speaking_level;
    }

    public function setFrenchSpeakingLevel(string $french_speaking_level): static
    {
        $this->french_speaking_level = $french_speaking_level;

        return $this;
    }

    public function getEnglishReadingLevel(): ?string
    {
        return $this->english_reading_level;
    }

    public function setEnglishReadingLevel(string $english_reading_level): static
    {
        $this->english_reading_level = $english_reading_level;

        return $this;
    }

    public function getEnglishWritingLevel(): ?string
    {
        return $this->english_writing_level;
    }

    public function setEnglishWritingLevel(string $english_writing_level): static
    {
        $this->english_writing_level = $english_writing_level;

        return $this;
    }

    public function getEnglishSpeakingLevel(): ?string
    {
        return $this->english_speaking_level;
    }

    public function setEnglishSpeakingLevel(string $english_speaking_level): static
    {
        $this->english_speaking_level = $english_speaking_level;

        return $this;
    }

    public function getOtherLanguageName(): ?string
    {
        return $this->other_language_name;
    }

    public function setOtherLanguageName(?string $other_language_name): static
    {
        $this->other_language_name = $other_language_name;

        return $this;
    }

    public function getOtherLanguageReadingLevel(): ?string
    {
        return $this->other_language_reading_level;
    }

    public function setOtherLanguageReadingLevel(?string $other_language_reading_level): static
    {
        $this->other_language_reading_level = $other_language_reading_level;

        return $this;
    }

    public function getOtherLanguageWritingLevel(): ?string
    {
        return $this->other_language_writing_level;
    }

    public function setOtherLanguageWritingLevel(?string $other_language_writing_level): static
    {
        $this->other_language_writing_level = $other_language_writing_level;

        return $this;
    }

    public function getOtherLanguageSpeakingLevel(): ?string
    {
        return $this->other_language_speaking_level;
    }

    public function setOtherLanguageSpeakingLevel(?string $other_language_speaking_level): static
    {
        $this->other_language_speaking_level = $other_language_speaking_level;

        return $this;
    }

    public function getMicrosoftWordLevel(): ?string
    {
        return $this->microsoft_word_level;
    }

    public function setMicrosoftWordLevel(string $microsoft_word_level): static
    {
        $this->microsoft_word_level = $microsoft_word_level;

        return $this;
    }

    public function getMicrosoftExcelLevel(): ?string
    {
        return $this->microsoft_excel_level;
    }

    public function setMicrosoftExcelLevel(string $microsoft_excel_level): static
    {
        $this->microsoft_excel_level = $microsoft_excel_level;

        return $this;
    }

    public function getMicrosoftPowerPointLevel(): ?string
    {
        return $this->microsoft_powerPoint_level;
    }

    public function setMicrosoftPowerPointLevel(string $microsoft_powerPoint_level): static
    {
        $this->microsoft_powerPoint_level = $microsoft_powerPoint_level;

        return $this;
    }

    public function getMicrosoftOneNoteLevel(): ?string
    {
        return $this->microsoft_oneNote_level;
    }

    public function setMicrosoftOneNoteLevel(string $microsoft_oneNote_level): static
    {
        $this->microsoft_oneNote_level = $microsoft_oneNote_level;

        return $this;
    }

    public function getMicrosoftOutlookLevel(): ?string
    {
        return $this->microsoft_outlook_level;
    }

    public function setMicrosoftOutlookLevel(string $microsoft_outlook_level): static
    {
        $this->microsoft_outlook_level = $microsoft_outlook_level;

        return $this;
    }

    public function getMicrosoftPublisherLevel(): ?string
    {
        return $this->microsoft_publisher_level;
    }

    public function setMicrosoftPublisherLevel(string $microsoft_publisher_level): static
    {
        $this->microsoft_publisher_level = $microsoft_publisher_level;

        return $this;
    }

    public function getMicrosoftAccessLevel(): ?string
    {
        return $this->microsoft_access_level;
    }

    public function setMicrosoftAccessLevel(string $microsoft_access_level): static
    {
        $this->microsoft_access_level = $microsoft_access_level;

        return $this;
    }

    public function getMicrosoftVisioLevel(): ?string
    {
        return $this->microsoft_visio_level;
    }

    public function setMicrosoftVisioLevel(string $microsoft_visio_level): static
    {
        $this->microsoft_visio_level = $microsoft_visio_level;

        return $this;
    }

    public function getMicrosoftProjectLevel(): ?string
    {
        return $this->microsoft_project_level;
    }

    public function setMicrosoftProjectLevel(string $microsoft_project_level): static
    {
        $this->microsoft_project_level = $microsoft_project_level;

        return $this;
    }

    public function getOtherSkills(): ?array
    {
        return $this->other_skills;
    }

    public function setOtherSkills(?array $other_skills): static
    {
        $this->other_skills = $other_skills;

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

    public function getOtherNotInfoSkills(): ?string
    {
        return (string)$this->otherNotInfoSkills;
    }

    public function setOtherNotInfoSkills(?string $otherNotInfoSkills): void
    {
        $this->otherNotInfoSkills = $otherNotInfoSkills;
    }
}
