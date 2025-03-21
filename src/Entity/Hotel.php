<?php

namespace App\Entity;

use App\Repository\HotelRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: HotelRepository::class)]
class Hotel
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $libelleHotel = null;

    #[ORM\Column(length: 255)]
    private ?string $imageHotel = null;

    #[ORM\Column(length: 1000)]
    private ?string $descriptionHotel = null;

    #[ORM\ManyToOne]
    private ?Biome $biome = null;

    /**
     * @var Collection<int, Chambre>
     */
    #[ORM\OneToMany(targetEntity: Chambre::class, mappedBy: 'hotel')]
    private Collection $lesChambres;

    public function __construct()
    {
        $this->lesChambres = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibelleHotel(): ?string
    {
        return $this->libelleHotel;
    }

    public function setLibelleHotel(string $libelleHotel): static
    {
        $this->libelleHotel = $libelleHotel;

        return $this;
    }

    public function getImageHotel(): ?string
    {
        return $this->imageHotel;
    }

    public function setImageHotel(string $imageHotel): static
    {
        $this->imageHotel = $imageHotel;

        return $this;
    }

    public function getDescriptionHotel(): ?string
    {
        return $this->descriptionHotel;
    }

    public function setDescriptionHotel(string $descriptionHotel): static
    {
        $this->descriptionHotel = $descriptionHotel;

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

    /**
     * @return Collection<int, Chambre>
     */
    public function getLesChambres(): Collection
    {
        return $this->lesChambres;
    }

    public function addLesChambre(Chambre $lesChambre): static
    {
        if (!$this->lesChambres->contains($lesChambre)) {
            $this->lesChambres->add($lesChambre);
            $lesChambre->setHotel($this);
        }

        return $this;
    }

    public function removeLesChambre(Chambre $lesChambre): static
    {
        if ($this->lesChambres->removeElement($lesChambre)) {
            // set the owning side to null (unless already changed)
            if ($lesChambre->getHotel() === $this) {
                $lesChambre->setHotel(null);
            }
        }

        return $this;
    }
}
