<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\DeveloperService;

class PortfolioController extends Controller
{
    public function index(DeveloperService $developerService)
    {
        $developer = $developerService->getDeveloperProfile();

        return view('home', compact('developer'));
    }
}
