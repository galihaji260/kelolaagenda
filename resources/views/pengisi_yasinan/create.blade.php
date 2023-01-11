@extends('layouts.master')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">

    </section>

    <!-- Main content -->
    <section class="content">
        <form action="{{ route('pengisiyasinan.store') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Tambah Pengisi</h3>

                            <div class="card-tools">
                            </div>
                        </div>
                        @if (session('status'))
                            <div class="alert alert-success">{{ session('status') }}</div>
                        @endif
                        <div class="card-body">
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama"
                                    required>
                                <input type="hidden" name="tipe" class="form-control" value="internal">
                                @error('nama')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="nama">No WA</label>
                                <input type="text" name="no_hp" class="form-control" id="no_hp" placeholder="No WA"
                                    required>
                                @error('no_hp')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="{{ route('pengisiyasinan.index') }}" class="btn btn-secondary">Back</a>
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
@stop
