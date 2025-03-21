<?php

namespace App\Entity;

use App\Repository\RemboursementBilletRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RemboursementBilletRepository::class)]
class RemboursementBillet
{

    #[ORM\Id]
    #[ORM\ManyToOne(targetEntity: Remboursement::class, inversedBy: 'remboursementBillets')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Remboursement $remboursement = null;

    #[ORM\Id]
    #[ORM\ManyToOne(targetEntity: PayerBillet::class)]
    #[ORM\JoinColumn(name: "payer_billet_id", referencedColumnName: "id", nullable: false)]
    private ?PayerBillet $billet = null;

    public function getRemboursement(): ?Remboursement
    {
        return $this->remboursement;
    }

    public function setRemboursement(?Remboursement $remboursement): static
    {
        $this->remboursement = $remboursement;

        return $this;
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

    public function setBillet(?PayerBillet $billet): static
    {
        $this->billet = $billet;

        return $this;
    }
}
