<?php

namespace App\Entity;

use App\Repository\DemandeEventRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=DemandeEventRepository::class)
 */
class DemandeEvent
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $id_demande_event;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $id_event;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $demande;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $description_demande;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdDemandeEvent(): ?string
    {
        return $this->id_demande_event;
    }

    public function setIdDemandeEvent(string $id_demande_event): self
    {
        $this->id_demande_event = $id_demande_event;

        return $this;
    }

    public function getIdEvent(): ?string
    {
        return $this->id_event;
    }

    public function setIdEvent(string $id_event): self
    {
        $this->id_event = $id_event;

        return $this;
    }

    public function getDemande(): ?string
    {
        return $this->demande;
    }

    public function setDemande(string $demande): self
    {
        $this->demande = $demande;

        return $this;
    }

    public function getDescriptionDemande(): ?string
    {
        return $this->description_demande;
    }

    public function setDescriptionDemande(string $description_demande): self
    {
        $this->description_demande = $description_demande;

        return $this;
    }
}
