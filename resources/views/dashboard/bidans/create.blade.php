@extends('dashboard.layouts.main')

@section('container')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Tambah Data Bidan</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                        <li class="breadcrumb-item active">Tambah Bidan</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Tambah Bidan</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form method="post" action="{{ route('bidans.store') }}" class="mb-5" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="container">
                                    <div class="row">

                                        <div class="col-md-12">
                                            <label for="nama_bidan">Nama bidan</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-user-tie"></i></span>
                                                </div>
                                                <input type="text" class="form-control @error('nama_bidan') is-invalid @enderror" id="nama_bidan" value="{{ Auth::user()->name }}" autofocus disabled>
                                                <input type="text" class="d-none" id="nama_bidan" name="nama_bidan" value="{{ Auth::user()->name }}">
                                                <input type="text" class="d-none" id="id_auth" name="id_auth" value="{{ Auth::user()->id }}">
                                                @error('nama_bidan')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <label for="alamat">Alamat</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="far fa-address-card"></i></span>
                                                </div>
                                                <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat" value="{{ old('alamat') }}">
                                                @error('alamat')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <label for="spesialis">Spesialis</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-id-badge"></i></span>
                                                </div>
                                                <input type="text" class="form-control @error('spesialis') is-invalid @enderror" id="spesialis" name="spesialis" value="{{ old('spesialis') }}">
                                                @error('spesialis')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <label for="jd_praktik">Jadwal Praktik</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="far fa-clipboard"></i></span>
                                                </div>
                                                <input type="text" class="form-control @error('jd_praktik') is-invalid @enderror" id="jd_praktik" name="jd_praktik" value="{{ old('jd_praktik') }}">
                                                @error('jd_praktik')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>



                                    </div>
                                </div>

                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                                <button type="reset" class="btn btn-danger">Reset</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
    </section>
@endsection
