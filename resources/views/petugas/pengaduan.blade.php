@extends('layouts.apppetugas')

@section('content')
	<div class="container-fluid"> 
		<div class="row mt-4">
			<div class="container">
				<div class="table-responsive bg-"> 
				<table class="table border"> 
					<thead class="">
						<tr class="text-center">
							<th>#</th>
							<th>Tanggal Pengaduan</th> 
							<th>Judul Laporan</th>  
							<th>Status</th>
							<th>Action</th>
						</tr>
					</thead> 
					<tbody class="border">
						@foreach($data_pengaduan as $pengaduan)
						<tr class="text-center">
							<td>{{$loop->iteration}}</td>
							<td>{{Carbon\Carbon::parse($pengaduan->tanggal_pengaduan)->format('l, d F Y')}}</td> 
							<td>{{$pengaduan->judul_laporan}}</td>  
							<td>{{$pengaduan->status}}</td>
							<td><a href="{{route('petugas.detailpengaduan',$pengaduan->id)}}" class="btn btn-info"><i class="fas fa-clipboard"></i></a> <a href="{{route('petugas.destroy',$pengaduan->id)}}" class="btn btn-danger"><i class="fas fa-trash"></i></a></td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
			<div class="text-center d-flex align-content-center justify-content-center">
				{!!$data_pengaduan->render()!!} 
			</div>
			</div>
		</div>
	</div>
@endsection