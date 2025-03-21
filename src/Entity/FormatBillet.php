<?php

namespace App\Entity;

use App\Repository\FormatBilletRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FormatBilletRepository::class)]
class FormatBillet
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $libelleBillet = null;

    #[ORM\Column(length: 255)]
    private ?string $imageBillet = null;

    #[ORM\Column(length: 1000)]
    private ?string $descriptionBillet = null;

    #[ORM\Column]
    private ?int $prixBillet = null;

    /**
     * @var Collection<int, PayerBillet>
     */
    #[ORM\OneToMany(targetEntity: PayerBillet::class, mappedBy: 'billet')]
    private Collection $lesAchats;

    public function __construct()
    {
        $this->lesAchats = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibelleBillet(): ?string
    {
        return $this->libelleBillet;
    }

    public function setLibelleBillet(string $libelleBillet): static
    {
        $this->libelleBillet = $libelleBillet;

        return $this;
    }

    public function getImageBillet(): ?string
    {
        return $this->imageBillet;
    }

    public function setImageBillet(string $imageBillet): static
    {
        $this->imageBillet = $imageBillet;

        return $this;
    }

    public function getDescriptionBillet(): ?string
    {
        return $this->descriptionBillet;
    }

    public function setDescriptionBillet(string $descriptionBillet): static
    {
        $this->descriptionBillet = $descriptionBillet;

        return $this;
    }

    public function getPrixBillet(): ?int
    {
        return $this->prixBillet;
    }

    public function setPrixBillet(int $prixBillet): static
    {
        $this->prixBillet = $prixBillet;

        return $this;
    }

    /**
     * @return Collection<int, PayerBillet>
     */
    public function getLesAchats(): Collection
    {
        return $this->lesAchats;
    }

    public function addLesAchat(PayerBillet $lesAchat): static
    {
        if (!$this->lesAchats->contains($lesAchat)) {
            $this->lesAchats->add($lesAchat);
            $lesAchat->setBillet($this);
        }

        return $this;
    }

    public function removeLesAchat(PayerBillet $lesAchat): static
    {
        if ($this->lesAchats->removeElement($lesAchat)) {
            // set the owning side to null (unless already changed)
            if ($lesAchat->getBillet() === $this) {
                $lesAchat->setBillet(null);
            }
        }

        return $this;
    }
}
