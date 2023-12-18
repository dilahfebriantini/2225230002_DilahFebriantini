@extends('layout.template')
<!-- START FORM -->
@section('konten')

<div class="d-flex justify-content-center align-items-center" style="height: 100vh; width: 100%;">
    <div class="my-3 p-3" style="background-color: #ffffff; border-radius: 15px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1) ; width: 80%;">
        
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-2 rounded">
            <div class="container">
              <!-- Left-aligned items -->
              <div class="navbar-header">
                <a class="navbar-brand" href="#">Project Web Algoritma & Pemograman</a>
              </div>
          
              <!-- Right-aligned items -->
              <div class="navbar-collapse justify-content-between">
                <!-- Navbar items on the right -->
                <ul class="navbar-nav">
                  <li class="nav-item">
                    
                  </li>
                  <li class="nav-item">
                    
                  </li>
                </ul>
          
                <!-- Profile Name on the right -->
                <span class="navbar-text text-white">
                  Welcome, Dilah Febriantini
                  <i class="fas fa-user-circle fa-lg ml-2"></i>
                </span>
              </div>
            </div>
          </nav>
        
        <form action='{{ url('mahasiswa/'.$data->nim) }}' method='post'>
            @csrf
            @method('PUT')
            <div class="my-3 p-3 bg-body rounded shadow-sm">
                <a href="{{ url('mahasiswa') }}" class="btn btn-secondary"><< kembali</a>
                <div class="mb-3 row">
                    <label for="nim" class="col-sm-2 col-form-label">NIM</label>
                    <div class="col-sm-10">
                    {{ $data->nim }}
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name='nama' value="{{ $data->nama }}" id="nama">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="jurusan" class="col-sm-2 col-form-label">Jurusan</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name='jurusan' value="{{ $data->jurusan }}" id="jurusan">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="jurusan" class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">SIMPAN</button></div>
                </div>

        </div>
        </form>
    </div>
<!-- AKHIR FORM -->
</div>
@endsection