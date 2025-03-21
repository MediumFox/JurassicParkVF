<?php

namespace App\Entity;

use App\Repository\AdministrateurRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AdministrateurRepository::class)]
class Administrateur extends User
{
    
    #[ORM\Column]
    private ?int $adminLevel = null;

    public function getAdminLevel(): ?int
    {
        return $this->adminLevel;
    }

    public function setAdminLevel(int $adminLevel): static
    {
        $this->adminLevel = $adminLevel;

        return $this;
    }
}
