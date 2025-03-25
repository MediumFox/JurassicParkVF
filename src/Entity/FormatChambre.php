<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\FormatChambreRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

#[ORM\Entity(repositoryClass: FormatChambreRepository::class)]
class FormatChambre
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $libelleFormatChambre = null;

    #[ORM\Column]
    private ?int $prixFormatChambre = null;

    #[ORM\Column(length: 1000)]
    private ?string $descriptionFormatBillet = null;
    
    #[ORM\OneToMany(mappedBy: 'formatChambre', targetEntity: Chambre::class)]
    private Collection $chambres;
    
    public function __construct()
    {
        $this->chambres = new ArrayCollection();
    }
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibelleFormatChambre(): ?string
    {
        return $this->libelleFormatChambre;
    }

    public function setLibelleFormatChambre(string $libelleFormatChambre): static
    {
        $this->libelleFormatChambre = $libelleFormatChambre;

        return $this;
    }

    public function getPrixFormatChambre(): ?int
    {
        return $this->prixFormatChambre;
    }

    public function setPrixFormatChambre(int $prixFormatChambre): static
    {
        $this->prixFormatChambre = $prixFormatChambre;

        return $this;
    }

    public function getDescriptionFormatBillet(): ?string
    {
        return $this->descriptionFormatBillet;
    }

    public function setDescriptionFormatBillet(string $descriptionFormatBillet): static
    {
        $this->descriptionFormatBillet = $descriptionFormatBillet;

        return $this;
    }
}
