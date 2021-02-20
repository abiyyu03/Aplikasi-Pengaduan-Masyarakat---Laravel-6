<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\{Pengaduan,Masyarakat,Administrator,Petugas,Tanggapan};
use Carbon\Carbon;
use PDF;

class AdministratorController extends Controller
{
	public function __construct()
	{
		return $this->middleware('admin');
	}
    public function index()
    {
        $data_pengaduan = Pengaduan::get();
        $data_masyarakat = Masyarakat::get(); 
    	return view('administrator.index',compact('data_pengaduan','data_masyarakat'));
    }
    
    //Bagian pengaduan
    public function detailpengaduan($id)
    {
        $detail_pengaduan = Pengaduan::with('masyarakat')->find($id);
        $data_tanggapan = Tanggapan::whereHas('pengaduan', function($query){
            $query->where('pengaduan_id',request()->route('id'));
        })->with('petugas')->first(); 
        return view('administrator.detailpengaduan',compact('detail_pengaduan','data_tanggapan')); 
    }
    public function pengaduan()
    {
    	$data_pengaduan = Pengaduan::with('masyarakat')->get();
    	$data_pengaduan = Pengaduan::paginate(10);
    	return view('administrator.pengaduan',compact('data_pengaduan'));
    }
    public function statusOnchange($id)
    {
        $status = Pengaduan::with('masyarakat')->find($id);
        $status->status = request()->get('status');
        $status->save();
        return redirect()->back();
    }
    public function destroy($id)
    {
        $status = Pengaduan::with('masyarakat')->find($id);
        $status->delete();
        return redirect()->back()->with('success','Data dihapus !'); 
    }

    //Bagian akun admin
    public function akun()
    {   
        $data_akun = Petugas::get();
        $data_akun = Petugas::paginate(10);
        return view('administrator.akun',compact('data_akun'));
    }
    public function destroyAkun($id)
    {
        $data_akun = Petugas::find($id);
        $data_akun->delete();
        return redirect()->back();
    }

    //akun masyarakat
    public function akunMasyarakat()
    { 
        $data_akunMasyarakat = Masyarakat::get();
        $data_akunMasyarakat = Masyarakat::paginate(5);
        return view('administrator.akunMasyarakat',compact('data_akunMasyarakat'));
    }
    public function destroyAkunMasyarakat($id)
    {
        $data_akunMasyarakat = Masyarakat::find($id);
        $data_akunMasyarakat->delete();
        return redirect()->back();
    }

    //ranah PDF
    public function pdf()
    {
        $data_pengaduan = Pengaduan::with('masyarakat')->get();
        $pdf = PDF::loadView('administrator.pdf',compact('data_pengaduan'))->setPaper('a4','landscape');
        return $pdf->stream();
    }

    public function detailpdf($id)
    {
        $data_pengaduan = Pengaduan::with('masyarakat')->find($id);
        $data_tanggapan = Tanggapan::whereHas('pengaduan', function($query){
            $query->where('pengaduan_id',request()->route('id'));
        })->with('petugas')->first(); 
        $pdf = PDF::loadView('administrator.detailpdf',compact('data_pengaduan','data_tanggapan'));
        return $pdf->download();
    }
}
