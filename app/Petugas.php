<?php

namespace App;

use Illuminate\Database\Eloquent\Model; 
use Illuminate\Foundation\Auth\User as Authenticatable;

class Petugas extends Authenticatable
{ 
	protected $guard = "petugas";
    protected $table = "petugas";
    protected $fillable = ['nama_petugas','username','password','telp'];
    protected $hidden = ['password'];

    public function tanggapan()
    {
    	return $this->hasMany('App\Tanggapan','petugas_id');
    }

}
