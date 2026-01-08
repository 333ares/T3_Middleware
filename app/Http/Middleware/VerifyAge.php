<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class VerifyAge
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $edad = $request->query('edad'); // Obtenemos la edad de la URL
        $edadNumero = (int) $edad; // Convertimos a número entero

        if ($edadNumero <= 0) { // Verificamos si es un número válido
            return response('La edad debe ser un número mayor de 0.', 400);
        }

        if ($edadNumero < 18) { // Verificamos si es mayor de 18
            return response('Acceso denegado. Debes ser mayor de 18 años.', 403);
        }

        return $next($request); // Si pasa el control, continuamos
    }
}
