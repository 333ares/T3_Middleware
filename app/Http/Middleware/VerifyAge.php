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
        $edad = $request->query('edad');
        $edadNumero = (int) $edad;

        if ($edadNumero <= 0) {
            return response('La edad debe ser un número mayor de 0.', 400);
        }

        
        return $next($request);
    }
}
