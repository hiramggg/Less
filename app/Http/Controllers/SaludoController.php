<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaludoController extends Controller
{
    public function saludar()
    {
        $nombreVisitante = 'Hiram'; 

        return view('bienvenida', ['nombre' => $nombreVisitante]);
    }
}
