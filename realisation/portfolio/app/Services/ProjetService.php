<?php

namespace App\Services;

use App\Classes\Projet;

class ProjetService
{
    private array $projets = [];
    private TechnologieService $technologieService;

    public function __construct(TechnologieService $technologieService)
    {
        $this->technologieService = $technologieService;
        $this->initializeProjets();
    }

    /**
     * Initialize all projects with their technologies
     */
    private function initializeProjets(): void
    {
        // Project 1 - Mobility Manager
        $projet1 = new Projet(
            1,
            'Mobility Manager',
            'Staff mobility management platform with real-time tracking for Rguigue Transport',
            'assets/MobilityManager.png',
            'January 2024',
            'March 2024'
        );
        $this->addTechnologiesToProjet($projet1, [1, 2, 3]); // PHP, MySQL, JavaScript
        $this->projets[] = $projet1;

        // Project 2 - Mudart Shop
        $projet2 = new Projet(
            2,
            'Mudart Shop',
            'Full-featured e-commerce platform with WooCommerce and payment integration',
            'assets/MudartShop.png',
            'April 2024',
            'June 2024'
        );
        $this->addTechnologiesToProjet($projet2, [5, 6, 1]); // WordPress, WooCommerce, PHP
        $this->projets[] = $projet2;

        // Project 3 - Gaming Tournament Landing
        $projet3 = new Projet(
            3,
            'Gaming Tournament',
            'Modern landing page design for gaming tournaments at Solicode',
            'assets/gamingLanding.png',
            'September 2024',
            'October 2024'
        );
        $this->addTechnologiesToProjet($projet3, [7, 8, 9]); // Figma, UI Design, Prototyping
        $this->projets[] = $projet3;

        // Project 4 - INOVAFY Landing
        $projet4 = new Projet(
            4,
            'INOVAFY Landing',
            'Brand landing page design for startup company with modern aesthetics',
            'assets/INOVAFYLanding.png',
            'July 2024',
            'August 2024'
        );
        $this->addTechnologiesToProjet($projet4, [7, 10, 11]); // Figma, Branding, Web Design
        $this->projets[] = $projet4;

        // Project 5 - Personal Portfolio
        $projet5 = new Projet(
            5,
            'Personal Portfolio',
            'Responsive portfolio website with modern design - previous iteration',
            'assets/PersonalPortfolio.png',
            'February 2024',
            'March 2024'
        );
        $this->addTechnologiesToProjet($projet5, [12, 13, 3]); // HTML5, CSS3, JavaScript
        $this->projets[] = $projet5;

        // Project 6 - NMedical Plus
        $projet6 = new Projet(
            6,
            'NMedical Plus',
            'E-commerce platform for medical equipment and supplies',
            'assets/Nmedicalp.png',
            'October 2024',
            'December 2024'
        );
        $this->addTechnologiesToProjet($projet6, [5, 6, 14]); // WordPress, WooCommerce, Custom Theme
        $this->projets[] = $projet6;

        // Project 7 - Ladrissi.com
        $projet7 = new Projet(
            7,
            'Ladrissi.com',
            'Professional business website with modern design and custom features',
            'assets/LadrissiCom.png',
            'August 2024',
            'September 2024'
        );
        $this->addTechnologiesToProjet($projet7, [5, 1, 14]); // WordPress, PHP, Custom Theme
        $this->projets[] = $projet7;

        // Project 8 - Ladrissi360
        $projet8 = new Projet(
            8,
            'Ladrissi360',
            '360-degree virtual tour platform with interactive panoramic views',
            'assets/Ladrissi360.png',
            'November 2024',
            'January 2025'
        );
        $this->addTechnologiesToProjet($projet8, [3, 15, 12]); // JavaScript, Three.js, HTML5
        $this->projets[] = $projet8;

        // Project 9 - Projecteurlogo
        $projet9 = new Projet(
            9,
            'Projecteurlogo',
            'Modern Next.js logo design platform with TypeScript',
            'assets/ProjectorLogo.png',
            'December 2024',
            'January 2025'
        );
        $this->addTechnologiesToProjet($projet9, [16, 17, 18]); // Next.js, React, TypeScript
        $this->projets[] = $projet9;
    }

    /**
     * Add technologies to a project by their IDs
     */
    private function addTechnologiesToProjet(Projet $projet, array $technologieIds): void
    {
        $technologies = $this->technologieService->getTechnologiesByIds($technologieIds);
        foreach ($technologies as $technologie) {
            $projet->ajouterTechnologie($technologie);
        }
    }

    /**
     * Get all projects
     */
    public function getAllProjets(): array
    {
        return $this->projets;
    }

    /**
     * Get a project by ID
     */
    public function getProjetById(int $id): ?Projet
    {
        foreach ($this->projets as $projet) {
            if ($projet->id === $id) {
                return $projet;
            }
        }
        return null;
    }

    /**
     * Get projects by technology ID
     */
    public function getProjetsByTechnologie(int $technologieId): array
    {
        $result = [];
        foreach ($this->projets as $projet) {
            foreach ($projet->getTechnologies() as $tech) {
                if ($tech->id === $technologieId) {
                    $result[] = $projet;
                    break;
                }
            }
        }
        return $result;
    }

    /**
     * Get the count of projects
     */
    public function getProjetsCount(): int
    {
        return count($this->projets);
    }
}
