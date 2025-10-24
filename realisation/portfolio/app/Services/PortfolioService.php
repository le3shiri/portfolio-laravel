<?php

namespace App\Services;

use App\Classes\Developer;
use App\Classes\Projet;
use App\Classes\Technologie;

class PortfolioService
{
    private Developer $developer;
    private array $projets = [];
    private array $technologies = [];

    public function __construct()
    {
        $this->initializeTechnologies();
        $this->initializeDeveloper();
        $this->initializeProjets();
    }

    private function initializeTechnologies(): void
    {
        $this->technologies = [
            1 => new Technologie(1, 'PHP'),
            2 => new Technologie(2, 'MySQL'),
            3 => new Technologie(3, 'JavaScript'),
            4 => new Technologie(4, 'Bootstrap'),
            5 => new Technologie(5, 'WordPress'),
            6 => new Technologie(6, 'WooCommerce'),
            7 => new Technologie(7, 'Figma'),
            8 => new Technologie(8, 'UI Design'),
            9 => new Technologie(9, 'Prototyping'),
            10 => new Technologie(10, 'Branding'),
            11 => new Technologie(11, 'Web Design'),
            12 => new Technologie(12, 'HTML5'),
            13 => new Technologie(13, 'CSS3'),
            14 => new Technologie(14, 'Custom Theme'),
            15 => new Technologie(15, 'Three.js'),
            16 => new Technologie(16, 'Next.js'),
            17 => new Technologie(17, 'React'),
            18 => new Technologie(18, 'TypeScript'),
        ];
    }

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
        $projet1->ajouterTechnologie($this->technologies[1]);  // PHP
        $projet1->ajouterTechnologie($this->technologies[2]);  // MySQL
        $projet1->ajouterTechnologie($this->technologies[3]);  // JavaScript
        $this->developer->ajouterProjet($projet1);
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
        $projet2->ajouterTechnologie($this->technologies[5]);  // WordPress
        $projet2->ajouterTechnologie($this->technologies[6]);  // WooCommerce
        $projet2->ajouterTechnologie($this->technologies[1]);  // PHP
        $this->developer->ajouterProjet($projet2);
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
        $projet3->ajouterTechnologie($this->technologies[7]);  // Figma
        $projet3->ajouterTechnologie($this->technologies[8]);  // UI Design
        $projet3->ajouterTechnologie($this->technologies[9]);  // Prototyping
        $this->developer->ajouterProjet($projet3);
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
        $projet4->ajouterTechnologie($this->technologies[7]);   // Figma
        $projet4->ajouterTechnologie($this->technologies[10]);  // Branding
        $projet4->ajouterTechnologie($this->technologies[11]);  // Web Design
        $this->developer->ajouterProjet($projet4);
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
        $projet5->ajouterTechnologie($this->technologies[12]);  // HTML5
        $projet5->ajouterTechnologie($this->technologies[13]);  // CSS3
        $projet5->ajouterTechnologie($this->technologies[3]);   // JavaScript
        $this->developer->ajouterProjet($projet5);
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
        $projet6->ajouterTechnologie($this->technologies[5]);   // WordPress
        $projet6->ajouterTechnologie($this->technologies[6]);   // WooCommerce
        $projet6->ajouterTechnologie($this->technologies[14]);  // Custom Theme
        $this->developer->ajouterProjet($projet6);
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
        $projet7->ajouterTechnologie($this->technologies[5]);   // WordPress
        $projet7->ajouterTechnologie($this->technologies[1]);   // PHP
        $projet7->ajouterTechnologie($this->technologies[14]);  // Custom Theme
        $this->developer->ajouterProjet($projet7);
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
        $projet8->ajouterTechnologie($this->technologies[3]);   // JavaScript
        $projet8->ajouterTechnologie($this->technologies[15]);  // Three.js
        $projet8->ajouterTechnologie($this->technologies[12]);  // HTML5
        $this->developer->ajouterProjet($projet8);
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
        $projet9->ajouterTechnologie($this->technologies[16]);  // Next.js
        $projet9->ajouterTechnologie($this->technologies[17]);  // React
        $projet9->ajouterTechnologie($this->technologies[18]);  // TypeScript
        $this->developer->ajouterProjet($projet9);
        $this->projets[] = $projet9;
    }

    public function getDeveloper(): Developer
    {
        return $this->developer;
    }

    public function getProjets(): array
    {
        return $this->projets;
    }

    public function getProjetById(int $id): ?Projet
    {
        foreach ($this->projets as $projet) {
            if ($projet->id === $id) {
                return $projet;
            }
        }
        return null;
    }

    public function getTechnologies(): array
    {
        return $this->technologies;
    }
}
