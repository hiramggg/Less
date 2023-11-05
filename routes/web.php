<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SaludoController;

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

Route::get('/operaciones/{num1}/{num2}', function (string $num1, string $num2) {
    $suma = $num1 + $num2;
    $resta = $num1 - $num2;
    $multi = $num1 * $num2;
    $divi = $num1 / $num2;

    $resultado = 'La suma es '. '['. $suma .']'. '  la resta es ' .'['. $resta .']'. '  la multiplicacion es  '.'['. $multi .']'. '  la divicion es  '.'['. $divi .']';
    
    return $resultado;
});

Route::get('/saludos/{nombre}/{apellido?}', function (string $nombre, string $apellido='') {

    $bienvenida = 'Hola ' . $nombre  .' ' . $apellido ;
   return $bienvenida;
});

Route::get('/bienvenida', [SaludoController::class, 'saludar']);



