<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RoleRedirect
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (auth()->check()){
            $user = auth()->user();

            if ($user->hasRole('admin')){
                return redirect()->route('admin.dashboard');
            } elseif ($user->hasRole('walikelas')){
                return redirect()->route('walikelas.dashboard');
            } elseif ($user->hasRole('guru_att')){
                return redirect()->route('guru_att.dashboard');
            }
            
        }
        return $next($request);
    }
}
