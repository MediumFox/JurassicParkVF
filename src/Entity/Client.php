<?php

namespace App\Entity;

use App\Repository\ClientRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ClientRepository::class)]
class Client extends User
{

    #[ORM\Column(length: 255)]
    private ?string $adressePostal = null;

    #[ORM\Column]
    private ?int $codePostal = null;

    #[ORM\Column(length: 6, nullable: true)]
    private ?string $otp = null;

    /**
     * @var Collection<int, AcheterProduit>
     */
    #[ORM\OneToMany(targetEntity: AcheterProduit::class, mappedBy: 'Client')]
    private Collection $produitsAchetes;

    /**
     * @var Collection<int, LouerHotel>
     */
    #[ORM\OneToMany(targetEntity: LouerHotel::class, mappedBy: 'client')]
    private Collection $sejoursHotels;

    /**
     * @var Collection<int, PayerBillet>
     */
    #[ORM\OneToMany(targetEntity: PayerBillet::class, mappedBy: 'client', orphanRemoval: true)]
    private Collection $lesBillets;

    /**
     * @var Collection<int, ReserverRestaurant>
     */
    #[ORM\OneToMany(targetEntity: ReserverRestaurant::class, mappedBy: 'client')]
    private Collection $lesRestaurants;

    /**
     * @var Collection<int, Remboursement>
     */
    #[ORM\OneToMany(targetEntity: Remboursement::class, mappedBy: 'client', orphanRemoval: true)]
    private Collection $remboursements;

    public function __construct()
    {
        $this->produitsAchetes = new ArrayCollection();
        $this->sejoursHotels = new ArrayCollection();
        $this->lesBillets = new ArrayCollection();
        $this->lesRestaurants = new ArrayCollection();
        $this->remboursements = new ArrayCollection();
    }

    public function getAdressePostal(): ?string
    {
        return $this->adressePostal;
    }

    public function setAdressePostal(string $adressePostal): static
    {
        $this->adressePostal = $adressePostal;

        return $this;
    }

    public function getCodePostal(): ?int
    {
        return $this->codePostal;
    }

    public function setCodePostal(int $codePostal): static
    {
        $this->codePostal = $codePostal;

        return $this;
    }

    /**
     * @return Collection<int, AcheterProduit>
     */
    public function getProduitsAchetes(): Collection
    {
        return $this->produitsAchetes;
    }

    public function addProduitsAchete(AcheterProduit $produitsAchete): static
    {
        if (!$this->produitsAchetes->contains($produitsAchete)) {
            $this->produitsAchetes->add($produitsAchete);
            $produitsAchete->setClient($this);
        }

        return $this;
    }

    public function removeProduitsAchete(AcheterProduit $produitsAchete): static
    {
        if ($this->produitsAchetes->removeElement($produitsAchete)) {
            // set the owning side to null (unless already changed)
            if ($produitsAchete->getClient() === $this) {
                $produitsAchete->setClient(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, LouerHotel>
     */
    public function getSejoursHotels(): Collection
    {
        return $this->sejoursHotels;
    }

    public function addSejoursHotel(LouerHotel $sejoursHotel): static
    {
        if (!$this->sejoursHotels->contains($sejoursHotel)) {
            $this->sejoursHotels->add($sejoursHotel);
            $sejoursHotel->setUser($this);
        }

        return $this;
    }

    public function removeSejoursHotel(LouerHotel $sejoursHotel): static
    {
        if ($this->sejoursHotels->removeElement($sejoursHotel)) {
            // set the owning side to null (unless already changed)
            if ($sejoursHotel->getUser() === $this) {
                $sejoursHotel->setUser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, PayerBillet>
     */
    public function getLesBillets(): Collection
    {
        return $this->lesBillets;
    }

    public function addLesBillet(PayerBillet $lesBillet): static
    {
        if (!$this->lesBillets->contains($lesBillet)) {
            $this->lesBillets->add($lesBillet);
            $lesBillet->setUser($this);
        }

        return $this;
    }

    public function removeLesBillet(PayerBillet $lesBillet): static
    {
        if ($this->lesBillets->removeElement($lesBillet)) {
            // set the owning side to null (unless already changed)
            if ($lesBillet->getUser() === $this) {
                $lesBillet->setUser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, ReserverRestaurant>
     */
    public function getLesRestaurants(): Collection
    {
        return $this->lesRestaurants;
    }

    public function addLesRestaurant(ReserverRestaurant $lesRestaurant): static
    {
        if (!$this->lesRestaurants->contains($lesRestaurant)) {
            $this->lesRestaurants->add($lesRestaurant);
            $lesRestaurant->setClient($this);
        }

        return $this;
    }

    public function removeLesRestaurant(ReserverRestaurant $lesRestaurant): static
    {
        if ($this->lesRestaurants->removeElement($lesRestaurant)) {
            // set the owning side to null (unless already changed)
            if ($lesRestaurant->getClient() === $this) {
                $lesRestaurant->setClient(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Remboursement>
     */
    public function getRemboursements(): Collection
    {
        return $this->remboursements;
    }

    public function addRemboursement(Remboursement $remboursement): static
    {
        if (!$this->remboursements->contains($remboursement)) {
            $this->remboursements->add($remboursement);
            $remboursement->setClient($this);
        }

        return $this;
    }

    public function removeRemboursement(Remboursement $remboursement): static
    {
        if ($this->remboursements->removeElement($remboursement)) {
            // set the owning side to null (unless already changed)
            if ($remboursement->getClient() === $this) {
                $remboursement->setClient(null);
            }
        }

        return $this;
    }

    public function getOtp(): ?string
    {
        return $this->otp;
    }

    public function setOtp(?string $otp): static
    {
        $this->otp = $otp;
        return $this;
    }
}
