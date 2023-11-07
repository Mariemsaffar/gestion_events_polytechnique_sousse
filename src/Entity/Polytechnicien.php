<?php

namespace App\Entity;

use App\Repository\PolytechnicienRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PolytechnicienRepository::class)
 */
class Polytechnicien
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
    private $username;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $password;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }
    public function getPlainPassword() { 
        return $this->plainPassword; 
    }
     public function setPlainPassword($password)
      
    {
         $this->plainPassword = $password; 
    }
    public function getSalt()
     {
         return null;
    }
    public function getRoles() { 
        return $this->roles; 
    } 
    public function eraseCredentials()
     { 

    } 
    public function setRoles(array $roles): self
     {
        $this->roles = $roles; 
        return $this; 
    }
}
