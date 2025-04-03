<?php

namespace App\Entity;

use App\Repository\DinosaureRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DinosaureRepository::class)]
class Dinosaure
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $imageDinosaure = null;

    #[ORM\Column(length: 255)]
    private ?string $libelleDinosaure = null;

    #[ORM\Column(length: 255)]
    private ?string $regimeDinosaure = null;

    #[ORM\Column(length: 255)]
    private ?string $ereDinosaure = null;

    #[ORM\Column(length: 1000)]
    private ?string $descriptionDinosaure = null;

    #[ORM\ManyToOne(inversedBy: 'dinosaures')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Enclos $enclos = null;

    public function setId(?int $id): self
    {
        $this->id = $id;
        return $this;
    }
    

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getImageDinosaure(): ?string
    {
        return $this->imageDinosaure;
    }

    public function setImageDinosaure(string $imageDinosaure): static
    {
        $this->imageDinosaure = $imageDinosaure;

        return $this;
    }

    public function getLibelleDinosaure(): ?string
    {
        return $this->libelleDinosaure;
    }

    public function setLibelleDinosaure(string $libelleDinosaure): static
    {
        $this->libelleDinosaure = $libelleDinosaure;

        return $this;
    }

    public function getRegimeDinosaure(): ?string
    {
        return $this->regimeDinosaure;
    }

    public function setRegimeDinosaure(string $regimeDinosaure): static
    {
        $this->regimeDinosaure = $regimeDinosaure;

        return $this;
    }

    public function getEreDinosaure(): ?string
    {
        return $this->ereDinosaure;
    }

    public function setEreDinosaure(string $ereDinosaure): static
    {
        $this->ereDinosaure = $ereDinosaure;

        return $this;
    }

    public function getDescriptionDinosaure(): ?string
    {
        return $this->descriptionDinosaure;
    }

    public function setDescriptionDinosaure(string $descriptionDinosaure): static
    {
        $this->descriptionDinosaure = $descriptionDinosaure;

        return $this;
    }

    public function getEnclos(): ?Enclos
    {
        return $this->enclos;
    }

    public function setEnclos(?Enclos $enclos): static
    {
        $this->enclos = $enclos;

        return $this;
    }
}
