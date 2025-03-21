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

    /**
     * @var Collection<int, AcheterProduit>
     */
    #[ORM\OneToMany(targetEntity: AcheterProduit::class, mappedBy: 'Produit')]
    private Collection $lesClients;

    public function __construct()
    {
        $this->lesClients = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibelleProduit(): ?string
    {
        return $this->libelleProduit;
    }

    public function setLibelleProduit(string $libelleProduit): static
    {
        $this->libelleProduit = $libelleProduit;

        return $this;
    }

    public function getImageProduit(): ?string
    {
        return $this->imageProduit;
    }

    public function setImageProduit(string $imageProduit): static
    {
        $this->imageProduit = $imageProduit;

        return $this;
    }

    public function getDescriptionProduit(): ?string
    {
        return $this->descriptionProduit;
    }

    public function setDescriptionProduit(string $descriptionProduit): static
    {
        $this->descriptionProduit = $descriptionProduit;

        return $this;
    }

    public function getStock(): ?int
    {
        return $this->stock;
    }

    public function setStock(int $stock): static
    {
        $this->stock = $stock;

        return $this;
    }

    public function isDisponibleAchat(): ?bool
    {
        return $this->disponibleAchat;
    }

    public function setDisponibleAchat(bool $disponibleAchat): static
    {
        $this->disponibleAchat = $disponibleAchat;

        return $this;
    }

    public function getPrixProduit(): ?float
    {
        return $this->prixProduit;
    }

    public function setPrixProduit(float $prixProduit): static
    {
        $this->prixProduit = $prixProduit;

        return $this;
    }

    /**
     * @return Collection<int, AcheterProduit>
     */
    public function getLesClients(): Collection
    {
        return $this->lesClients;
    }

    public function addLesClient(AcheterProduit $lesClient): static
    {
        if (!$this->lesClients->contains($lesClient)) {
            $this->lesClients->add($lesClient);
            $lesClient->setProduit($this);
        }

        return $this;
    }

    public function removeLesClient(AcheterProduit $lesClient): static
    {
        if ($this->lesClients->removeElement($lesClient)) {
            // set the owning side to null (unless already changed)
            if ($lesClient->getProduit() === $this) {
                $lesClient->setProduit(null);
            }
        }

        return $this;
    }
}
