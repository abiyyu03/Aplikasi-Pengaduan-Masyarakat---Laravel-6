<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model
{
	protected $table = "pengaduans";
    protected $guarded = [];
	// protected $fillable = ['tanggal_pengaduan','masyarakat_nik','judul_laporan','isi_laporan','foto','status'];
	
    public function masyarakat()
    {
    	return $this->belongsTo('App\Masyarakat');
    }
    public function tanggapan()
    {
    	return $this->hasMany('App\Tanggapan','pengaduan_id');
    }
}
