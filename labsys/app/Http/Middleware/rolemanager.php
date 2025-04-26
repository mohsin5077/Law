<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class rolemanager
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $role): Response
    {

        $userrole = Auth::user()->role;

        switch ($role) {

            case 'admin':
                if ($userrole == 0) {
                    return $next($request);
                }
                break;

            case 'technician':
                if ($userrole == 1) {
                    return $next($request);

 
                }
            case 'cpri':
                if ($userrole == 2) {
                    return $next($request);

                }

            case 'user':
                if ($userrole == 3) {
                    return $next($request);

                }
                break;

        }

        switch ($userrole) {
            case 0:
                return redirect()->route('admin');
            case 1:
                return redirect()->route('technician');
            case 2:
                return redirect()->route('cpri');
            case 3:
                return redirect()->route('dashboard');
        }
        return redirect()->route('login');
    }
}