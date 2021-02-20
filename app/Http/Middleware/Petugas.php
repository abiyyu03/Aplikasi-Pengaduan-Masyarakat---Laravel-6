<?php

namespace App\Http\Middleware;

use Closure; 

class Petugas
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    { 
        if(!Auth()->guard('petugas')->check())
        {
            return redirect('/petugas/login');
        }

        if(!Auth()->guard('petugas')->user()->level === "petugas")
        {
            return redirect('/petugas/login'); 
        }

        return $next($request); 
    //     $this->auth = auth()->guard('petugas')->user() ? (auth()->guard('petugas')->user()->level === 'petugas') : false;
        
    //     if($this->auth === 'petugas')
    //     {
    //         return $next($request); 
    //     } else {
    //         return redirect('petugas/login');
    //     }
    }
}
