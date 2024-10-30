<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ValidUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next,string $role): Response
    {
        
       if(Auth::user()->role == $role){
        echo " welcome $role";
        return $next($request);

       }elseif (Auth::user()->role == "reader") {
           return redirect()->route('user');
       }else{
        return redirect()->route('login');
       }
       
    }

    // public function terminate(){//this is terminating function it works after response function
    //     echo "<h3 class='text-primary'>hello</h3>";
    // }
}
