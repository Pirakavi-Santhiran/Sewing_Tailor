<?php

namespace App\Http\Middleware;

use Closure;

class IsAdmin
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
        if(!$request->user()){
            return redirect('/login'); //when the admin not logged in & try to access the system via url copying
        }
        if($request->user()->checkAdmin()){
            return $next($request); //check whether the attempting user is an admin
        }
        return redirect()->back();
    }
}
