<?php

namespace App\Entity;

use App\Repository\BiomeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: BiomeRepository::class)]
class Biome
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $libelleBiome = null;

    #[ORM\Column(length: 1000)]
    private ?string $descriptionBiome = null;

    /**
     * @var Collection<int, Enclos>
     */
    #[ORM\OneToMany(targetEntity: Enclos::class, mappedBy: 'idBiome')]
    private Collection $lesEnclos;

    public function __construct()
    {
        $this->lesEnclos = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibelleBiome(): ?string
    {
        return $this->libelleBiome;
    }

    public function setLibelleBiome(string $libelleBiome): static
    {
        $this->libelleBiome = $libelleBiome;

        return $this;
    }

    public function getDescriptionBiome(): ?string
    {
        return $this->descriptionBiome;
    }

    public function setDescriptionBiome(string $descriptionBiome): static
    {
        $this->descriptionBiome = $descriptionBiome;

        return $this;
    }

    /**
     * @return Collection<int, Enclos>
     */
    public function getLesEnclos(): Collection
    {
        return $this->lesEnclos;
    }

    public function addLesEnclo(Enclos $lesEnclo): static
    {
        if (!$this->lesEnclos->contains($lesEnclo)) {
            $this->lesEnclos->add($lesEnclo);
            $lesEnclo->setBiome($this);
        }

        return $this;
    }

    public function removeLesEnclo(Enclos $lesEnclo): static
    {
        if ($this->lesEnclos->removeElement($lesEnclo)) {
            // set the owning side to null (unless already changed)
            if ($lesEnclo->getBiome() === $this) {
                $lesEnclo->setBiome(null);
            }
        }

        return $this;
    }
}
