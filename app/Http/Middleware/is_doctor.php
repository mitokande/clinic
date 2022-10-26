<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class is_doctor
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
        if(!auth()->guard('doctors')->check() || !auth()->guard('doctors')->user()){
            return redirect()->route('doctor.login');
        }
        return $next($request);
    }
}
