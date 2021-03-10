@extends('layouts.apppetugas')

@section('content') 
	<div class="container-fluid">
		<div class="d-sm-flex align-items-center justify-content-center mb-4">
			
		</div>  
		<div class="row mt-4">
			<div class="container">
				<div class="table-responsive"> 
				<table class="table border"> 
					<thead class="">
						<tr class="text-center">
							<th>#</th>
							<th>NIK</th>
							<th>Nama</th> 
							<th>Username</th>  
							<th>Telp</th> 
							<th>Action</th>
						</tr>
					</thead> 
					<tbody class="border">
						@foreach($data_akunMasyarakat as $akunMasyarakat)
						<tr class="text-center">
							<td>{{$loop->iteration}}</td>
							<td>{{$akunMasyarakat->nik}}</td> 
							<td>{{$akunMasyarakat->nama}}</td> 
							<td>{{$akunMasyarakat->username}}</td>  
							<td>{{$akunMasyarakat->telp}}</td> 
							<td><a href="{{route('administrator.destroyAkunMasyarakat',$akunMasyarakat->nik)}}" class="btn btn-danger"><i class="fas fa-trash"></i></a></td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
			<div class="text-center d-flex align-content-center justify-content-center">
				{!!$data_akunMasyarakat->render()!!} 
			</div>
			</div>
		</div>
	</div>
@endsection