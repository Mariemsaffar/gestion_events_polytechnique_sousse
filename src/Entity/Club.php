<?php

namespace App\Entity;

use App\Repository\ClubRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ClubRepository::class)
 */
class Club
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
    private $id_club;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $libelle_club;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $description_club;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdClub(): ?string
    {
        return $this->id_club;
    }

    public function setIdClub(string $id_club): self
    {
        $this->id_club = $id_club;

        return $this;
    }

    public function getLibelleClub(): ?string
    {
        return $this->libelle_club;
    }

    public function setLibelleClub(string $libelle_club): self
    {
        $this->libelle_club = $libelle_club;

        return $this;
    }

    public function getDescriptionClub(): ?string
    {
        return $this->description_club;
    }

    public function setDescriptionClub(string $description_club): self
    {
        $this->description_club = $description_club;

        return $this;
    }
}
