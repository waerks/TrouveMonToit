<?php

namespace App\Entity;

use App\Repository\LocalisationRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: LocalisationRepository::class)]
class Localisation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $adresse_complete = null;

    #[ORM\Column(length: 255)]
    private ?string $ville = null;

    #[ORM\Column]
    private ?int $code_postal = null;

    #[ORM\Column]
    private ?float $latitude = null;

    #[ORM\Column]
    private ?float $longitude = null;

    #[ORM\Column(length: 255)]
    private ?string $zone = null;

    #[ORM\OneToOne(mappedBy: 'localisation', cascade: ['persist', 'remove'])]
    private ?Annonce $annonce = null;

    #[ORM\ManyToOne(inversedBy: 'localisations')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Proximite $proximites = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAdresseComplete(): ?string
    {
        return $this->adresse_complete;
    }

    public function setAdresseComplete(string $adresse_complete): static
    {
        $this->adresse_complete = $adresse_complete;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(string $ville): static
    {
        $this->ville = $ville;

        return $this;
    }

    public function getCodePostal(): ?int
    {
        return $this->code_postal;
    }

    public function setCodePostal(int $code_postal): static
    {
        $this->code_postal = $code_postal;

        return $this;
    }

    public function getLatitude(): ?float
    {
        return $this->latitude;
    }

    public function setLatitude(float $latitude): static
    {
        $this->latitude = $latitude;

        return $this;
    }

    public function getLongitude(): ?float
    {
        return $this->longitude;
    }

    public function setLongitude(float $longitude): static
    {
        $this->longitude = $longitude;

        return $this;
    }

    public function getZone(): ?string
    {
        return $this->zone;
    }

    public function setZone(string $zone): static
    {
        $this->zone = $zone;

        return $this;
    }

    public function getAnnonce(): ?Annonce
    {
        return $this->annonce;
    }

    public function setAnnonce(Annonce $annonce): static
    {
        // set the owning side of the relation if necessary
        if ($annonce->getLocalisation() !== $this) {
            $annonce->setLocalisation($this);
        }

        $this->annonce = $annonce;

        return $this;
    }

    public function getProximites(): ?Proximite
    {
        return $this->proximites;
    }

    public function setProximites(?Proximite $proximites): static
    {
        $this->proximites = $proximites;

        return $this;
    }
}