<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class EnsureIsAdmin
{
    public function handle(Request $request, Closure $next): Response
    {
        // Verifica autenticação e papel
        if (!auth()->check() || !auth()->user()->isAdmin()) {
            abort(403, 'Acesso restrito a administradores.');
        }
        return $next($request); // continua a requisição
    }
}
