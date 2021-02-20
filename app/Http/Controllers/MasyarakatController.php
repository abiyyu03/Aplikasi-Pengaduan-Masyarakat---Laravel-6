<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\{Masyarakat,Pengaduan,Tanggapan,Petugas};
use Carbon\Carbon;
use File;
use Image;

class MasyarakatController extends Controller
{ 
    public function index()
    {
    	return view('masyarakat.index');
    }

    public function create()
    { 
    	return view('masyarakat.create');
    }

    public function store(Request $request)
    {   
        $foto = $request->file('foto'); 
        $filename = $foto->getClientOriginalName();

        $foto->move(public_path().'/images/',$filename);
        $foto_compress = Image::make(public_path().'/images/'.$filename);
        $foto_compress->fit(240,120);
        $foto_compress->save(public_path('/img/'.$filename));
        unlink(public_path('/images/'.$filename));

        $data_pengaduan = new Pengaduan();
        $data_pengaduan->tanggal_pengaduan = $request->get('tanggal_pengaduan');
        $data_pengaduan->judul_laporan = $request->get('judul_laporan');
        $data_pengaduan->isi_laporan = $request->get('isi_laporan'); 
        $data_pengaduan->foto = $filename;
        $data_pengaduan->masyarakat_nik =  Auth()->guard('masyarakat')->user()->nik;
        $data_pengaduan->save(); 
        return redirect()->to('/');

    }

    public function listLaporan()
    {
        $data_laporan = Auth()->guard('masyarakat')->user()->pengaduans; 
        return view('masyarakat.laporanku',compact('data_laporan'));

    }

    public function detailLaporan($id)
    {
        $detail_laporanku = Auth()->guard('masyarakat')->user()->pengaduans->find($id);
        $data_tanggapan = Tanggapan::whereHas('pengaduan', function($query){
            $query->where('pengaduan_id',request()->route('id'));
        })->with('petugas')->first(); 
        return view('masyarakat.detaillaporanku',compact('detail_laporanku','data_tanggapan'));
    }

}
