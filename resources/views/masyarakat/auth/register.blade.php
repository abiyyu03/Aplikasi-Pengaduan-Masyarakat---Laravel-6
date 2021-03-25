@extends('layouts.applogin')
<head> 
    <title>Daftar</title>
</head>
@section('content') 
<body class="bg-gradient-primary">
<div class="container">  
    <div class="row justify-content-center">
        <div class="col-xl-6 col-lg-12 col-md-9 my-4 ">
        <div class="card card-body shadow-lg px-2 py-0">
            <div class="card-body"><div class="text-center">
                            <a href="/">
                                <img class="img img-fluid mb-3 mt-2" style="max-width:240px"src="{{asset('img/applogo.png')}}" alt="logo">
                            </a>          
                            </div>
                            @if($message = Session::get('success'))
                                <div class="alert alert-success">
                                    <p>{{ $message }}</p>
                                </div>
                            @endif
                            <form action="{{route('masyarakat.register')}}" method="POST">
                                @csrf 
                                <div class="form-group">
                                    <label for="nik">NIK</label> 
                                    <input type="text" name="nik" class="form-control"
                                    placeholder="NIK" value="{{old('nik')}}" autocomplete="off">
                                    @error('nik')
                                        <div class="alert-danger">
                                            <p>{{ $message }}</p>
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="nama">Nama Lengkap</label> 
                                    <input type="text" name="nama" class="form-control"
                                    placeholder="Nama lengkap" value="{{old('nama')}}"autocomplete="off">
                                    @error('nama')
                                        <div class="alert-danger">
                                            <p>{{ $message }}</p>
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="username">Username</label> 
                                    <input type="text"name="username" class="form-control"
                                    placeholder="Username" value="{{old('username')}}"autocomplete="off">
                                    @error('username')
                                        <div class="alert-danger">
                                            <p>{{ $message }}</p>
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label> 
                                    <input type="password" class="form-control" name="password" placeholder="Password"autocomplete="off">
                                    @error('password')
                                        <div class="alert-danger">
                                            <p>{{ $message }}</p>
                                        </div>
                                    @enderror
                                </div> 
                                <div class="form-group">
                                    <label for="telp">No Telpon Aktif</label> 
                                    <input type="text" class="form-control" name="telp" placeholder="Nomor Telpon Aktif "  value="{{old('telp')}}"autocomplete="off">
                                    @error('telp')
                                        <div class="alert-danger">
                                            <p>{{ $message }}</p>
                                        </div>
                                    @enderror
                                </div> 
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-block">Daftar</button> 
                                </div> 
                            </form>
            </div>
        </div>
        </div>
    </div> 
</body>
@endsection