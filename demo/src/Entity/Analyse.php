<?php

namespace App\Entity;

use App\Enum\Statut;
use App\Enum\Type;
use App\Repository\AnalyseRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AnalyseRepository::class)]
#[ORM\Table(name: '`analyse`')]
class Analyse
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::STRING, nullable: true)]
private ?string $type = null;

#[ORM\Column(type: Types::STRING, nullable: true)]
private ?string $statut = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTimeImmutable $daterealisation = null;

    #[ORM\ManyToOne(inversedBy: 'analyses')]
    private ?Medecin $medecin = null;

    #[ORM\ManyToOne(inversedBy: 'analyses')]
    private ?Patient $patient = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Type[]|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): static
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return Statut[]|null
     */
    public function getStatut(): ?string
    {
        return $this->statut;
    }

    public function setStatut(?string $statut): static
    {
        $this->statut = $statut;

        return $this;
    }

    public function getDaterealisation(): ?\DateTimeImmutable
    {
        return $this->daterealisation;
    }

    public function setDaterealisation(?\DateTimeImmutable $daterealisation): static
    {
        $this->daterealisation = $daterealisation;

        return $this;
    }

    public function getMedecin(): ?Medecin
    {
        return $this->medecin;
    }

    public function setMedecin(?Medecin $medecin): static
    {
        $this->medecin = $medecin;

        return $this;
    }

    public function getPatient(): ?Patient
    {
        return $this->patient;
    }

    public function setPatient(?Patient $patient): static
    {
        $this->patient = $patient;

        return $this;
    }
}
