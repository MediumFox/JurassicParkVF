<?php

namespace App\Entity;

use App\Repository\LouerHotelRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: LouerHotelRepository::class)]
#[ORM\Table(name: "louer_hotel", 
    uniqueConstraints: [new ORM\UniqueConstraint(name: "unique_louer_hotel", columns: ["user_id", "chambre_id", "date_id"])]
)]
class LouerHotel
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private ?int $id = null; 

    #[ORM\ManyToOne(inversedBy: 'sejoursHotels')]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $user = null;

    #[ORM\ManyToOne(inversedBy: 'lesLocations')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Chambre $chambre = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Date $date = null;

    #[ORM\Column(type: 'integer')]
    #[ORM\JoinColumn(nullable: true)]
    private ?int $note = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $debutLocation = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $finLocation = null;

    /**
     * @var Collection<int, RemboursementHotel>
     */
    #[ORM\OneToMany(targetEntity: RemboursementHotel::class, mappedBy: 'hotel')]
    private Collection $remboursementHotels;

    public function __construct()
    {
        $this->remboursementHotels = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }
    public function getUser(): ?Client
    {
        return $this->user;
    }

    public function setUser(?User $user): static
    {
        $this->user = $user;

        return $this;
    }

    public function getChambre(): ?Chambre
    {
        return $this->chambre;
    }

    public function setChambre(?Chambre $chambre): static
    {
        $this->chambre = $chambre;

        return $this;
    }

    public function getDate(): ?Date
    {
        return $this->date;
    }

    public function setDate(?Date $date): static
    {
        $this->date = $date;

        return $this;
    }

    public function getDebutLocation(): ?\DateTimeInterface
    {
        return $this->debutLocation;
    }

    public function setDebutLocation(\DateTimeInterface $debutLocation): static
    {
        $this->debutLocation = $debutLocation;

        return $this;
    }

    public function getFinLocation(): ?\DateTimeInterface
    {
        return $this->finLocation;
    }

    public function setFinLocation(\DateTimeInterface $finLocation): static
    {
        $this->finLocation = $finLocation;

        return $this;
    }

    public function getNote(): ?int
    {
        return $this->note;
    }

    public function setNote($note): static
    {
        $this->note = $note;

        return $this;
    }

    /**
     * @return Collection<int, RemboursementHotel>
     */
    public function getRemboursementHotels(): Collection
    {
        return $this->remboursementHotels;
    }

    public function addRemboursementHotel(RemboursementHotel $remboursementHotel): static
    {
        if (!$this->remboursementHotels->contains($remboursementHotel)) {
            $this->remboursementHotels->add($remboursementHotel);
            $remboursementHotel->setHotel($this);
        }

        return $this;
    }

    public function removeRemboursementHotel(RemboursementHotel $remboursementHotel): static
    {
        if ($this->remboursementHotels->removeElement($remboursementHotel)) {
            // set the owning side to null (unless already changed)
            if ($remboursementHotel->getHotel() === $this) {
                $remboursementHotel->setHotel(null);
            }
        }

        return $this;
    }
}
