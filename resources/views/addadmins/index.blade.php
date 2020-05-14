@extends('layouts.admin')

@section('title')
    <title>List Admin</title>
@endsection

@section('content')
<main class="main">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item active">Admin</li>
    </ol>
    <div class="container-fluid">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">
                                List Admin
                              
                                <!-- BUAT TOMBOL UNTUK MENGARAHKAN KE HALAMAN ADD PRODUK -->
                                <a href="{{ route('addadmin.create') }}" class="btn btn-primary btn-sm float-right">Tambah</a>
                            </h4>
                        </div>
                        <div class="card-body">
                            <!-- JIKA TERDAPAT FLASH SESSION, MAKA TAMPILAKAN -->
                            @if (session('success'))
                                <div class="alert alert-success">{{ session('success') }}</div>
                            @endif

                            @if (session('error'))
                                <div class="alert alert-danger">{{ session('error') }}</div>
                            @endif
                            <!-- JIKA TERDAPAT FLASH SESSION, MAKA TAMPILAKAN -->

                            <!-- BUAT FORM UNTUK PENCARIAN, METHODNYA ADALAH GET -->
                            <form action="{{ route('addadmin.index') }}" method="get">
                                <div class="input-group mb-3 col-md-3 float-right">
                                    <!-- KEMUDIAN NAME-NYA ADALAH Q YANG AKAN MENAMPUNG DATA PENCARIAN -->
                                    <input type="text" name="q" class="form-control" placeholder="Cari..." value="{{ request()->q }}">
                                    <div class="input-group-append">
                                        <button class="btn btn-secondary" type="button">Cari</button>
                                    </div>
                                </div>
                            </form>
                          
                            <!-- TABLE UNTUK MENAMPILKAN DATA PRODUK -->
                            <div class="table-responsive">
                                <table class="table table-hover table-bordered">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
<!--                                             <th>Avatar</th> -->
                                            <th>Nama</th>
                                            <th>Email</th>
                                            <th>Jabatan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- LOOPING DATA TERSEBUT MENGGUNAKAN FORELSE -->
                                        <!-- ADAPUN PENJELASAN ADA PADA ARTIKEL SEBELUMNYA -->
                                        @forelse ($addadmin as $row)
                                        <tr>

                                            <td>
                                                {{ $row->id }}<br>
                                            </td>

                                            <td>
                                                <strong>{{ $row->name }}</strong><br>
                                            </td>
                                                <!-- ADAPUN NAMA KATEGORINYA DIAMBIL DARI HASIL RELASI PRODUK DAN KATEGORI -->
                                            <td>
                                                {{ $row->email }}<br>
                                            </td>
                                                <td><span class="badge badge-success">Admin</span></td>
                                            <td>
                                                <!-- FORM UNTUK MENGHAPUS DATA PRODUK -->
                                                <form action="{{ route('addadmin.destroy', $row->id) }}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <a href="{{ route('addadmin.edit', $row->id) }}" class="btn btn-warning btn-sm">Edit Profil</a>

                                                    <button class="btn btn-danger btn-sm">Hapus</button>
                                                </form>
                                            </td>
                                        </tr>
                                        @empty
                                        <tr>
                                            <td colspan="5" class="text-center">Tidak ada data</td>
                                        </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection