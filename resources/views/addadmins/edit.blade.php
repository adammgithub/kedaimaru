@extends('layouts.admin')

@section('title')
    <title>Edit Admin</title>
@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

@section('content')
<main class="main">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item active">Edit Admin</li>
    </ol>
    <div class="container-fluid">
        <div class="animated fadeIn">
          
            <!-- TAMBAHKAN ENCTYPE="" KETIKA MENGIRIMKAN FILE PADA FORM -->
            <form action="{{ route('addadmin.update',  [$addadmin->id]) }}" method="post" enctype="multipart/form-data" >
                @csrf
                @METHOD('PUT')
                <div class="row">
                    <div class="col-md-5">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Edit Admin</h4>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="name">Nama</label>
                                    <input type="text" name="name" class="form-control" value="{{ $addadmin->name }}" required>
                                    <p class="text-danger">{{ $errors->first('name') }}</p>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" name="email" class="form-control" value="{{ $addadmin->email }}" required>
                                     <p class="text-danger">{{ $errors->first('email') }}</p>
                                </div>

                                <div class="form-group">
                                    <label>Password</label>
                                      <input name="password" name="password" class="form-control"id="password" type="password" />
                                        <p class="text-danger">{{ $errors->first('password') }}</p>
                                </div>
                                <div class="form-group">

                                    <label>Konfirmasi Password</label>
                                      <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" />
                                      <span id='message'></span>
                                       <p class="text-danger">{{ $errors->first('password') }}</p>
                                </div>
<!--                                 <div class="form-group">
                                    <label for="image">Foto Produk</label>
                                    <input type="file" name="image" class="form-control" value="{{ old('image') }}" required>
                                    <p class="text-danger">{{ $errors->first('image') }}</p>
                                </div> -->
                                <div class="form-group">
                                    <button class="btn btn-primary btn-sm">Update</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</main>
@endsection

<!-- PADA ADMIN LAYOUTS, TERDAPAT YIELD JS YANG BERARTI KITA BISA MEMBUAT SECTION JS UNTUK MENAMBAHKAN SCRIPT JS JIKA DIPERLUKAN -->
@section('js')
    <!-- LOAD CKEDITOR -->
    <script src="https://cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>
    <script>
        //TERAPKAN CKEDITOR PADA TEXTAREA DENGAN ID DESCRIPTION
        CKEDITOR.replace('description');
    </script>
@endsection