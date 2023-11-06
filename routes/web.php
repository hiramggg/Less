<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SaludoController;
use App\Http\Controllers\SaludarController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/operaciones/{num1}/{num2}', function ($num1, $num2) {
    if (is_numeric($num1) && is_numeric($num2)) {
        $suma = $num1 + $num2;
        $resta = $num1 - $num2;
        $multi = $num1 * $num2;
        $divi = $num1 / $num2;

        $resultado = 'La suma es ' . '[' . $suma . ']' . '  la resta es ' . '[' . $resta . ']' . '  la multiplicación es  ' . '[' . $multi . ']' . '  la división es  ' . '[' . $divi . ']';
        
        return $resultado;
    } else {
        return "Los parámetros deben ser números.";
    }
})->where(['num1' => '[0-9]+', 'num2' => '[0-9]+']);

Route::get('/saludos/{nombre}/{apellido?}', function ($nombre, $apellido = null) {
    if (ctype_alpha($nombre) && ($apellido === null || ctype_alpha($apellido))) {
        $bienvenida = 'Hola ' . $nombre . ' ' . $apellido;
        return $bienvenida;
    } else {
        return "Los parámetros deben contener letras.";
    }
})->where(['nombre' => '[A-Za-z]+', 'apellido' => '[A-Za-z]*']);


Route::get('/bienvenida', [SaludoController::class, 'saludar']);

Route::get('/saludo/{nombre}', [SaludarController::class, 'saludar']);

