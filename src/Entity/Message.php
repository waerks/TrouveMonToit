<?php

namespace App\Entity;

use App\Repository\MessageRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MessageRepository::class)]
class Message
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $contenu = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $date_envoi = null;

    #[ORM\ManyToOne(inversedBy: 'messages')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Annonce $annonce = null;

    /**
     * @var Collection<int, User>
     */
    #[ORM\OneToMany(targetEntity: User::class, mappedBy: 'messagesEnvoyes', orphanRemoval: true)]
    private Collection $expediteur;

    /**
     * @var Collection<int, User>
     */
    #[ORM\OneToMany(targetEntity: User::class, mappedBy: 'messagesRecus', orphanRemoval: true)]
    private Collection $destinataire;

    public function __construct()
    {
        $this->expediteur = new ArrayCollection();
        $this->destinataire = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getContenu(): ?string
    {
        return $this->contenu;
    }

    public function setContenu(string $contenu): static
    {
        $this->contenu = $contenu;

        return $this;
    }

    public function getDateEnvoi(): ?\DateTimeInterface
    {
        return $this->date_envoi;
    }

    public function setDateEnvoi(\DateTimeInterface $date_envoi): static
    {
        $this->date_envoi = $date_envoi;

        return $this;
    }

    public function getAnnonce(): ?Annonce
    {
        return $this->annonce;
    }

    public function setAnnonce(?Annonce $annonce): static
    {
        $this->annonce = $annonce;

        return $this;
    }

    /**
     * @return Collection<int, User>
     */
    public function getExpediteur(): Collection
    {
        return $this->expediteur;
    }

    public function addExpediteur(User $expediteur): static
    {
        if (!$this->expediteur->contains($expediteur)) {
            $this->expediteur->add($expediteur);
            $expediteur->setMessagesEnvoyes($this);
        }

        return $this;
    }

    public function removeExpediteur(User $expediteur): static
    {
        if ($this->expediteur->removeElement($expediteur)) {
            // set the owning side to null (unless already changed)
            if ($expediteur->getMessagesEnvoyes() === $this) {
                $expediteur->setMessagesEnvoyes(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, User>
     */
    public function getDestinataire(): Collection
    {
        return $this->destinataire;
    }

    public function addDestinataire(User $destinataire): static
    {
        if (!$this->destinataire->contains($destinataire)) {
            $this->destinataire->add($destinataire);
            $destinataire->setMessagesRecus($this);
        }

        return $this;
    }

    public function removeDestinataire(User $destinataire): static
    {
        if ($this->destinataire->removeElement($destinataire)) {
            // set the owning side to null (unless already changed)
            if ($destinataire->getMessagesRecus() === $this) {
                $destinataire->setMessagesRecus(null);
            }
        }

        return $this;
    }
}
