@extends('layouts.app')

@section('content')
<main>
	<div class=" card-body border-0" style="background-image:linear-gradient(to right,#1890c8,#1aa6e1,#1890c8);">
		<div class="container">
		<div class="card shadow w-100">
		<div class="card-header">
			<h1 class="card-title text-center " style="color:#1890c8">Buat Laporan / Saran</h1>
		</div>
		<div class="card-body"> 
			<div class="masthead">
				@if($message = Session::get('success'))
	               <div class="alert alert-success">
	               		<p>{{ $message }}</p>
	               </div>
	            @endif
	            <form action="{{route('masyarakat.store')}}" method="POST" enctype="multipart/form-data">
	                @csrf 
	                <div class="form-group"> 
	                    <input type="hidden" value="{{Carbon\Carbon::today()}}"name="tanggal_pengaduan" class="form-control"
	                    placeholder="Tanggal Pengaduan">
	                    @error('tanggal_pengaduan')
	                    	<div class="alert-danger">
	                      		<p>{{ $message }}</p>
	                    	</div>
	                    @enderror
	                </div> 
	                <div class="form-group">
	                	<label for="judul_laporan">Judul Laporan</label> 
	                	<input type="text" class="form-control" name="judul_laporan" placeholder="Judul Laporan" required>
	                    @error('judul_laporan')
	                    	<div class="alert-danger">
	                      		<p>{{ $message }}</p>
	                     	</div>
	                    @enderror 
	                <div> <br>
	                <div class="form-group">
	                	<label for="isi_laporan">Isi Laporan</label> 
	                    <textarea name="isi_laporan" required rows="10"class="form-control"></textarea>
	                    @error('isi_laporan')
	                    	<div class="alert-danger">
	                    		<p>{{ $message }}</p>
	                    	</div>
	                    @enderror
	                </div>
	                <div class="form-group">
	                	<label for="foto">Foto bukti</label> 
	                	<input type="file" class="form-control" name="foto" placeholder="Masukan bukti foto" required>
	                    @error('foto')
	                    	<div class="alert-danger">
	                      		<p>{{ $message }}</p>
	                     	</div>
	                    @enderror 
	                </div> 
	                <div class="form-group">
	                	<button type="submit" class="btn btn-success bg-gradient-success btn-block">Kirim</button>
	                 </div>
	             </form> 
	            </div> 
			</div>
		</div>
		</div>
		</div>
	</div> 
</main>
@endsection