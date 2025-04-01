<?php

namespace App\Entity;

use App\Repository\PayerBilletRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PayerBilletRepository::class)]
#[ORM\Table(name: "payer_billet", 
    uniqueConstraints: [new ORM\UniqueConstraint(name: "unique_payer_billet", columns: ["id", "billet_id", "date_id"])]
)]

class PayerBillet
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private ?int $id = null; 

    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'payerBillets')]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $user = null;

    #[ORM\ManyToOne(targetEntity: FormatBillet::class, inversedBy: 'lesAchats')]
    #[ORM\JoinColumn(nullable: false)]
    private ?FormatBillet $billet = null;

    #[ORM\ManyToOne(targetEntity: Date::class)]
    #[ORM\JoinColumn(nullable: false)]
    private ?Date $date = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $debutBillet = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $finBillet = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\Column(length: 255)]
    private ?string $prenom = null;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): static
    {
        $this->user = $user;

        return $this;
    }

    public function getBillet(): ?FormatBillet
    {
        return $this->billet;
    }

    public function setBillet(?FormatBillet $billet): static
    {
        $this->billet = $billet;

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

    public function getDebutBillet(): ?\DateTimeInterface
    {
        return $this->debutBillet;
    }

    public function setDebutBillet(\DateTimeInterface $debutBillet): static
    {
        $this->debutBillet = $debutBillet;

        return $this;
    }

    public function getFinBillet(): ?\DateTimeInterface
    {
        return $this->finBillet;
    }

    public function setFinBillet(\DateTimeInterface $finBillet): static
    {
        $this->finBillet = $finBillet;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): static
    {
        $this->prenom = $prenom;

        return $this;
    }

}
