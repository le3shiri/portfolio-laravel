<?php

namespace App\Http\Controllers;

use App\Services\PortfolioService;

class PortfolioController extends Controller
{
    private PortfolioService $portfolioService;

    /**
     * Constructor with dependency injection
     * Laravel's service container automatically resolves dependencies
     */
    public function __construct(PortfolioService $portfolioService)
    {
        $this->portfolioService = $portfolioService;
    }

    /**
     * Display the home page
     */
    public function index()
    {
        $developer = $this->portfolioService->getDeveloper();
        return view('index', compact('developer'));
    }

    /**
     * Display the about page
     */
    public function about()
    {
        $developer = $this->portfolioService->getDeveloper();
        $technologies = $this->portfolioService->getTechnologies();
        return view('about', compact('developer', 'technologies'));
    }

    /**
     * Display the portfolio page
     */
    public function portfolio()
    {
        $developer = $this->portfolioService->getDeveloper();
        $projets = $this->portfolioService->getProjets();
        return view('portfolio', compact('developer', 'projets'));
    }

    /**
     * Display a specific project detail
     */
    public function projectDetail($id)
    {
        $developer = $this->portfolioService->getDeveloper();
        $projet = $this->portfolioService->getProjetById($id);
        
        if (!$projet) {
            abort(404);
        }
        
        return view('project-detail', compact('developer', 'projet'));
    }
}
