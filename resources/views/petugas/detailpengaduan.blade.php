@extends('layouts.apppetugas')

@section('content')
	<div class="container-fluid">
		@if($message = Session::get('success'))
			<div class="alert alert-success">
				{{ $message }}
			</div>
		@endif
		<div class="row">
			<div class="card card-body shadow"> 
				<div class="card-header d-flex justify-content-between">
					<a class="" href="{{route('petugas.pengaduan')}}">
						<i class="fas fa-arrow-circle-left fa-2x"></i>
					</a> 
					<h4 class=" text-success rounded">
						@if($detail_pengaduan->status == "proses") 
							<i class="fas fa-check"></i>
							Divalidasi
						@elseif($detail_pengaduan->status == "selesai")
							<i class="fas fa-check-circle"></i> 
							Diverifikasi
						@else
							Belum divalidasi
						@endif 
					</h4>
				</div>
				<div class="card-body">
					<div class="card-body mb-4">
						<h1>{{$detail_pengaduan->judul_laporan}}</h1>
						<div class="card-text">
							<p>{{Carbon\Carbon::parse($detail_pengaduan->tanggal_pengaduan)->format('l, d F Y')}}</p>
						</div>
						<div class="card-text"> 
							<h5>{{$detail_pengaduan->isi_laporan}}</h5>
						</div>
						<img src="/img/{{$detail_pengaduan->foto}}" alt="foto">
							<hr>
						<h5 class="small">Diadukan oleh : {{$detail_pengaduan->masyarakat->nama}}</h5>
						<h5 class="small">NIK : {{$detail_pengaduan->masyarakat_nik}}</h5> 
						<h5 class="small">Nomor Telpon : {{$detail_pengaduan->masyarakat->telp}}</h5>
					</div> 
				<div class="card-footer">  
					<div class="d-flex justify-content-between">
						@if($detail_pengaduan->status == "selesai")
						@elseif($detail_pengaduan->status == "proses")
							<h5><b>Action : </b></h5>  
							<a href="{{route('petugas.petugasTanggapan',$detail_pengaduan->id)}}" class="btn btn-primary"><i class="fas fa-comment"></i> Tanggapi</a>   
						@elseif($detail_pengaduan->status == 0) 
							<h5><b>Action : </b></h5>  
							<a href="{{route('petugas.validasi',$detail_pengaduan->id)}}" class="btn btn-primary"><i class="fas fa-check"></i> Validasi</a>   
						@endif 
					</div> 
				</div> 
				</div>
				</div>
			</div> 	
		<br>  
		<div class="row">
			<div class="card card-body shadow">  
				<div class="card-body">
					<div class=""> 
						<div class="card-header"> 
							<div class="d-flex justify-content-between">
								<h4>Tanggapan</h4> 
							</div>						
						</div>
						<p class="text-justify mt-4">{{@$data_tanggapan->tanggapan}}</p>  
					</div>
				</div>
			</div>
		</div><br>
	</div>
@endsection