<?php

namespace App\Entity;

use App\Repository\JourRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: JourRepository::class)]
class Jour
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $libelleJour = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibelleJour(): ?string
    {
        return $this->libelleJour;
    }

    public function setLibelleJour(string $libelleJour): static
    {
        $this->libelleJour = $libelleJour;

        return $this;
    }
}
