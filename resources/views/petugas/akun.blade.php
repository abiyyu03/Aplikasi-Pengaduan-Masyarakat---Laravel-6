@extends('layouts.apppetugas')

@section('content') 
	<div class="container-fluid">
		<div class="d-sm-flex align-items-center justify-content-center mb-4">
			
		</div> 
    <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
                <input type="text" class="form-control bg-light border border-primary small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                    </button>
                </div>
            </div>
        </form>
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