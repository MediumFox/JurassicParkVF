<?php

namespace App\Entity;

use App\Repository\RemboursementRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RemboursementRepository::class)]
class Remboursement
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'remboursements')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Client $client = null;

    #[ORM\ManyToOne(targetEntity: PayerBillet::class, inversedBy: 'remboursements')]
    #[ORM\JoinColumn(nullable: false)]
    private ?PayerBillet $billet = null;


    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $dateDemande = null;

    #[ORM\Column(length: 255)]
    private ?string $statut = null;

    #[ORM\Column(length: 1500)]
    private ?string $motif = null;

    /**
     * @var Collection<int, RemboursementBillet>
     */
    #[ORM\OneToMany(targetEntity: RemboursementBillet::class, mappedBy: 'remboursement', orphanRemoval: true)]
    private Collection $remboursementBillets;

    /**
     * @var Collection<int, RemboursementHotel>
     */
    #[ORM\OneToMany(targetEntity: RemboursementHotel::class, mappedBy: 'remboursement', orphanRemoval: true)]
    private Collection $remboursementHotels;

    #[ORM\Column]
    private ?float $montant = null;

    public function __construct()
    {
        $this->remboursementBillets = new ArrayCollection();
        $this->remboursementHotels = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getClient(): ?Client
    {
        return $this->client;
    }

    public function setClient(?Client $client): static
    {
        $this->client = $client;

        return $this;
    }

    public function getDateDemande(): ?\DateTimeInterface
    {
        return $this->dateDemande;
    }

    public function setDateDemande(\DateTimeInterface $dateDemande): static
    {
        $this->dateDemande = $dateDemande;

        return $this;
    }

    public function getStatut(): ?string
    {
        return $this->statut;
    }

    public function setStatut(string $statut): static
    {
        $this->statut = $statut;

        return $this;
    }

    public function getMotif(): ?string
    {
        return $this->motif;
    }

    public function setMotif(string $motif): static
    {
        $this->motif = $motif;

        return $this;
    }

    /**
     * @return Collection<int, RemboursementBillet>
     */
    public function getRemboursementBillets(): Collection
    {
        return $this->remboursementBillets;
    }

    public function addRemboursementBillet(RemboursementBillet $remboursementBillet): static
    {
        if (!$this->remboursementBillets->contains($remboursementBillet)) {
            $this->remboursementBillets->add($remboursementBillet);
            $remboursementBillet->setRemboursement($this);
        }

        return $this;
    }

    public function removeRemboursementBillet(RemboursementBillet $remboursementBillet): static
    {
        if ($this->remboursementBillets->removeElement($remboursementBillet)) {
            // set the owning side to null (unless already changed)
            if ($remboursementBillet->getRemboursement() === $this) {
                $remboursementBillet->setRemboursement(null);
            }
        }

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
            $remboursementHotel->setRemboursement($this);
        }

        return $this;
    }

    public function removeRemboursementHotel(RemboursementHotel $remboursementHotel): static
    {
        if ($this->remboursementHotels->removeElement($remboursementHotel)) {
            // set the owning side to null (unless already changed)
            if ($remboursementHotel->getRemboursement() === $this) {
                $remboursementHotel->setRemboursement(null);
            }
        }

        return $this;
    }

    public function getMontant(): ?float
    {
        return $this->montant;
    }

    public function setMontant(float $montant): static
    {
        $this->montant = $montant;

        return $this;
    }

    public function getBillet(): ?PayerBillet
    {
        return $this->billet;
    }

    public function setBillet(?PayerBillet $billet): self
    {
        $this->billet = $billet;
        return $this;
    }
}
