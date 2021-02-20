<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Masyarakat extends Authenticatable
{
	protected $primaryKey = "nik";
	public $incrementing = false;
	protected $guard = "masyarakat";
    protected $table = "masyarakats";
    protected $fillable = ['nik','nama','username','password','telp'];
    protected $hidden = ['password'];

    public function pengaduans()
    {
    	return $this->hasMany('App\Pengaduan');
    }
}
