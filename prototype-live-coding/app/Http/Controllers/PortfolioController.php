<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\DeveloperService;

class PortfolioController extends Controller
{
    public function index(DeveloperService $developerService)
    {
        // نجيب المعلومات من الخدمة (service)
        $developer = $developerService->getDeveloperProfile();

        // نرسلها للواجهة (view)
        return view('home', compact('developer'));
    }
}
