@extends('layouts.appadmin')

@section('content')
	<div class="container-fluid" >
        <a href="{{route('administrator.detailpdf',$detail_pengaduan->id)}}" class="btn btn-primary mb-2"><i class="fas fa-download"></i> Download Laporan (PDF)</a>
		<div class="row">
			<div class="card card-body shadow"> 
				<div class="card-header d-flex justify-content-between">
					<a class="" href="{{route('administrator.pengaduan')}}">
						<i class="fas fa-arrow-circle-left fa-2x"></i>
					</a>
					<h4> 
						{{$detail_pengaduan->status}} 
					</h4>
				</div>
				<div class="card-body"
					<div class="card-body">
						<h1>{{$detail_pengaduan->judul_laporan}}</h1>
						<div class="card-text">
							<p>{{Carbon\Carbon::parse($detail_pengaduan->tanggal_pengaduan)->format('l, d F Y')}}</p>
						</div>
						<div class="card-text"> 
							<h5>{{$detail_pengaduan->isi_laporan}}</h5>
						</div>
						<img src="/img/{{$detail_pengaduan->foto}}" alt="foto">
					</div>
					<!-- <div class="card-footer">
						<form action="{{route('administrator.statusOnchange',$detail_pengaduan->id)}}" method="POST">
							@csrf
							<div class="d-flex justify-content-between"> 
								<select name="status" class="form-control w-25" onchange="javascipt:this.form.submit()">
									<option value="0" @if($detail_pengaduan->status == 0) selected @endif>Belum diverifikasi</option> 
									<option value="proses" @if($detail_pengaduan->status == "proses") selected @endif>Proses</option> 
									<option value="selesai" @if($detail_pengaduan->status == "selesai") selected @endif>Selesai</option> 
								</select> 
							<a href="#" class="btn btn-primary">Tanggapi</a> 
							</div> 
						</form>
					</div> -->
				</div>
			</div> 	
		<br>  
		<div class="row mb-4">
			<div class="card card-body shadow">   
				<div class="card-header">
					<h4>Tanggapan</h4>
				</div>
				<p class="text-justify mt-4">{{@$data_tanggapan->tanggapan}}</p>    
			</div>
		</div>
	</div>
@endsection