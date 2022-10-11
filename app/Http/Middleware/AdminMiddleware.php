<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Closure;
use Illuminate\Http\Request;
use App\Models\User;
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
       // dd(Auth::check());
        if(Auth::check())
        {
            if(Auth::user()->role == 1)
            {
                //dd('hello');               
                 return $next($request);
              
            }
            else
            {
                //dd('hai');
                return redirect('login')->with('access denied as Admin');
            }
        }
        else
        {
            //dd('welcome');
            return redirect('login')->with('login to access the info');
        }
        return $next($request);
    }
}
