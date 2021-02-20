<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Administrator extends Authenticatable
{
	protected $guard = "admin";
    protected $table = "petugas";
    protected $fillable = ['nama_petugas','username','password','telp'];
    protected $hidden = ['password'];
} 