<?php

namespace App\Http\Middleware;
//use Illuminate\Http\Middleware\Auth;

use Closure;
use Illuminate\Http\Request;

//namespace App\Http\Controllers\Auth;

//use App\Http\Controllers\Controller;
//use App\Models\GrantAccess;
// use App\Models\Member;
//use App\Providers\RouteServiceProvider;
//use Illuminate\Foundation\Auth\AuthenticatesUsers;
//use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
//use 'Illuminate\Middleware\Auth';

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(Auth::check()){
            // role ==1 for admin and ==0 for other users
            if(Auth::user()->role ==1){
                return $next($request);
            }else{
                return redirect('/home')->with('message','Access Denied as you are not Admin!');
            }
        }else{
            return redirect('/login')->with('message','First  You need to login!');
        }
        return $next($request);
    }
}
