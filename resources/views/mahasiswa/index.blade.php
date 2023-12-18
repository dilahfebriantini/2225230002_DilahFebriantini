@extends('layout.template')

@section('konten')
        <!-- START DATA -->
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

              <!-- Pesan -->
              @if (Session::has('success'))
              <div class="pt-1">
                  <div class="alert alert-success">
                      {{ Session::get('success') }}
                  </div>
              </div>
                  
              @endif

                <div class="d-flex justify-content-between mt-1">
                 <!-- TOMBOL TAMBAH DATA -->
                 <div class="pb-3">
                    <a href='{{ url('mahasiswa/create' )}}' class="btn btn-outline-primary">+ Tambah Data</a>
                </div>
                
                
                <!-- FORM PENCARIAN -->
                <div class="pb-3">
                    <form class="d-flex" action="{{ url('mahasiswa') }}" method="get">
                        <input class="form-control me-1" type="search" name="katakunci" value="{{ Request::get('katakunci') }}" placeholder="Masukkan kata kunci" aria-label="Search">
                        <button class="btn btn-secondary" type="submit">Cari</button>
                    </form>
                </div>
                
               
            </div>
            
          
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th class="col-md-1">No</th>
                            <th class="col-md-3">NIM</th>
                            <th class="col-md-4">Nama</th>
                            <th class="col-md-2">Jurusan</th>
                            <th class="col-md-2">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = $data->firstItem() ?>
                        @foreach ($data as $item)
                        <tr>
                            <td>{{ $i }}</td>
                            <td>{{ $item->nim }}</td>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->jurusan }}</td>
                            <td>
                                <a href='{{ url('mahasiswa/'.$item->nim.'/edit') }}' class="btn btn-outline-success btn-sm">
                                    <i class="fas fa-edit"></i> 
                                </a>
                               
                                
                                <form onsubmit="return confirm('Yakin akan menghapus data ?')" class="d-inline" action="{{ url('mahasiswa/'.$item->nim) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    {{-- <button type="submit" name="submit" class="btn btn-danger btn-sm">Del</button> --}}
                                    <button type="submit" name="submit" class="btn btn-outline-danger btn-sm">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>  
                        <?php $i++  ?>
                        @endforeach
                    </tbody>
                </table>
               {{ $data->links()  }}
          </div>
        </div>
          <!-- AKHIR DATA -->
          @endsection