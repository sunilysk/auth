<?php

namespace App\Http\Middleware;

use Closure;

use Illuminate\Contracts\Auth\Guard;
use Illuminate\Support\Facades\Auth;

class AdminAuthenticate
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
        if(\Auth::user()->check()){
            return back();
        }

        if(\Auth::other()->check()){
            return back();
        }

        if (Auth::admin()->guest()) {
            if ($request->ajax()) {
                return response('Unauthorized.', 401);
            } else {
                return redirect()->guest('admin/login');
            }
        }

        return $next($request);
    }
}
