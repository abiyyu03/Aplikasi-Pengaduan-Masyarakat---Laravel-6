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
							<th>Nama Petugas</th> 
							<th>Username</th>  
							<th>Telp</th>
							<th>Level</th> 
						</tr>
					</thead>
						@php
							$no = 1;
						@endphp
					<tbody class="border">
						@foreach($data_akun as $akun)
						<tr class="text-center">
							<td>{{$no++}}</td>
							<td>{{$akun->nama_petugas}}</td> 
							<td>{{$akun->username}}</td>  
							<td>{{$akun->telp}}</td>
							<td>{{$akun->level}}</td> 
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
			<div class="text-center d-flex align-content-center justify-content-center">
				{!!$data_akun->render()!!} 
			</div>
			</div>
		</div>
	</div>
@endsection