@extends('layouts.master')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">

    </section>

    <!-- Main content -->
    <section class="content">
        <form action="{{ route('penilaiankegiatan.update', $agendaId) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Edit Penilaian Kegiatan</h3>

                            <div class="card-tools">
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="pasaran">Nilai Pelaksanaan</label>
                                {{-- {!! Form::select('nilai', [1, 2, 3, 4, 5], $penilaianKegiatan->nilai ?? '', ['class' => 'form-control']) !!} --}}
                                <select id="nilai" name="nilai" class="form-control custom-select" required>
                                    <option value="" selected disabled>{{ $penilaianKegiatan->nilai ?? '' }}</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                                @error('nilai')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="pasaran">Gambar</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="gambar" required>
                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                </div>
                                <input type="hidden" name="agenda_id" value="{{ $agendaId }}">
                                @error('nilai')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="catatan_pelaksanaan">Catatan Pelaksanaan</label>
                                <textarea class="form-control" rows="7" name="catatan_pelaksanaan">{{ $penilaianKegiatan->catatan_pelaksanaan ?? '' }}</textarea>
                                @error('catatan_pelaksanaan')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
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

    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">komentar</h3>
                        <div class="card-tools">
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>komentar</th>
                                        <th>Nilai</th>
                                        <th>gambar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($komentars as $komentar)
                                        <tr>
                                            <td>1</td>
                                            <td>{{ $komentar->catatan_pelaksanaan }}</td>
                                            <td>{{ $komentar->nilai }}</td>

                                            <td>
                                                <img class="img-thumbnail" style="width: 300px"
                                                    src="{{ asset('data_file/' . $komentar->gambar) }}" alt=""
                                                    title="" />
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tfoot>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
    </section>
    <!-- /.content -->
@stop
@push('scripts')
    <script src="../../plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
    <script>
        $(function() {
            bsCustomFileInput.init();
        });
    </script>
@endpush
