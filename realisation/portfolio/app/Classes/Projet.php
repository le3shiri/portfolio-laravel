<?php

namespace App\Classes;

class Projet
{
    public int $id;
    public string $titre;
    public string $description;
    public string $image;
    public string $dateDebut;
    public string $dateFin;
    private array $technologies = [];

    public function __construct(
        int $id,
        string $titre,
        string $description,
        string $image,
        string $dateDebut,
        string $dateFin
    ) {
        $this->id = $id;
        $this->titre = $titre;
        $this->description = $description;
        $this->image = $image;
        $this->dateDebut = $dateDebut;
        $this->dateFin = $dateFin;
    }

    public function ajouterTechnologie(Technologie $technologie): void
    {
        $this->technologies[] = $technologie;
    }

    public function getTechnologies(): array
    {
        return $this->technologies;
    }

    public function getTechnologiesNoms(): array
    {
        return array_map(fn($tech) => $tech->nom, $this->technologies);
    }
}
