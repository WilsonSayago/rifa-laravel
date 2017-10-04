<?php

namespace App\Http\Middleware;
use Closure;
use Illuminate\Contracts\Auth\Guard;
use Session;
use Auth;

class Cliente
{
    protected $auth;

    public function __contruct(Guard $auth){
        $this->auth = $auth;
    }
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */

    public function handle($request, Closure $next)
    {
        if(Auth::user()->type != 'cliente'){
            return redirect()->to('/sistema');
        }
        return $next($request);
    }
}
