<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\VerifyAge;

Route::get('/', function () {
    return '¡Bienvenido/a a la web de Ares!';
});

Route::get('/adultos', function () {
    return '¡Felicidades! Eres mayor de 18 años.';
})->middleware(VerifyAge::class);