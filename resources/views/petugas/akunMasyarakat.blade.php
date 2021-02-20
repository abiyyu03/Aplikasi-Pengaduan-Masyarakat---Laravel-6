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