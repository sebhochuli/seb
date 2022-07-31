<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name:'clients')]
class Client
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type:'integer', options:['unsigned'=>true])]
    private int $id;

    #[ORM\Column(type:'text', length:255, nullable:false)]
    private string $prenom;

    #[ORM\Column(type:'text', length:255, nullable:false)]
    private string $nom;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): string
    {
        return $this->nom;
    }

    public function getPrenom(): string
    {
        return $this->prenom;
    }

    public function setNom(string $nom)
    {
        return $this->nom = $nom;
    }

    public function setPrenom(string $prenom)
    {
        return $this->prenom = $prenom;
    }
}
