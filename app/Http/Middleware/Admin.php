<?php

namespace App\Http\Middleware;

use Closure;
use Redirect;
use Illuminate\Contracts\Auth\Guard;
use Auth;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $user = \App\User::find(Auth::user()->id);
        if($user->admin()){
            return $next($request);
        }else{
            abort(401);
        }
    
    }
}
