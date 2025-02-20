<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
{
    $role = auth()->user()->role;

    switch ($role) {
        case 'admin':
            return redirect()->route('admin.dashboard');
        case 'pasante':
            return redirect()->route('pasante.dashboard');
        case 'aprendiz':
            return redirect()->route('aprendiz.dashboard');
        default:
            return view('home'); // Si no tiene un rol específico
    }
}
}
