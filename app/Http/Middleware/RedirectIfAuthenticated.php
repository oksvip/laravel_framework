<?php

namespace App\Http\Middleware;

use App\Helpers\AdminStatus;
use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
            return redirect(route('admin.index'))
                ->with('status-code', AdminStatus::ALREADY_LOGIN_CODE)
                ->with('warning', AdminStatus::ALREADY_LOGIN_MESSAGE);
        }

        return $next($request);
    }
}
