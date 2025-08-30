<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    /**
     * Muestra el dashboard de la aplicación.
     */
    public function index(): View
    {
        $user = Auth::user();
        return view('dashboard', [
            'user' => $user
        ]);
    }
}