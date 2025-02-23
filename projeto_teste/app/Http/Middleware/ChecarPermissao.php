<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\DB;

class ChecarPermissao
{
    public function handle(Request $request, Closure $next, $permission)
    {   

        

        if (!auth()->user() || !auth()->user()->permissions()->where('nome', $permission)->exists()) {
            abort(403, 'Acesso negado');
        }

        
        return $next($request);
    }
}
