<?php

namespace App\Entity;

use App\Repository\ColisRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ColisRepository::class)]
class Colis
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $etat = null;

    #[ORM\Column]
    private ?int $Volume = null;

    #[ORM\Column]
    private ?int $Poids = null;

    #[ORM\ManyToOne(inversedBy: 'lesColis')]
    private ?Commande $laCommande = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEtat(): ?string
    {
        return $this->etat;
    }

    public function setEtat(string $etat): static
    {
        $this->etat = $etat;

        return $this;
    }

    public function getVolume(): ?int
    {
        return $this->Volume;
    }

    public function setVolume(int $Volume): static
    {
        $this->Volume = $Volume;

        return $this;
    }

    public function getPoids(): ?int
    {
        return $this->Poids;
    }

    public function setPoids(int $Poids): static
    {
        $this->Poids = $Poids;

        return $this;
    }

    public function getLaCommande(): ?Commande
    {
        return $this->laCommande;
    }

    public function setLaCommande(?Commande $laCommande): static
    {
        $this->laCommande = $laCommande;

        return $this;
    }
}
