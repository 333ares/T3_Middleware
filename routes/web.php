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

/* 
Para hacer pruebas de las rutas ponemos en la url: 
1. Edad inválida: http://127.0.0.1:8000/adultos?edad=0 
2. Menor de edad: http://127.0.0.1:8000/adultos?edad=10
3. Mayor de edad: http://127.0.0.1:8000/adultos?edad=18
4. Ruta publica: http://127.0.0.1:8000/
*/