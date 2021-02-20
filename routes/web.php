<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//Masyarakat's routes
// Route::get('/','MasyarakatController@index');
Route::get('login','Auth\\LoginController@loginFormMasyarakat');
Route::post('login/proses','Auth\\LoginController@loginMasyarakat')->name('masyarakat.login');
//login pages
Route::get('administrator/login','Auth\\LoginController@loginFormAdmin');
Route::get('petugas/login','Auth\\LoginController@loginFormPetugas');
Route::post('administrator/login','Auth\\LoginController@loginAdmin')->name('administrator.login');
Route::post('petugas/login','Auth\\LoginController@loginPetugas')->name('petugas.login');
Route::get('daftar','Auth\\RegisterController@registerMasyarakat');
Route::post('daftar/proses','Auth\\RegisterController@storeMasyarakat')->name('masyarakat.register');	
Route::get('/administrator/daftar','Auth\\RegisterController@registerAdministrator');
Route::post('/administrator/daftar/proses','Auth\\RegisterController@storeAdministrator')->name('administrator.register');	
Route::get('/logout','Auth\\LoginController@logoutMasyarakat')->name('masyarakat.logout');

//Masyarakat's resource
Route::middleware('masyarakat')->group(function(){
	Route::get('lapor','MasyarakatController@create'); 
	Route::get('laporanku','MasyarakatController@listLaporan'); 
	Route::get('/laporanku/detaillaporanku/{id}','MasyarakatController@detailLaporan'); 
	Route::post('/store','MasyarakatController@store')->name('masyarakat.store');
});
//Route::resource('masyarakat','MasyarakatController'); 
Route::get('/','MasyarakatController@index');    

//route group for administrator
Route::middleware('admin')->group(function(){
	Route::resource('administrator','AdministratorController')->except('show');
	Route::get('administrator/pengaduan','AdministratorController@pengaduan')->name('administrator.pengaduan');
	Route::get('administrator/pengaduan/destroy/{id}','AdministratorController@destroy')->name('administrator.destroy');
	Route::get('administrator/detailpengaduan/{id}','AdministratorController@detailpengaduan')->name('administrator.detailpengaduan');
	Route::post('administrator/detailpengaduan/statusOnchange/{id}','AdministratorController@statusOnchange')->name('administrator.statusOnchange');
	//akun admin dan petugas
	Route::get('administrator/akun','AdministratorController@akun')->name('administrator.akun');
	Route::get('administrator/akun/destroyAkun/{id}','AdministratorController@destroyAkun')->name('administrator.destroyAkun');
	//akun masyarakat
	Route::get('administrator/akun/destroyAkunMasyarakat/{id}','AdministratorController@destroyAkunMasyarakat')->name('administrator.destroyAkunMasyarakat');
	Route::get('administrator/akunMasyarakat','AdministratorController@akunMasyarakat')->name('administrator.akunMasyarakat');
	Route::get('administrator/pengaduan/pdf','AdministratorController@pdf')->name('administrator.pdf');
	Route::get('administrator/register','Auth\\RegisterController@registerAdmin')->name('administrator.register');
	Route::post('administrator/register/store','Auth\\RegisterController@storeAdmin')->name('administrator.storeAdmin');
	Route::get('administrator/pengaduan/detailpdf/{id}','AdministratorController@detailpdf')->name('administrator.detailpdf');
	Route::get('administrator/logout','Auth\\LoginController@logoutAdmin')->name('administrator.logout');
});

//route group for petugas
Route::middleware('petugas')->group(function(){
	Route::resource('petugas','PetugasController')->except('show'); 
	Route::get('petugas/pengaduan','PetugasController@pengaduan')->name('petugas.pengaduan');
	Route::get('petugas/tanggapan','PetugasController@tanggapan');
	Route::get('petugas/pengaduan/destroy/{id}','PetugasController@destroy')->name('petugas.destroy');
	Route::get('petugas/detailpengaduan/{id}','PetugasController@detailpengaduan')->name('petugas.detailpengaduan');
	Route::post('petugas/detailpengaduan/statusOnchange/{id}','PetugasController@statusOnchange')->name('petugas.statusOnchange');
	//akun admin dan petugas
	Route::get('petugas/akun','PetugasController@akun')->name('petugas.akun');
	Route::get('petugas/akun/destroyAkun/{id}','PetugasController@destroyAkun')->name('petugas.destroyAkun');
	//akun masyarakat
	Route::get('petugas/akun/destroyAkunMasyarakat/{id}','PetugasController@destroyAkunMasyarakat')->name('petugas.destroyAkunMasyarakat'); 
	Route::get('petugas/akunMasyarakat','PetugasController@akunMasyarakat')->name('petugas.akunMasyarakat');
	//Tanggapan
	Route::get('petugas/detailpengaduan/tanggapan/{id}','TanggapanController@petugasTanggapanCreate')->name('petugas.petugasTanggapan'); 
	Route::post('petugas/detailpengaduan/tanggapan/store','TanggapanController@petugasTanggapanStore')->name('petugas.petugasTanggapanStore'); 
	Route::post('petugas/detailpengaduan/tanggapan/{id}','TanggapanController@petugasTanggapanNew')->name('petugas.petugasTanggapanNew'); 
	Route::get('petugas/logout','Auth\\LoginController@logoutPetugas')->name('petugas.logoutPetugas');
});


