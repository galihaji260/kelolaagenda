@extends('layouts.master')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">

        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <form action="{{ route('rancanganbiasa.store') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Rancangan Agenda Biasa</h3>

                            <div class="card-tools">
                            </div>
                        </div>
                        @if (session('status'))
                            <div class="alert alert-success">{{ session('status') }}</div>
                        @endif
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="nama">Nama Agenda</label>
                                        <input type="text" name="nama" class="form-control" id="nama"
                                            value="" placeholder="Nama Kegiatan" required>
                                        @error('nama')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="jenis_id">Jenis Agenda</label>
                                        {!! Form::select('jenis_id', $jenisagenda, '', ['class' => 'form-control', 'required']) !!}
                                        @error('jenis_id')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="tanggal">Tanggal Agenda</label>
                                        <input type="date" name="tanggal" class="form-control" id="tanggal"
                                            value="" placeholder="Tanggal Agenda" required>
                                        @error('tanggal')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="waktu">Waktu</label>
                                        <div class="row">
                                            <div class="col-5">
                                                <input type="time" name="waktu_mulai" class="form-control" id="waktu"
                                                    value="" placeholder="Mulai">
                                            </div>
                                            <div class="d-flex justify-content-center col-2"> sampai </div>
                                            <div class="col-5">
                                                <input type="time" name="waktu_selesai" class="form-control"
                                                    id="waktu" value="" placeholder="Selesai">
                                            </div>
                                        </div>
                                        @error('waktu')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="tempat">Tempat</label>
                                        <input type="text" name="tempat" class="form-control" id="tempat"
                                            value="" placeholder="Tempat">
                                        @error('tempat')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="divisi_id">Divisi</label>
                                        {!! Form::select('divisi_id', $divisi, '', ['class' => 'form-control']) !!}
                                        @error('divisi_id')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="pic_id">Penanggung Jawab</label>
                                        {!! Form::select('pic_id', $penanggungjawab, '', ['class' => 'form-control']) !!}
                                        @error('pic_id')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="pengisi_id">Pengisi</label>
                                        {!! Form::select('pengisi_id', $pengisi, '', ['class' => 'form-control']) !!}
                                        @error('pengisi_id')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="anggaran">Anggaran</label>
                                        <input type="text" name="anggaran" class="form-control" id="anggaran"
                                            value="" placeholder="Anggaran">
                                        @error('anggaran')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="deskripsi_kegiatan">Deskripsi Kegiatan</label>
                                        <input type="text" name="deskripsi_kegiatan" class="form-control"
                                            id="deskripsi_kegiatan" value="" placeholder="Deskripsi Kegiatan">
                                        <input type="hidden" name="status_id" value="1">
                                        <input type="hidden" name="realisasi_anggaran" value="0">
                                        @error('deskripsi_kegiatan')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="{{ route('jenisagenda.index') }}" class="btn btn-secondary">Back</a>
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
