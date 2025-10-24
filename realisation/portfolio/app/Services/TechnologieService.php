<?php

namespace App\Services;

use App\Classes\Technologie;

class TechnologieService
{
    private array $technologies = [];

    public function __construct()
    {
        $this->initializeTechnologies();
    }

    /**
     * Initialize all technologies
     */
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

    /**
     * Get all technologies
     */
    public function getAllTechnologies(): array
    {
        return $this->technologies;
    }

    /**
     * Get a technology by ID
     */
    public function getTechnologieById(int $id): ?Technologie
    {
        return $this->technologies[$id] ?? null;
    }

    /**
     * Get multiple technologies by IDs
     */
    public function getTechnologiesByIds(array $ids): array
    {
        $technologies = [];
        foreach ($ids as $id) {
            if (isset($this->technologies[$id])) {
                $technologies[] = $this->technologies[$id];
            }
        }
        return $technologies;
    }
}
