<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class OnlyAdmin
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
            //    Auth::user;
            $utilisateur=auth()->user();
            if($utilisateur===null){
               abort(403);
            }
            elseif(auth()->user()->role->name!="admin"&&auth()->user()->role->name!="superAdmin"){
                abort(403);
            }
            return $next($request);
        }
    }

