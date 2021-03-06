<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Support\Facades\Auth;

class AdminRedirectIfAuthenticated
{
    /**
     * The Guard implementation.
     *
     * @var Guard
     */
 /*   protected $auth;*/

    /**
     * Create a new filter instance.
     *
     * @param  Guard  $auth
     * @return void
     */
/*    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }*/

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(Auth::user()->check()){
            return back();
        }

        if(Auth::other()->check()){
            return back();
        }

        if (Auth::admin()->check()) {
            return redirect('admindashboard');
        }

        return $next($request);
    }
}
