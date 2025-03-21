<?php

namespace App\Entity;

use App\Repository\RestaurantRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RestaurantRepository::class)]
class Restaurant
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $libelleRestaurant = null;

    #[ORM\Column(length: 255)]
    private ?string $imageRestaurant = null;

    #[ORM\Column]
    private ?int $nbTable = null;

    /**
     * @var Collection<int, OuvertureRestaurant>
     */
    #[ORM\OneToMany(targetEntity: OuvertureRestaurant::class, mappedBy: 'restaurant', orphanRemoval: true)]
    private Collection $lesHoraires;

    /**
     * @var Collection<int, ReserverRestaurant>
     */
    #[ORM\OneToMany(targetEntity: ReserverRestaurant::class, mappedBy: 'restaurant')]
    private Collection $lesReservations;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Biome $biome = null;

    public function __construct()
    {
        $this->lesHoraires = new ArrayCollection();
        $this->lesReservations = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibelleRestaurant(): ?string
    {
        return $this->libelleRestaurant;
    }

    public function setLibelleRestaurant(string $libelleRestaurant): static
    {
        $this->libelleRestaurant = $libelleRestaurant;

        return $this;
    }

    public function getImageRestaurant(): ?string
    {
        return $this->imageRestaurant;
    }

    public function setImageRestaurant(string $imageRestaurant): static
    {
        $this->imageRestaurant = $imageRestaurant;

        return $this;
    }

    public function getNbTable(): ?int
    {
        return $this->nbTable;
    }

    public function setNbTable(int $nbTable): static
    {
        $this->nbTable = $nbTable;

        return $this;
    }

    /**
     * @return Collection<int, OuvertureRestaurant>
     */
    public function getLesHoraires(): Collection
    {
        return $this->lesHoraires;
    }

    public function addLesHoraire(OuvertureRestaurant $lesHoraire): static
    {
        if (!$this->lesHoraires->contains($lesHoraire)) {
            $this->lesHoraires->add($lesHoraire);
            $lesHoraire->setRestaurant($this);
        }

        return $this;
    }

    public function removeLesHoraire(OuvertureRestaurant $lesHoraire): static
    {
        if ($this->lesHoraires->removeElement($lesHoraire)) {
            // set the owning side to null (unless already changed)
            if ($lesHoraire->getRestaurant() === $this) {
                $lesHoraire->setRestaurant(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, ReserverRestaurant>
     */
    public function getLesReservations(): Collection
    {
        return $this->lesReservations;
    }

    public function addLesReservation(ReserverRestaurant $lesReservation): static
    {
        if (!$this->lesReservations->contains($lesReservation)) {
            $this->lesReservations->add($lesReservation);
            $lesReservation->setRestaurant($this);
        }

        return $this;
    }

    public function removeLesReservation(ReserverRestaurant $lesReservation): static
    {
        if ($this->lesReservations->removeElement($lesReservation)) {
            // set the owning side to null (unless already changed)
            if ($lesReservation->getRestaurant() === $this) {
                $lesReservation->setRestaurant(null);
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
