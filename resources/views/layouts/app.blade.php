<!DOCTYPE html>
<html>
<head>
	<title>Appems</title> 
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport"  content="width=width-device, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('startbootstrap-sb-admin-2/vendor/fontawesome-free/css/all.min.css')}}"> 
</head>
<body> 
	<div class=" col-xs-1">
		@include('components.navbar')
		@yield('content')
		@stack('scripts') 
	</div> 
</body>
<script src="{{asset('jquery/jquery-3.5.1.min.js')}}"></script> 
<script type="text/javascript" src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('startbootstrap-sb-admin-2/vendor/fontawesome-free/js/all.min.js')}}"></script>
</html>