<?php

namespace App\Http\Middleware;

use Closure;

use Illuminate\Contracts\Auth\Guard;
use Illuminate\Support\Facades\Auth;

class OtherAuthenticate
{
    /**
     * The Guard implementation.
     *
     * @var Guard
     */
/*    protected $auth;*/

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
        if(\Auth::admin()->check()){
            return back();
        }

        if(\Auth::user()->check()){
            return back();
        }

        if (Auth::other()->guest()) {
            if ($request->ajax()) {
                return response('Unauthorized.', 401);
            } else {
                return redirect()->guest('other/login');
            }
        }

        return $next($request);
    }
}
