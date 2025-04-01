<?php

namespace App\Entity;

use App\Repository\CommandeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CommandeRepository::class)]
#[ORM\Table(name: '`commande`')]
class Commande
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $createdAt = null;

    #[ORM\Column(length: 255)]
    private ?string $status = null;

    #[ORM\Column]
    private ?float $total = null;

    /**
     * @var Collection<int, AcheterProduit>
     */
    #[ORM\OneToMany(targetEntity: AcheterProduit::class, mappedBy: 'commande')]
    private Collection $achats;

    public function __construct()
    {
        $this->achats = new ArrayCollection();
    }

    public function getId(): ?int { return $this->id; }

    public function getCreatedAt(): ?\DateTimeImmutable { return $this->createdAt; }
    public function setCreatedAt(\DateTimeImmutable $createdAt): static {
        $this->createdAt = $createdAt;
        return $this;
    }

    public function getStatus(): ?string { return $this->status; }
    public function setStatus(string $status): static {
        $this->status = $status;
        return $this;
    }

    public function getTotal(): ?float { return $this->total; }
    public function setTotal(float $total): static {
        $this->total = $total;
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
            $achat->setCommande($this);
        }

        return $this;
    }

    public function removeAchat(AcheterProduit $achat): static
    {
        if ($this->achats->removeElement($achat)) {
            if ($achat->getCommande() === $this) {
                $achat->setCommande(null);
            }
        }

        return $this;
    }
}
