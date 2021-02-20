<?php

use Illuminate\Database\Seeder;
use App\Petugas; 

class AdministratorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Petugas::create([
        	'nama_petugas' => 'Administrator',
        	'username' => 'admin123',
        	'password' => bcrypt('123123123'),
        	'telp' =>  '08112134131',
        	'level' => 'petugas'
        ]);
    }
}
