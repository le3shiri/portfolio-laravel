<?php

namespace App\Services;

use App\Classes\Developer;
use App\Classes\Projet;

class DeveloperService
{
    private ?Developer $developer = null;

    public function __construct()
    {
        $this->initializeDeveloper();
    }

    /**
     * Initialize the developer with default data
     */
    private function initializeDeveloper(): void
    {
        $this->developer = new Developer(
            'El Achiri',
            'Aymane',
            'Creative Web Developer & UI/UX Designer',
            "I'm a 20-year-old self-taught full-stack developer from Morocco who loves turning ideas into clean, functional code. With experience building web applications like staff mobility platforms, e-commerce sites, and task managers, I specialize in creating solutions that actually help people.",
            'satayman41@gmail.com',
            '+212 707 40 74 25',
            'Tangier, Morocco',
            'assets/banner-man.png'
        );
    }

    /**
     * Get the developer
     */
    public function getDeveloper(): Developer
    {
        return $this->developer;
    }

    /**
     * Add a project to the developer
     */
    public function addProjetToDeveloper(Projet $projet): void
    {
        $this->developer->ajouterProjet($projet);
    }

    /**
     * Get all projects of the developer
     */
    public function getDeveloperProjets(): array
    {
        return $this->developer->getProjets();
    }

    /**
     * Get developer's full name
     */
    public function getDeveloperFullName(): string
    {
        return $this->developer->getNomComplet();
    }
}
