<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\UserAccessLog;
use Illuminate\Support\Facades\Auth;

class LogUserAccess
{
    public function handle(Request $request, Closure $next)
    {
        
        if (Auth::check()) {
            UserAccessLog::create([
                'user_id' => Auth::id(),
                'ip_address' => $request->ip(),
            ]);
        }

        return $next($request);
    }
}

