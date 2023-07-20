<?php

namespace App\Http\Middleware;

use Closure;
use Session;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;


class alreadyLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        if(Session()->has('loginId') && (url('login')==$request->url() || (url('registration')==$request->url() )))
        {
            return back();
        }
        elseif (!(Session()->has('loginId') )&& ( url('login')==$request->url() || (url('registration')==$request->url()))){
            return redirect($request->url);
        }
        
        
        
        
    }
}
