<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (auth()->user()->is_super_admin || auth()->user()->roles_user()->where('role', 2)->first() !== null || auth()->user()->roles_user()->where('role', 3)->first() !== null || auth()->user()->roles_user()->where('role', 1)->first() === null) {
            return $next($request);
        } else {
            return redirect(route('dashboard.index'))->with('error', 'You have not admin access');
        }
    }
}
