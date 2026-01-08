<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\VerifyAge;

// Ruta pública sin restricciones
Route::get('/', function () {
    return '¡Bienvenido/a a la web de Ares!';
});

// Ruta para mayores de 18
Route::get('/adultos', function () {
    return '¡Felicidades! Eres mayor de 18 años.';
})->middleware(VerifyAge::class);