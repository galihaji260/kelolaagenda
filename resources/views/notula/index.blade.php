@extends('layouts.master')

@section('content')
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
                            <h3 class="card-title">Notula</h3>
                            <div class="card-tools">
                                <a class="btn btn-primary" href="{{ route('notula.create') }}">Tambah</a>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        @if (session('status'))
                            <div class="alert alert-success">{{ session('status') }}</div>
                        @endif
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Pencatat</th>
                                        <th>Tanggal</th>
                                        <th>Judul</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($notulas as $key => $notula)
                                        <tr>

                                            <td>{{ ++$key }}</td>
                                            <td>{{ $notula->pencatat->nama }}</td>
                                            <td>{{ $notula->tanggal }}</td>
                                            <td>{{ $notula->judul }}</td>
                                            <td>
                                                <form action="{{ route('notula.destroy', $notula->id) }}" method="POST">
                                                    <a class="" href="{{ route('notula.edit', $notula->id) }}">
                                                        <i class="fa fa-pen" aria-hidden="true"></i>
                                                    </a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn">
                                                        <i class="fa fa-trash text-danger" aria-hidden="true"></i>
                                                    </button>
                                                    <a class="" data-toggle="modal"
                                                        data-target="#modalSaya{{ $notula->id }}">
                                                        <i class="fa fa-eye" aria-hidden="true" title="Nilai"></i>
                                                    </a>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>

                            </table>
                        </div>

                        <!-- Contoh Modal -->
                        @foreach ($notulas as $notula)
                            <div class="modal fade" id="modalSaya{{ $notula->id }}" tabindex="-1" role="dialog"
                                aria-labelledby="modalSayaLabel" aria-hidden="true">
                                <div class="modal-dialog modal-xl modal-dialog-scrollable" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="modalSayaLabel">Detail Notula</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <section class="content">
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="panel panel-pink">Judul</div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="panel panel-pink">: {{ $notula->judul }}</div>
                                                    </div>
                                                </div>
                                                <hr />
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="panel panel-pink">Tanggal</div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="panel panel-pink">: {{ $notula->tanggal }}</div>
                                                    </div>
                                                </div>
                                                <hr />
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="panel panel-pink">Peserta</div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="panel panel-pink">: {{ $notula->peserta }}</div>
                                                    </div>
                                                </div>
                                                <hr />
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="panel panel-pink">Konten</div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="panel panel-pink">:</div>
                                                    </div>
                                                </div>
                                                <hr />
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="panel panel-pink">{!! $notula->konten !!}</div>
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
