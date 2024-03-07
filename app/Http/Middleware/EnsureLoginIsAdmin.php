<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class EnsureLoginIsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Vérifie si l'utilisateur est authentifié et s'il est administrateur
        if (Auth::check() && Auth::user()->isAdmin) {
            return $next($request);
        }

        // Redirige l'utilisateur s'il n'est pas administrateur
        abort(403, "Accès interdit : Vous n'êtes pas administrateur"); 
    }
}
