<?php

namespace App\Entity;

use App\Repository\ClubRoleRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ClubRoleRepository::class)
 */
class ClubRole
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
    private $id_role;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $libelle_role;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdRole(): ?string
    {
        return $this->id_role;
    }

    public function setIdRole(string $id_role): self
    {
        $this->id_role = $id_role;

        return $this;
    }

    public function getLibelleRole(): ?string
    {
        return $this->libelle_role;
    }

    public function setLibelleRole(string $libelle_role): self
    {
        $this->libelle_role = $libelle_role;

        return $this;
    }
}
