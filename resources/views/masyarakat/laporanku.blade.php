@extends('layouts.app') 
@section('content')
<body class=""> 
<h1 class="text-uppercase text-center font-weight-bold mt-4 " style="color:#1fb8ff">Laporanku</h1>
<div class="container"> 
	<div class="row">
		@foreach($data_laporan as $laporan)
		<div class="col-xl-4 col-md-6 mb-4">
			<div class="card shadow border bg-dark text-white border-primary border-top-0 border-bottom-0 border-right-0 card-shadow mt-4 py-0">
				<div class="card-body " style="background-color:#1890c8">
					<div class="row no-gutters">
						<div class="col-mr-2">
							<h5 class="font-weight-bold">
								{{$laporan->judul_laporan}} 
							</h5>   
							<p>
								{{Carbon\Carbon::parse($laporan->tanggal_pengaduan)->format('D, d F Y')}}
							</p>
							Status : {{$laporan->status}}
						</div>
					</div>
				</div>
				<div class="card-header  " style="background-color:#1374a1"> 
					<div class="ml-auto d-flex justify-content-between">
						<p>
						</p>
						<a href="/laporanku/detaillaporanku/{{$laporan->id}}" class="btn btn-info text-white">Detail</a> 
					</div>
				</div>
			</div>
		</div>
		@endforeach 
	</div>
</div>
</body>
@endsection