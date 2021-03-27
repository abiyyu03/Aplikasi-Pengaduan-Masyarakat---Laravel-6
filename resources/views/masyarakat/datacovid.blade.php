@extends('layouts.app')

@section('content')
<div class="container">
	<h1 class="mt-4 mb-4 text-center">Data Covid di Indonesia</h1>
	<div class="row"> 
   	<!-- Earnings (Monthly) Card Example -->
   	<div class="col-xl-3 col-md-6 mb-4">
       	<div class="card border-left-primary bg-danger text-white shadow h-100 py-2">
           	<div class="card-body">
               	<div class="row no-gutters align-items-center">
                   	<div class="col mr-2">
                       	<div class="text-xs font-weight-bold text-white text-uppercase mb-1">
                           	Positif</div>
                       	<div class="h5 mb-0 font-weight-bold text-gray-800">{{$arr[0]['positif']}}</div>
                   	</div>
                   	<div class="col-auto">
                       	<i class="fas fa-user-plus fa-2x text-gray-300"></i>
                   	</div>
               	</div>
           	</div>
       	</div>
   	</div> 
   	<!-- Earnings (Monthly) Card Example -->
   	<div class="col-xl-3 col-md-6 mb-4">
       	<div class="card border-left-primary bg-success text-white shadow h-100 py-2">
           	<div class="card-body">
               	<div class="row no-gutters align-items-center">
                   	<div class="col mr-2">
                       	<div class="text-xs font-weight-bold text-white text-uppercase mb-1">
                           	Sembuh</div>
                       	<div class="h5 mb-0 font-weight-bold text-gray-800">{{$arr[0]['sembuh']}}</div>
                   	</div>
                   	<div class="col-auto">
                       	<i class="fas fa-user-shield fa-2x text-gray-300"></i>
                   	</div>
               	</div>
           	</div>
       	</div>
   	</div> 
   	<!-- Earnings (Monthly) Card Example -->
   	<div class="col-xl-3 col-md-6 mb-4">
       	<div class="card border-left-primary shadow bg-warning text-dark h-100 py-2">
           	<div class="card-body">
               	<div class="row no-gutters align-items-center">
                   	<div class="col mr-2">
                       	<div class="text-xs font-weight-bold text-dark text-uppercase mb-1">
                           	Meninggal</div>
                       	<div class="h5 mb-0 font-weight-bold text-gray-800">{{$arr[0]['meninggal']}}</div>
                   	</div>
                   	<div class="col-auto">
                       	<i class="fas fa-user-slash fa-2x text-gray-300"></i>
                   	</div>
               	</div>
           	</div>
       	</div>
   	</div> 
   	<!-- Earnings (Monthly) Card Example -->
   	<div class="col-xl-3 col-md-6 mb-4">
       	<div class="card border-left-primary shadow h-100 py-2">
           	<div class="card-body">
               	<div class="row no-gutters align-items-center">
                   	<div class="col mr-2">
                       	<div class="text-xs font-weight-bold text-dark text-uppercase mb-1">
                           	Dirawat</div>
                       	<div class="h5 mb-0 font-weight-bold text-gray-800">{{$arr[0]['dirawat']}}</div>
                   	</div>
                   	<div class="col-auto">
                       	<i class="fas fa-user-injured fa-2x text-gray-300"></i>
                   	</div>
               	</div>
           	</div>
       	</div>
   	</div> 
	</div>
	<p class="small">Sumber : https://api.kawalcorona.com/indonesia</p>
</div>
@endsection