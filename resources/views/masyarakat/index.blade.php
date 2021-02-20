@extends('layouts.app')

@section('content') 
<main data-spy="scroll" data-target=".area" data-offset=50> 
	<div  class="area" style="background:transparent url('/img/bg.jpg') no-repeat;background-size:cover">
	<div class="card card-body border-0" style="background-color:rgba(24,145,201,0.7);">
		<div class="masthead" >
			<div class="text-center" style="margin-bottom:300px;margin-top:120px"> 
				<div class="masthead-subheading">
					<h1 class="text-uppercase font-weight-bold" style="color:gold;;">Aplikasi pengaduan masyarakat</h1>
					<!-- <h3 class="font-weight-bold">Desa Bojongnangka</h3> -->
					<div class="container">
						<h5 class="text-white text-center "><strong>Apems (Aplikasi pengaduan masyarakat)</strong> Desa Bojongnangka adalah aplikasi pelaporan dan penyaranan berbasis web yang akan memudahkan warga desa Bojongnangka untuk <strong>mengadukan keluhan ataupun memberi saran</strong> untuk desa bojongnangka lebih baik </h5> 
					</div>			
					<a href="#fiturfitur" style="background-image:linear-gradient(to right,gold,#fff700)"class="btn mt-4 text-dark font-weight-bold p-3">Yuk Pelajari !</a> 
				</div> 
			</div>
		</div>
	</div>
	</div> 
	<!--fitur-fitur-->
	<section class="page-section mb-4 mt-4
	" id="fiturfitur">
		<div class="container">
			<div class="mt-4 text-center">
				<h1 class="text-uppercase font-weight-bold  " style="color:#1890c8">Keunggulan</h1><hr style="border-color:#1890c8;border-width:2px;">
			</div>
			<div class="row mt-4 text-center">
				<div class="col-md-4">
					<span class="fas fa-comments fa-6x p-3 rounded" style="background-image:linear-gradient(to right,#1890c8,#1aa6e1,#1890c8);color:white"></span>
					<h2 class=""style="color:#1890c8">Respon Cepat</h2> 
					<p style="color:#1890c8">Petugas yang siap standby di depan layar akan merespon laporan kamu</p>
				</div>
				<div class="col-md-4">
					<span class="fas fa-clock fa-6x fa-6x p-3 rounded" style="background-image:linear-gradient(to right,#1890c8,#1aa6e1,#1890c8);color:white"></span>
					<h2 class=""style="color:#1890c8">Layanan 12 Jam</h2> 
					<p style="color:#1890c8">Kamu akan dilayani oleh petugas desa mulai jam 7 pagi sampai jam 7 malam</p>
				</div>
				<div class="col-md-4">
					<span class="fas fa-volume-mute fa-6x p-3 rounded" style="background-image:linear-gradient(to right,#1890c8,#1aa6e1,#1890c8);color:white"></span>
					<h2 class=""style="color:#1890c8">Aduanmu aman</h2> 
					<p style="color:#1890c8">Kami tidak akan comel tentang pengaduan permasalahan mu selain kepada pihak yang berwajib</p>
				</div>
			</div>
		</div>
	</section> 
	<!--tahapan proses laporan-->
	<section class="page-section mb-4 mt-4" > 
			<div class="card card-body border" style="background-image:linear-gradient(to right,#0b4761,#0e5c7d,#0b4761);">
				<div class="card-body">
					<div class="mt-4 text-center">
					<h1 class="text-uppercase font-weight-bold  text-white">Tahapan proses laporan</h1>
					<hr style="border-color:white;border-width:2px;">
				</div>
				<div class="row mt-4 text-center">
					<div class="col-md-4">
						<span class="fas fa-pencil-alt fa-5x p-3 rounded bg-white" style=";color:#0e5c7d"></span>
						<h3 class="" style="color:white">1. Anda menulis laporan</h3> 
					</div>
					<div class="col-md-4">
						<span class="fas fa-check fa-5x p-3 rounded bg-white" style="color:#0e5c7d"></span>
						<h3 class="" style="color:white">2. Petugas akan melakukan validasi </h3>  
					</div>
					<div class="col-md-4">
						<span class="fas fa-comments fa-5x p-3 rounded bg-white" style="color:#0e5c7d"></span>
						<h3 class="" style="color:white">3. Petugas akan memberikan tanggapan yang artinya laporan sudah di verifikasi</h3>  
					</div> 
				</div> 
			</div>
		</div>
	</section>  
	<!--tahapan proses laporan-->
	<section class="page-section mb-4 mt-4" > 
			<div class="card card-body border-0">
				<div class="card-body">
					<div class="mt-4 text-center">
					<h1 class="text-uppercase font-weight-bold" style="color:#0e5c7d">Apa kata mereka ?</h1> 
					<hr style="border-color:#0e5c7d;border-width:2px;">
				</div>
				<div class="row mt-4 text-center">
					<div class="col-md-4">
						<span class="fas fa-user fa-6x p-3 rounded bg-white" style=";background-image:linear-gradient(to right,#0b4761,#0e5c7d,#0b4761);color:#0e5c7d;color:white"></span>
						<h2 class="" style="color:#0e5c7d">Fulan</h2>  
						<p class="" style="color:#0e5c7d"><i>"Dengan adanya aplikasi Appems, proses pengaduan saya jadi lebih mudah dan tidak perlu datang ke lokasi"</i></p>
					</div>
					<div class="col-md-4">
						<span class="fas fa-user-secret fa-6x p-3 rounded bg-white" style="background-image:linear-gradient(to right,#0b4761,#0e5c7d,#0b4761);color:#0e5c7d;color:white"></span>
						<h2 class="" style="color:#0e5c7d">Fulan Secret</h2>  
						<p class="" style="color:#0e5c7d"><i>"Sangat bermanfaat dimasa pandemi seperti ini, sehingga kita tidak perlu berkerumun kesana"</i></p>
					</div>
					<div class="col-md-4">
						<span class="fas fa-user-ninja fa-6x p-3 rounded bg-white" style="background-image:linear-gradient(to right,#0b4761,#0e5c7d,#0b4761);color:#0e5c7d;color:white"></span>
						<h2 class="" style="color:#0e5c7d">Fulan Ninja</h2> 
						<p class="" style="color:#0e5c7d"><i>"Petugasnya cepat merespon, tanggapannya mudah dimengerti dan dalam beberapa hari aduan saya terealisasi, terimakasih Appems desa Bojongnangka"</i></p>   
					</div> 
				</div> 
			</div>
		</div>
	</section>  
</main>
<footer class="text-center text-white p-2 sticky-footer" style="background-image:linear-gradient(to right,#0b4761,#0e5c7d,#0b4761);color:#0e5c7d">
	<h5 class="text-uppercase">created by Abiyyu Cakra</h5> 
	<p class="text-uppercase">Find me :)</p>
	<div class="form-inline justify-content-center  ">
		<a target="_blank" href="https://github.com/abiyyu03"> 
			<i class="fab fa-github-alt mx-3 fa-2x text-white"></i>
		</a>
		<a target="_blank" href="https://www.facebook.com/profile.php?id=100041837449940"> 
			<i class="fab fa-facebook mx-3 fa-2x text-white"></i>
		</a>
		<a target="_blank" href="https://www.instagram.com/abiyyucakra03"> 
			<i class="fab fa-instagram mx-3 fa-2x text-white"></i>
		</a> 
	</div> 
</footer>
@endsection