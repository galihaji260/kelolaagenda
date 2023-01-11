@extends('layouts.master')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">

        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <form action="{{ route('notula.store') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-12">
                    <div class="card ">
                        <div class="card-header">
                            <h3 class="card-title">Tambah Notula Baru</h3>

                            <div class="card-tools">
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label class="font-weight-bold">PENCATAT</label>
                                        <input type="text" class="form-control @error('pencatat') is-invalid @enderror"
                                            name="pencatat" value="{{ Auth::user()->username }}" readonly>
                                        <!-- error message untuk title -->
                                        @error('pencatat')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label class="font-weight-bold">TANGGAL</label>
                                        <input type="date" class="form-control @error('tanggal') is-invalid @enderror"
                                            name="tanggal" value="{{ old('tanggal') }}" placeholder="Masukkan Judul Post">

                                        <!-- error message untuk title -->
                                        @error('tanggal')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label class="font-weight-bold">PESERTA</label>
                                        <input type="text" class="form-control @error('peserta') is-invalid @enderror"
                                            name="peserta" value="{{ old('peserta') }}" placeholder="Masukkan Judul Post">

                                        <!-- error message untuk title -->
                                        @error('peserta')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label class="font-weight-bold">JUDUL</label>
                                        <input type="text" class="form-control @error('judul') is-invalid @enderror"
                                            name="judul" value="{{ old('judul') }}" placeholder="Masukkan Judul Post">

                                        <!-- error message untuk title -->
                                        @error('title')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label class="font-weight-bold">ISI RAPAT</label>
                                        <textarea class="form-control @error('konten') is-invalid @enderror" name="konten" rows="5"
                                            placeholder="Masukkan Konten Post">{{ old('content') }}</textarea>

                                        <!-- error message untuk content -->
                                        @error('content')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="{{ route('notula.index') }}" class="btn btn-secondary">Back</a>
                            <input type="submit" value="Save" name="submit" class="btn btn-success float-right">
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </form>
    </section>
    <!-- /.content -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('konten');
    </script>
@stop
