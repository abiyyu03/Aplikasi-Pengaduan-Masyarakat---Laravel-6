<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\{Masyarakat,Petugas, Administrator};

class RegisterController extends Controller
{

    public function registerMasyarakat()
    {
    	return view('masyarakat.auth.register');
    }

    public function storeMasyarakat(Request $request)
    {
        $data_masyarakat = $request->validate([ 
            'nik' => 'required|unique:masyarakats|numeric|min:10', 
            'nama' => 'required', 
            'username' => 'required|unique:masyarakats', 
            'password' => 'required|min:6',
            'telp' => 'required|numeric'
        ]);  
        $data_masyarakat = new Masyarakat();
        $data_masyarakat->nik = $request->get('nik');
        $data_masyarakat->nama = $request->get('nama');
        $data_masyarakat->username = $request->get('username');
        $data_masyarakat->password = bcrypt($request->get('password'));
        $data_masyarakat->telp = $request->get('telp');
        $data_masyarakat->save();
        return redirect()->to('/daftar')->with('success','Data kamu berhasil disimpan, silahkan login !'); 
    }
    

    public function registerAdmin()
    {
        return view('administrator.register');
    }

    public function storeAdmin(Request $request)
    {        
        $data_petugas = $request->validate([ 
            'nama_petugas' => 'required',
            'username' => 'required|unique:petugas',
            'password' => 'required|min:6',
            'telp' => 'required|numeric',
            'level' => 'required|not_in:0'
        ]); 
        $data_petugas = new Petugas();
        $data_petugas->nama_petugas = $request->get('nama_petugas');
        $data_petugas->level = $request->get('level');
        $data_petugas->username = $request->get('username');
        $data_petugas->password = bcrypt($request->get('password'));
        $data_petugas->telp = $request->get('telp');
        $data_petugas->save();
        return redirect()->to('/administrator/akun')->with('success','Akun sukses disimpan !'); 
        
    }
}
