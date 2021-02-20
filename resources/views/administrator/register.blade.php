@extends('layouts.appadmin')

@section('content')
    
<div class="container-fluid">      
    <div class="row mt-4  justify-content-center">
        <div class="col-xl-12 col-lg-12 col-md-9">
        <div class="card card-body shadow-lg mb-4">
            <div class="card-header py-2">
                <div class="d-flex  justify-content-between">
                    <a href="{{route('administrator.akun')}}" class="">
                        <i class="fas fa-arrow-circle-left fa-2x"></i> 
                    </a>
                    <h4>Daftarkan akun petugas dan administrator</h4>
                </div>
            </div>
            <div class="card-body">
                <form action="{{route('administrator.storeAdmin')}}" method="POST">
                    @csrf 
                    <div class="form-group">
                        <label for="nama_petugas">Nama Petugas</label> 
                        <input type="text" name="nama_petugas" class="form-control" placeholder="Nama Petugas" value="{{old('nama_petugas')}}">
                        @error('nama_petugas')
                            <div class="alert-danger">
                                <p>{{ $message }}</p>
                            </div>
                        @enderror
                    </div> 
                    <div class="form-group">
                        <label for="username">Username</label> 
                        <input type="text"name="username" class="form-control" placeholder="Username" value="{{old('username')}}">
                        @error('username')
                            <div class="alert-danger">
                                <p>{{ $message }}</p>
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label> 
                        <input type="password" class="form-control" name="password" placeholder="Password">
                        @error('password')
                            <div class="alert-danger">
                                <p>{{ $message }}</p>
                            </div>
                        @enderror
                    </div> 
                    <div class="form-group">
                        <label for="telp">No Telpon Aktif</label> 
                        <input type="text" class="form-control" name="telp" placeholder="Nomor Telpon Aktif "  value="{{old('telp')}}">
                        @error('telp')
                            <div class="alert-danger">
                                <p>{{ $message }}</p>
                            </div>
                        @enderror
                    </div> 
                    <div class="form-group">
                        <label for="telp">Level Akun</label> 
                        <select name="level" class="form-control">
                            <option value="0">-</option>
                            <option value="petugas">Petugas</option>
                            <option value="admin">Administrator</option> 
                        </select>
                        @error('level')
                            <div class="alert-danger">
                                <p>{{ $message }}</p>
                            </div>
                        @enderror
                    </div> 
                    <button type="submit" class="btn btn-success btn-block">Daftar</button>
                </form> 
            </div>
        </div>
        </div>
    </div> 
</body>
@endsection