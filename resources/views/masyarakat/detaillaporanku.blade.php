@extends('layouts.app')

@section('content') 
<body style="background-image:linear-gradient(to right,#1890c8,#1aa6e1,#1890c8);">
	<div class="container mt-4" >  
		<div class="row mb-4">
			<div class="card card-body shadow">
				<div class="card-header d-flex justify-content-between">
					<a class="" href="/laporanku">
						<i class="fas fa-arrow-circle-left fa-2x"></i>
					</a>  
					<h4>Tanggapan</h4>
				</div>
					<p class="text-justify mt-4">{{@$data_tanggapan->tanggapan}}</p> 
				</div>
		</div> 
		<div class="row">
			<div class="card card-body shadow"> 
				<div class="card-header d-flex justify-content-between">
					<a class="" href="/laporanku">
						 
					</a>
					<h4 class="bg-success text-white rounded p-1">
						@if($detail_laporanku->status == "proses") 
							<i class="fas fa-check"></i>
							Divalidasi
						@elseif($detail_laporanku->status == "selesai")
							<i class="fas fa-check-circle"></i> 
							Diverifikasi
						@else
							Belum dilihat 
						@endif 
					</h4>
				</div>
				<div class="card-body"
					<div class="card-body">
						<h1>{{$detail_laporanku->judul_laporan}}</h1>
						<div class="card-text">
							<p><i class="fas fa-calendar"></i> {{Carbon\Carbon::parse($detail_laporanku->tanggal_pengaduan)->format('l, d F Y')}}</p>
						</div>
						<div class="card-text"> 
							<h5>{{$detail_laporanku->isi_laporan}}</h5>
						</div>
						<img src="/img/{{$detail_laporanku->foto}}" alt="foto">
					</div> 
				</div>
			</div> 	
		<br>  
	</div>
@endsection