@extends('layouts.masterhome')

@section('content')
    @inject('pasaran', 'App\Lib\PasaranHelper')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Agenda</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form action="" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-4 mb-2">
                                        {!! Form::select('tahun', $tahun, $request->tahun, ['class' => 'form-control']) !!}
                                    </div>
                                    <div class="col-lg-4 mb-2">
                                        {!! Form::select('bulan', $bulan, $request->bulan, ['class' => 'form-control']) !!}
                                    </div>
                                    <div class="col-lg-4 mb-2">
                                        {!! Form::select('divisi', $divisi, $request->divisi, ['class' => 'form-control']) !!}
                                    </div>
                                    <div class="col-lg-2 mb-2">
                                        {!! Form::select('jenis', $jenis, $request->jenis, ['class' => 'form-control']) !!}
                                    </div>
                                    <div class="col-lg-2 mb-2">
                                        {!! Form::select('status', $status, $request->status, ['class' => 'form-control']) !!}
                                    </div>
                                    <div class="col-lg-4 mb-2">
                                        <input type="text" class="form-control" name="keyword"
                                            value="{{ $request->keyword }}" placeholder="Tulis nama kegiatan">
                                    </div>
                                    <div class="col-lg-4 mb-2">
                                        <input type="submit" value="Cari" class="btn btn-primary">
                                        <a href="{{ route('agenda.index') }}" class="btn btn-danger">Reset</a>
                                    </div>
                                </div>
                            </form>
                            <div class="table-responsive">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Nama Kegiatan</th>
                                            <th>Hari</th>
                                            <th>Pasaran</th>
                                            <th>Tanggal</th>
                                            <th>Penanggung Jawab</th>
                                            <th>Pengisi</th>
                                            <th>Jenis</th>
                                            <th>Status</th>
                                            <th>Detail</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($agendas as $agenda)
                                            <tr>
                                                <td>{{ $agenda->nama }}</td>
                                                <td>{{ $pasaran->getHari($agenda->tanggal) }}</td>
                                                <td>{{ $pasaran->getPasaran($agenda->tanggal) }}</td>
                                                <td>{{ $agenda->tanggal }}</td>
                                                <td>{{ $agenda->penanggungjawab['nama'] }}</td>
                                                <td>{{ $agenda->pengisiAgenda['nama'] }}</td>
                                                <td>{{ $agenda->jenisAgenda->nama }}</td>
                                                <td>
                                                    @if ($agenda->statusAgenda->nama == 'Berjalan')
                                                        <span
                                                            class="badge badge-primary">{{ $agenda->statusAgenda->nama }}</span>
                                                    @elseif($agenda->statusAgenda->nama == 'Terlaksana')
                                                        <span
                                                            class="badge badge-success">{{ $agenda->statusAgenda->nama }}</span>
                                                    @else
                                                        <span
                                                            class="badge badge-danger">{{ $agenda->statusAgenda->nama }}</span>
                                                    @endif

                                                </td>
                                                <td>
                                                    <a class="" data-toggle="modal"
                                                        data-target="#modalSaya{{ $agenda->id }}">
                                                        <i class="fa fa-eye" aria-hidden="true" title="Nilai"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tfoot>
                                </table>
                            </div>
                        </div>

                        <!-- Contoh Modal -->
                        @foreach ($agendas as $agenda)
                            <div class="modal fade" id="modalSaya{{ $agenda->id }}" tabindex="-1" role="dialog"
                                aria-labelledby="modalSayaLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="modalSayaLabel">Detail Agenda</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <section class="content">
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="panel panel-pink">Nama Agenda</div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="panel panel-pink">: {{ $agenda->nama }}</div>
                                                    </div>
                                                </div>
                                                <hr />
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="panel panel-pink">Tanggal</div>
                                                    </div>
                                                    <div class="col">

                                                        <div class="panel panel-pink">:
                                                            {{ $pasaran->getHari($agenda->tanggal) . ' ' . $pasaran->getPasaran($agenda->tanggal) . '/' . $agenda->tanggal }}
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr />
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="panel panel-pink">Waktu</div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="panel panel-pink">:
                                                            {{ $agenda->waktu_mulai . '-' . $agenda->waktu_selesai }}</div>
                                                    </div>
                                                </div>
                                                <hr />
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="panel panel-pink">Lokasi</div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="panel panel-pink">: {{ $agenda->tempat }}</div>
                                                    </div>
                                                </div>
                                                <hr />
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="panel panel-pink">Divis</div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="panel panel-pink">: {{ $agenda->namaDivisi->nama }}
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr />
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="panel panel-pink">Penanggung Jawab</div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="panel panel-pink">:
                                                            {{ $agenda->penanggungjawab->nama }}</div>
                                                    </div>
                                                </div>
                                                <hr />
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="panel panel-pink">Pengisi</div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="panel panel-pink">: {{ $agenda->pengisiAgenda->nama }}
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr />
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="panel panel-pink">Jenis</div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="panel panel-pink">: {{ $agenda->jenisAgenda->nama }}
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr />
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="panel panel-pink">Deskripsi Kegiatan</div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="panel panel-pink">: {{ $agenda->deskripsi_kegiatan }}
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr />
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="panel panel-pink">Anggaran</div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="panel panel-pink">: {{ $agenda->anggaran }}</div>
                                                    </div>
                                                </div>
                                                <hr />
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="panel panel-pink">Realisasi Anggaran</div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="panel panel-pink">: {{ $agenda->realisasi_anggaran }}
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr />
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="panel panel-pink">Status</div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="panel panel-pink">: @if ($agenda->statusAgenda->nama == 'Berjalan')
                                                                <span
                                                                    class="badge badge-primary">{{ $agenda->statusAgenda->nama }}</span>
                                                            @elseif($agenda->statusAgenda->nama == 'Terlaksana')
                                                                <span
                                                                    class="badge badge-success">{{ $agenda->statusAgenda->nama }}</span>
                                                            @else
                                                                <span
                                                                    class="badge badge-danger">{{ $agenda->statusAgenda->nama }}</span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Tutup</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        {{-- endmodal --}}


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
@stop

@push('scripts')
    <script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="../../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="../../plugins/jszip/jszip.min.js"></script>
    <script src="../../plugins/pdfmake/pdfmake.min.js"></script>
    <script src="../../plugins/pdfmake/vfs_fonts.js"></script>
    <script src="../../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="../../plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="../../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <script>
        $(function() {
            $('#example1').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false
            });


        });
    </script>
@endpush
