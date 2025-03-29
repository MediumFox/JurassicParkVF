<?php

namespace App\Entity;

use App\Repository\ChambreRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ChambreRepository::class)]
class Chambre
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $numeroChambre = null;

    #[ORM\Column(length: 255)]
    private ?string $etageChambre = null;

    /**
     * @var Collection<int, LouerHotel>
     */
    #[ORM\OneToMany(targetEntity: LouerHotel::class, mappedBy: 'chambre')]
    private Collection $lesLocations;

    #[ORM\ManyToOne(inversedBy: 'lesChambres')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Hotel $hotel = null;
    
    #[ORM\ManyToOne(inversedBy: 'chambres')]
    #[ORM\JoinColumn(nullable: false)]
    private ?FormatChambre $formatChambre = null;

    public function __construct()
    {
        $this->lesLocations = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumeroChambre(): ?int
    {
        return $this->numeroChambre;
    }

    public function setNumeroChambre(int $numeroChambre): static
    {
        $this->numeroChambre = $numeroChambre;

        return $this;
    }

    public function getEtageChambre(): ?string
    {
        return $this->etageChambre;
    }

    public function setEtageChambre(string $etageChambre): static
    {
        $this->etageChambre = $etageChambre;

        return $this;
    }

    /**
     * @return Collection<int, LouerHotel>
     */
    public function getLesLocations(): Collection
    {
        return $this->lesLocations;
    }

    public function addLesLocation(LouerHotel $lesLocation): static
    {
        if (!$this->lesLocations->contains($lesLocation)) {
            $this->lesLocations->add($lesLocation);
            $lesLocation->setChambre($this);
        }

        return $this;
    }

    public function removeLesLocation(LouerHotel $lesLocation): static
    {
        if ($this->lesLocations->removeElement($lesLocation)) {
            // set the owning side to null (unless already changed)
            if ($lesLocation->getChambre() === $this) {
                $lesLocation->setChambre(null);
            }
        }

        return $this;
    }

    public function getHotel(): ?Hotel
    {
        return $this->hotel;
    }

    public function setHotel(?Hotel $hotel): static
    {
        $this->hotel = $hotel;

        return $this;
    }

    public function getFormatChambre(): ?FormatChambre
    {
        return $this->formatChambre;
    }

    public function setFormatChambre(?FormatChambre $formatChambre): static
    {
        $this->formatChambre = $formatChambre;

        return $this;
    }
}
