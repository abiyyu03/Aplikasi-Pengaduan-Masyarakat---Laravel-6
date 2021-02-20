@extends('layouts.apppetugas')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="card card-body shadow">  
			<div class="card-body">
				<div class="card-body"> 
					{{$data_tanggapan->tanggapan}} 
				</div>
			</div>
		</div>
	</div> 
</div>
@endsection
