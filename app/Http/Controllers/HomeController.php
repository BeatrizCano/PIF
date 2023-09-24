<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;


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
    if (auth()->check()) {
        if (auth()->user()->isAdmin()) {
            return view('home'); // Vista para administradores
        } else {
            return view('welcome'); // Vista para usuarios normales
        }
    }

    return view('auth.login'); // Si no está autenticado, redirige al login
}

}
