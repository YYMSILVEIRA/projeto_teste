<?php

use Illuminate\Support\Facades\Auth;
use App\Models\UserAccessLog;


function logUserAccess($request, $pagina=" ")
{
    if (Auth::check()) {
        UserAccessLog::create([
            'user_id' => Auth::id(),
            'ip_address' => $request->ip(),
            'pagina' => $pagina,
        ]);
    }
}