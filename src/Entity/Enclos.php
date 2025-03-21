<?php

namespace App\Entity;

use App\Repository\EnclosRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EnclosRepository::class)]
class Enclos
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $libelleEnclos = null;

    /**
     * @var Collection<int, Dinosaure>
     */
    #[ORM\OneToMany(targetEntity: Dinosaure::class, mappedBy: 'enclos')]
    private Collection $dinosaures;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Biome $biome = null;

    public function __construct()
    {
        $this->dinosaures = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibelleEnclos(): ?string
    {
        return $this->libelleEnclos;
    }

    public function setLibelleEnclos(string $libelleEnclos): static
    {
        $this->libelleEnclos = $libelleEnclos;

        return $this;
    }

    /**
     * @return Collection<int, Dinosaure>
     */
    public function getDinosaures(): Collection
    {
        return $this->dinosaures;
    }

    public function addDinosaure(Dinosaure $dinosaure): static
    {
        if (!$this->dinosaures->contains($dinosaure)) {
            $this->dinosaures->add($dinosaure);
            $dinosaure->setEnclos($this);
        }

        return $this;
    }

    public function removeDinosaure(Dinosaure $dinosaure): static
    {
        if ($this->dinosaures->removeElement($dinosaure)) {
            // set the owning side to null (unless already changed)
            if ($dinosaure->getEnclos() === $this) {
                $dinosaure->setEnclos(null);
            }
        }

        return $this;
    }

    public function getBiome(): ?Biome
    {
        return $this->biome;
    }

    public function setBiome(?Biome $biome): static
    {
        $this->biome = $biome;

        return $this;
    }
}
