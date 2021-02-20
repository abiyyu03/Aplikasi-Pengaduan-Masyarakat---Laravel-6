<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use App\Administrator;

class Admin
{
    private $auth;
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        if(!Auth()->guard('admin')->check())
        {
            return redirect('/administrator/login');
        } 
        if(!Auth()->guard('admin')->user()->level === "admin")
        {
            return redirect('/administrator/login'); 
        }
        return $next($request);
        // $this->auth = auth()->guard('admin')->user() ? (auth()->guard('admin')->user()->level === 'admin') : false;
        
        // if($this->auth === 'admin')
        // {
        //     return $next($request); 
        // } else {
        //     return redirect('admin/login');
        // }
    }
}
