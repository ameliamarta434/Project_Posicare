@extends('dashboard.layouts.main')

@section('container')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Timbang Anak</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                        <li class="breadcrumb-item active">Edit Timbang Anak</li>
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
                            <h3 class="card-title">Edit Timbang Anak</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form method="post" action="/dashboard/timbang_anak/{{ $timbang->id }}" class="mb-5" enctype="multipart/form-data">
                            @method('put')
                            @csrf
                            <div class="card-body">
                                <div class="container">
                                    <div class="row">

                                        <div class="col-md-12">
                                            <label for="ortu_id">Nama Anak</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-venus"></i></span>
                                                </div>
                                                <select class="form-control @error('anak_id') is-invalid @enderror" name="anak_id">
                                                    <option selected="true" disabled="disabled" value="">-- Pilih Nama Anak --</option>
                                                    @foreach ($anaks as $row)
                                                        <option value="{{ $row->id }}" {{ old('anak_id') == $row->id ? ' selected' : ' ' }} {{ $timbang->anak_id == $row->id ? ' selected' : ' ' }}>{{ $row->nama_anak }}</option>
                                                    @endforeach
                                                </select>
                                                @error('ortu_id')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <label for="bb_lhr">Berat Badan</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-weight"></i></span>
                                                </div>
                                                <input type="text" class="form-control @error('bb_lhr') is-invalid @enderror" id="bb_lhr" name="bb_lhr" value="{{ old('bb_lhr', $timbang->bb_lhr) }}">
                                                <div class="input-group-append">
                                                    <span class="input-group-text">kg</span>
                                                </div>
                                                @error('bb_lhr')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <label for="tb_lhr">Tinggi Badan</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-text-height"></i></span>
                                                </div>
                                                <input type="text" class="form-control @error('tb_lhr') is-invalid @enderror" id="tb_lhr" name="tb_lhr" value="{{ old('tb_lhr', $timbang->tb_lhr) }}">
                                                <div class="input-group-append">
                                                    <span class="input-group-text">cm</span>
                                                </div>
                                                @error('tb_lhr')
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
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
    </section>
@endsection
