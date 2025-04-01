<?php

namespace App\Entity;

use App\Repository\ProduitRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProduitRepository::class)]
class Produit
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $libelleProduit = null;

    #[ORM\Column(length: 255)]
    private ?string $imageProduit = null;

    #[ORM\Column(length: 1000)]
    private ?string $descriptionProduit = null;

    #[ORM\Column]
    private ?int $stock = null;

    #[ORM\Column]
    private ?bool $disponibleAchat = null;

    #[ORM\Column]
    private ?float $prixProduit = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $slug = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTimeImmutable $createdAt = null;

    /**
     * @var Collection<int, AcheterProduit>
     */
    #[ORM\OneToMany(targetEntity: AcheterProduit::class, mappedBy: 'produit')]
    private Collection $achats;

    public function __construct()
    {
        $this->achats = new ArrayCollection();
    }

    public function getId(): ?int { return $this->id; }

    public function getLibelleProduit(): ?string { return $this->libelleProduit; }
    public function setLibelleProduit(string $libelleProduit): static {
        $this->libelleProduit = $libelleProduit;
        return $this;
    }

    public function getImageProduit(): ?string { return $this->imageProduit; }
    public function setImageProduit(string $imageProduit): static {
        $this->imageProduit = $imageProduit;
        return $this;
    }

    public function getDescriptionProduit(): ?string { return $this->descriptionProduit; }
    public function setDescriptionProduit(string $descriptionProduit): static {
        $this->descriptionProduit = $descriptionProduit;
        return $this;
    }

    public function getStock(): ?int { return $this->stock; }
    public function setStock(int $stock): static {
        $this->stock = $stock;
        return $this;
    }

    public function isDisponibleAchat(): ?bool { return $this->disponibleAchat; }
    public function setDisponibleAchat(bool $disponibleAchat): static {
        $this->disponibleAchat = $disponibleAchat;
        return $this;
    }

    public function getPrixProduit(): ?float { return $this->prixProduit; }
    public function setPrixProduit(float $prixProduit): static {
        $this->prixProduit = $prixProduit;
        return $this;
    }

    public function getSlug(): ?string { return $this->slug; }
    public function setSlug(?string $slug): static {
        $this->slug = $slug;
        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable { return $this->createdAt; }
    public function setCreatedAt(?\DateTimeImmutable $createdAt): static {
        $this->createdAt = $createdAt;
        return $this;
    }

    /**
     * @return Collection<int, AcheterProduit>
     */
    public function getAchats(): Collection
    {
        return $this->achats;
    }

    public function addAchat(AcheterProduit $achat): static
    {
        if (!$this->achats->contains($achat)) {
            $this->achats->add($achat);
            $achat->setProduit($this);
        }

        return $this;
    }

    public function removeAchat(AcheterProduit $achat): static
    {
        if ($this->achats->removeElement($achat)) {
            if ($achat->getProduit() === $this) {
                $achat->setProduit(null);
            }
        }

        return $this;
    }
}
