<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use App\{Pengaduan,Masyarakat,Petugas,Tanggapan};
use Carbon\Carbon;

class PetugasController extends Controller
{
	public function __construct()
	{
		return $this->middleware('petugas');
	}
    public function index()
    {
        $data_pengaduan = Pengaduan::get();
        $data_masyarakat = Masyarakat::get(); 
        return view('petugas.index',compact('data_pengaduan','data_masyarakat'));
    }  

    //halaman untuk pengaduan
    public function pengaduan()
    {  
    	$data_pengaduan = Pengaduan::with('masyarakat')->get();
        $data_pengaduan = Pengaduan::paginate(10);
        return view('petugas.pengaduan',compact('data_pengaduan'));
    } 
    public function detailpengaduan($id)
    { 
        $detail_pengaduan = Pengaduan::with('masyarakat')->find($id);
        $data_tanggapan = Tanggapan::whereHas('pengaduan', function($query){
            $query->where('pengaduan_id',request()->route('id'));
        })->with('petugas')->first(); 

        // $data_tanggapan = Pengaduan::find(request()->route('id'))->tanggapan()->with('petugas')->first();  
        return view('petugas.detailpengaduan',compact('detail_pengaduan','data_tanggapan'));
    }

    //ubah status dengan dropdown
    public function statusOnchange($id)
    {
        $status = Pengaduan::with('masyarakat')->find($id);
        $status->status = request()->get('status');
        $status->save();
        return redirect()->back();
    }
    //hapus data
    public function destroy($id)
    {
        $status = Pengaduan::with('masyarakat')->find($id);
        $status->delete();
        return redirect()->back()->with('success','Data dihapus !'); 
    } 

    public function akun()
    {
        $data_akun = Petugas::get();
        $data_akun = Petugas::paginate(10);
        return view('petugas.akun',compact('data_akun'));
    }
    public function destroyAkun($id)
    {
        $data_akun = Petugas::find($id);
        $data_akun->delete();
        return redirect()->back();
    }
    public function akunMasyarakat()
    {
        $data_akunMasyarakat = Masyarakat::get();
        $data_akunMasyarakat = Masyarakat::paginate(10);
        return view('petugas.akunMasyarakat',compact('data_akunMasyarakat'));
    }
    public function destroyAkunMasyarakat($id)
    {
        $data_akunMasyarakat = Masyarakat::find($id);
        $data_akunMasyarakat->delete();
        return redirect()->back()->with('success','Data berhasil dihapus !');
    }
}
