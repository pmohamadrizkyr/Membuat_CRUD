<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class DataMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // dd('Data Middleware Aktif');
        if(time() % 2 == 0){
            return redirect('/table-karyawan');
        }
        return $next($request);
    }
}
