<?php

namespace App\Http\Controllers;

use Inertia\Inertia;

class HomeController extends Controller
{
    public function index()
    {
        // Renvoyer la vue Inertia
        return Inertia::render('Home', [
            'message' => 'Bienvenue sur la page d\'accueil',
        ]);
    }
}
