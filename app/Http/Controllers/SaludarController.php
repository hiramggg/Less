<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaludarController extends Controller
{
    public function saludar($nombre)
    {
       
        if (preg_match('/^[A-Za-z]+$/', $nombre)) {
            return view('saludo', ['nombre' => $nombre]);
        } else {
            return "El nombre debe contener solo letras.";
        }
    }
}

