@extends('dashboard.layouts.main')

@section('container')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Timbang Anak</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                        <li class="breadcrumb-item active">Timbang Anak</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    @if (session()->has('success'))
        <div class="container-fluid">
            <div class="alert alert-success col-lg-12" role="alert">
                {{ session('success') }}
            </div>
        </div>
    @endif

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Data Timbang Anak</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <a href="/dashboard/timbang_anak/create" class="btn btn-primary mb-3"><i class="fas fa-plus-square"></i> Create</a>
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama Anak</th>
                                        <th>Tinggi Badan</th>
                                        <th>Berat Badan</th>
                                        <th>Status Gizi</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($timbangs as $row)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $row->anak->nama_anak }}</td>
                                            <td>{{ $row->tb_lhr }}</td>
                                            <td>{{ $row->bb_lhr }}</td>
                                            <td>{{ $row->status_gizi }}</td>
                                            <td>
                                                <a href="/dashboard/timbang_anak/{{ $row->id }}/edit" class="btn btn-success"><i class="far fa-edit"></i></a>
                                                <form action="/dashboard/timbang_anak/{{ $row->id }}" method="post" class="d-inline">
                                                    @method('delete')
                                                    @csrf
                                                    <button class="btn btn-danger border-0" onclick="return confirm('Kamu Yakin?')"><i class="far fa-trash-alt"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama Anak</th>
                                        <th>Tinggi Badan</th>
                                        <th>Berat Badan</th>
                                        <th>Status Gizi</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
