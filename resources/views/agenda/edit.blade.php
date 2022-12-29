@extends('layouts.master')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Agenda</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Edit Agenda</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <form action="{{ route('agenda.update', $agenda->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Edit Agenda</h3>

                            <div class="card-tools">
                            </div>
                        </div>
                        @if (session('status'))
                            <div class="alert alert-success">{{ session('status') }}</div>
                        @endif
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="nama">Nama Agenda</label>
                                        <input type="text" name="nama" class="form-control" id="nama"
                                            value="{{ $agenda->nama }}" placeholder="Nama Kegiatan">
                                        @error('nama')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="nama">Jenis Agenda</label>
                                        {!! Form::select('jenis_id', $jenisagenda, $agenda->jenis_id, ['class' => 'form-control']) !!}
                                        @error('jenis_agenda')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="tanggal">Tanggal Agenda</label>
                                        <input type="date" name="tanggal" class="form-control" id="tanggal"
                                            value="{{ $agenda->tanggal }}" placeholder="Tanggal Agenda">
                                        @error('tanggal')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="waktu">Waktu mulai</label>
                                        <input type="time" name="waktu" class="form-control" id="waktu_mulai"
                                            value="{{ $agenda->waktu_mulai }}" placeholder="Waktu">
                                        @error('waktu')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="time">Waktu Selesai</label>
                                        <input type="time" name="waktu" class="form-control" id="waktu_selesai"
                                            value="{{ $agenda->waktu_selesai }}" placeholder="Waktu">
                                        @error('waktu')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="tempat">Tempat</label>
                                        <input type="text" name="tempat" class="form-control" id="tempat"
                                            value="{{ $agenda->tempat }}" placeholder="Tempat">
                                        @error('tempat')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="divisi">Divisi</label>
                                        {!! Form::select('divisi_id', $divisi, $agenda->divisi_id, ['class' => 'form-control']) !!}
                                        @error('divisi')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="penanggung_jawab">Penanggung Jawab</label>
                                        {!! Form::select('pic_id', $penanggungjawab, $agenda->pic_id, ['class' => 'form-control']) !!}
                                        @error('penanggung_jawab')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="pengisi">Pengisi</label>
                                        {!! Form::select('pengisi_id', $pengisi, $agenda->pengisi_id, ['class' => 'form-control']) !!}
                                        @error('pengisi_id')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="deskripsi_kegiatan">Deskripsi Kegiatan</label>
                                        <input type="text" name="deskripsi_kegiatan" class="form-control"
                                            id="deskripsi_kegiatan" value="{{ $agenda->deskripsi_kegiatan }}"
                                            placeholder="Deskripsi Kegiatan" required>
                                        @error('deskripsi_kegiatan')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="anggaran">Anggaran</label>
                                        <input type="text" name="anggaran" class="form-control" id="anggaran"
                                            value="{{ $agenda->anggaran }}" placeholder="Anggaran">
                                        @error('anggaran')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="anggaran">Realisasi Anggaran</label>
                                        <input type="text" name="realisasi_anggaran" class="form-control"
                                            id="realisasi_anggaran" value="{{ $agenda->realisasi_anggaran }}"
                                            placeholder="Anggaran">
                                        @error('anggaran')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="status_id">Status Kegiatan</label>
                                        {!! Form::select('status_id', $statuskegiatan, $agenda->status_id, ['class' => 'form-control']) !!}
                                        @error('status')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="{{ route('agenda.index') }}" class="btn btn-secondary">Back</a>
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
