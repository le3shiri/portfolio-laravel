<?php

namespace App\Http\Controllers;

use App\Services\PortfolioService;

class PortfolioController extends Controller
{
    private PortfolioService $portfolioService;

    public function __construct()
    {
        $this->portfolioService = new PortfolioService();
    }

    public function index()
    {
        $developer = $this->portfolioService->getDeveloper();
        return view('index', compact('developer'));
    }

    public function about()
    {
        $developer = $this->portfolioService->getDeveloper();
        $technologies = $this->portfolioService->getTechnologies();
        return view('about', compact('developer', 'technologies'));
    }

    public function portfolio()
    {
        $developer = $this->portfolioService->getDeveloper();
        $projets = $this->portfolioService->getProjets();
        return view('portfolio', compact('developer', 'projets'));
    }

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
