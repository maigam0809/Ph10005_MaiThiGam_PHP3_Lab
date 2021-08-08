<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class CheckAdminMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if(Auth::user()->role !== config('common.users.role.admin')){
            return redirect('login')->with('Hãy đăng nhập vào admin');
        }

        return $next($request);
    }
}
