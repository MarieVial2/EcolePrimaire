<?php

namespace App\Entity;

use App\Repository\ElevesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ElevesRepository::class)]
class Eleves
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $nomEleve = null;

    #[ORM\Column(length: 50)]
    private ?string $prenomEleve = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $dateNaissance = null;

    

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Classes $classe = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomEleve(): ?string
    {
        return $this->nomEleve;
    }

    public function setNomEleve(string $nomEleve): self
    {
        $this->nomEleve = $nomEleve;

        return $this;
    }

    public function getPrenomEleve(): ?string
    {
        return $this->prenomEleve;
    }

    public function setPrenomEleve(string $prenomEleve): self
    {
        $this->prenomEleve = $prenomEleve;

        return $this;
    }

    public function getDateNaissance(): ?\DateTimeInterface
    {
        return $this->dateNaissance;
    }

    public function setDateNaissance(\DateTimeInterface $dateNaissance): self
    {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }

    public function getClasse(): ?Classes
    {
        return $this->classe;
    }

    public function setClasse(?Classes $classe): self
    {
        $this->classe = $classe;

        return $this;
    }
}
