<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\{Administrator,Petugas,Masyarakat};

class LoginController extends Controller
{
	//Auth for masyarakat
    public function loginFormMasyarakat()
    {
    	return view('masyarakat.auth.login');
    }

    public function loginMasyarakat()
    {
    	// $auth = request()->validate([
     //        'username' => 'required',
     //        'password' => 'required'
     //    ]); 
        $auth = request()->only('username','password');
    	if(Auth()->guard('masyarakat')->attempt($auth))
    	{
    		return redirect()->to('/');
    	} else {
            return redirect()->to('/login');
        }
    }

    //Auth for Admin
    public function loginFormAdmin()
    {
    	return view('administrator.auth.login');
    }

    public function loginAdmin()
    {
		$auth = request()->only('username','password');
        if(Auth()->guard('admin')->attempt($auth))
        {
            if(Auth()->guard('admin')->user()->level === "admin")
            {
                return redirect()->to('/administrator'); 
            } else {
                return redirect()->to('/administrator/login');  
            }
        } else {
            return redirect()->back();
        }
    }
    public function logoutAdmin()
    {

        Auth()->guard('admin')->logout();
        return redirect()->route('administrator.login');
    }

    public function logoutMasyarakat()
    {
        Auth()->guard('masyarakat')->logout();
        return redirect('/');
    }

    //Auth for Petugas
    public function loginFormPetugas()
    { 
        return view('petugas.auth.login'); 
    }

    public function loginPetugas(Request $request)
    {
		$auth = $request->only('username','password');
        if(Auth()->guard('petugas')->attempt($auth))
        {  
            if(Auth()->guard('petugas')->user()->level === "petugas")
            {
                return redirect('/petugas'); 
            } else {
                return redirect()->to('/petugas/login'); 
            }
        } else {
            return redirect()->to('/petugas/login');
        }
    }
    public function logoutPetugas()
    {
        Auth()->guard('petugas')->logout();
        return redirect()->route('petugas.login');

    }
}
