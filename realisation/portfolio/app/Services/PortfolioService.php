<?php

namespace App\Services;

use App\Classes\Developer;
use App\Classes\Projet;

/**
 * PortfolioService acts as a coordinator/facade
 * It delegates responsibilities to specialized services
 */
class PortfolioService
{
    private DeveloperService $developerService;
    private ProjetService $projetService;
    private TechnologieService $technologieService;

    public function __construct(
        DeveloperService $developerService,
        ProjetService $projetService,
        TechnologieService $technologieService
    ) {
        $this->developerService = $developerService;
        $this->projetService = $projetService;
        $this->technologieService = $technologieService;
        
        // Link projects to developer
        $this->linkProjectsToDeveloper();
    }

    /**
     * Link all projects to the developer
     */
    private function linkProjectsToDeveloper(): void
    {
        $projets = $this->projetService->getAllProjets();
        foreach ($projets as $projet) {
            $this->developerService->addProjetToDeveloper($projet);
        }
    }

    /**
     * Get the developer
     */
    public function getDeveloper(): Developer
    {
        return $this->developerService->getDeveloper();
    }

    /**
     * Get all projects
     */
    public function getProjets(): array
    {
        return $this->projetService->getAllProjets();
    }

    /**
     * Get a project by ID
     */
    public function getProjetById(int $id): ?Projet
    {
        return $this->projetService->getProjetById($id);
    }

    /**
     * Get all technologies
     */
    public function getTechnologies(): array
    {
        return $this->technologieService->getAllTechnologies();
    }

    /**
     * Get projects by technology
     */
    public function getProjetsByTechnologie(int $technologieId): array
    {
        return $this->projetService->getProjetsByTechnologie($technologieId);
    }

    /**
     * Get developer's full name
     */
    public function getDeveloperFullName(): string
    {
        return $this->developerService->getDeveloperFullName();
    }

    /**
     * Get total number of projects
     */
    public function getProjetsCount(): int
    {
        return $this->projetService->getProjetsCount();
    }
}
