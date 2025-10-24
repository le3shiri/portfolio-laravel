<?php

namespace App\Classes;

class Developer
{
    public string $nom;
    public string $prenom;
    public string $role;
    public string $bio;
    public string $email;
    public string $numeroTelephone;
    public string $localisation;
    public string $photoProfile;
    private array $projets = [];

    public function __construct(
        string $nom,
        string $prenom,
        string $role,
        string $bio,
        string $email,
        string $numeroTelephone,
        string $localisation,
        string $photoProfile
    ) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->role = $role;
        $this->bio = $bio;
        $this->email = $email;
        $this->numeroTelephone = $numeroTelephone;
        $this->localisation = $localisation;
        $this->photoProfile = $photoProfile;
    }

    public function getNomComplet(): string
    {
        return $this->prenom . ' ' . $this->nom;
    }

    public function ajouterProjet(Projet $projet): void
    {
        $this->projets[] = $projet;
    }

    public function getProjets(): array
    {
        return $this->projets;
    }
}
