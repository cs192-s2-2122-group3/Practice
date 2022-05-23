<?php

namespace App\Http\Middleware;

use Closure, Auth;
use Illuminate\Http\Request;

class Access
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, ... $roles)
    {
        $user = Auth::user();

        foreach($roles as $role)
            if($user->hasRole($role)) return $next($request);
        
        return abort(401);
    }
}
