<?php

namespace App\Entity;

use App\Repository\RemboursementHotelRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RemboursementHotelRepository::class)]
class RemboursementHotel
{
    #[ORM\Id]
    #[ORM\ManyToOne(inversedBy: 'remboursementHotels')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Remboursement $remboursement = null;

    #[ORM\Id]
    #[ORM\ManyToOne(targetEntity: LouerHotel::class)]
    #[ORM\JoinColumn(name: "louer_hotel_id", referencedColumnName: "id", nullable: false)] 
    private ?LouerHotel $hotel = null;

    public function getRemboursement(): ?Remboursement
    {
        return $this->remboursement;
    }

    public function setRemboursement(?Remboursement $remboursement): static
    {
        $this->remboursement = $remboursement;

        return $this;
    }

    public function getHotel(): ?LouerHotel
    {
        return $this->hotel;
    }

    public function setHotel(?LouerHotel $hotel): static
    {
        $this->hotel = $hotel;

        return $this;
    }
}
