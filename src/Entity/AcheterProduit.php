<?php

namespace App\Entity;

use App\Repository\AcheterProduitRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AcheterProduitRepository::class)]
class AcheterProduit
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'achats')]
    private ?Commande $commande = null;

    #[ORM\ManyToOne(inversedBy: 'achats')]
    private ?Produit $produit = null;

    #[ORM\Column]
    private ?int $quantite = null;

    #[ORM\Column]
    private ?float $prix = null;

    public function getId(): ?int { return $this->id; }

    public function getCommande(): ?Commande { return $this->commande; }
    public function setCommande(?Commande $commande): static {
        $this->commande = $commande;
        return $this;
    }

    public function getProduit(): ?Produit { return $this->produit; }
    public function setProduit(?Produit $produit): static {
        $this->produit = $produit;
        return $this;
    }

    public function getQuantite(): ?int { return $this->quantite; }
    public function setQuantite(int $quantite): static {
        $this->quantite = $quantite;
        return $this;
    }

    public function getPrix(): ?float { return $this->prix; }
    public function setPrix(float $prix): static {
        $this->prix = $prix;
        return $this;
    }
}
