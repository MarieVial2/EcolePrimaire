<?php

namespace App\Entity;

use App\Repository\ProfesseursRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProfesseursRepository::class)]
class Professeurs
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $nomProfesseur = null;

    #[ORM\Column(length: 50)]
    private ?string $prenomProfesseur = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomProfesseur(): ?string
    {
        return $this->nomProfesseur;
    }

    public function setNomProfesseur(string $nomProfesseur): self
    {
        $this->nomProfesseur = $nomProfesseur;

        return $this;
    }

    public function getPrenomProfesseur(): ?string
    {
        return $this->prenomProfesseur;
    }

    public function setPrenomProfesseur(string $prenomProfesseur): self
    {
        $this->prenomProfesseur = $prenomProfesseur;

        return $this;
    }
}
