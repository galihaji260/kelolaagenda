<!DOCTYPE html>
<html>

<head>
    <title>Masjidku</title>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
</head>

<body>
    <!-- membuat menu navigasi -->
    <nav class="navbar navbar-default">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">

                <a class="navbar-brand" href="{{ route('login') }}">MASJIDKU</a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="#">Profil <span class="sr-only">(current)</span></a></li>
                    <li><a href="#">Portofolio</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                            aria-haspopup="true" aria-expanded="false">Tutorial <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">HTML</a></li>
                            <li><a href="#">CSS</a></li>
                            <li><a href="#">Javascript</a></li>
                            <li><a href="#">JQuery</a></li>
                            <li><a href="#">CodeIgniter</a></li>
                        </ul>
                    </li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#" data-toggle="modal" data-target="#modal-login">Login</a></li>
                    <li><button type="button" class="btn btn-primary navbar-btn" data-toggle="modal"
                            data-target="#modal-daftar">Daftar</button></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>

    <!-- Modal -->
    <div class="modal fade" id="modal-login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Modal Login</h4>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-primary">Login</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modal-daftar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Modal Daftar</h4>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-primary">Daftar</button>
                </div>
            </div>
        </div>
    </div>
    <!-- akhir modal -->

    <!-- akhir menu navigasi -->

    <!-- Carousel wrapper -->
    <!--
    ####################################################
    C A R O U S E L
    ####################################################
    -->
    <div id="carousel" class="carousel slide carousel-fade" data-ride="carousel" data-interval="6000">
        <ol class="carousel-indicators">
            <li data-target="#carousel" data-slide-to="0" class="active"></li>
            <li data-target="#carousel" data-slide-to="1"></li>
            <li data-target="#carousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <a href="https://bootstrapcreative.com/">
                    <!--
                  If you need more browser support use https://scottjehl.github.io/picturefill/
                  If a picture looks blurry on a retina device you can add a high resolution like this
                  <source srcset="img/blog-post-1000x600-2.jpg, blog-post-1000x600-2@2x.jpg 2x" media="(min-width: 768px)">

                  What image sizes should you use? This can help - https://codepen.io/JacobLett/pen/NjramL
                   -->
                    <picture>
                        <source srcset="https://dummyimage.com/2000x500/007aeb/4196e5" media="(min-width: 1400px)">
                        <source srcset="https://dummyimage.com/1400x500/#007aeb/4196e5" media="(min-width: 769px)">
                        <source srcset="https://dummyimage.com/800x500/007aeb/4196e5" media="(min-width: 577px)">
                        <img srcset="https://dummyimage.com/600x500/007aeb/4196e5" alt="responsive image"
                            class="d-block img-fluid">
                    </picture>

                    <div class="carousel-caption">
                        <div>
                            <h2>Digital Craftsmanship</h2>
                            <p>We meticously build each site to get results</p>
                            <span class="btn btn-sm btn-outline-secondary">Learn More</span>
                        </div>
                    </div>
                </a>
            </div>
            <!-- /.carousel-item -->
            <div class="carousel-item">
                <a href="https://bootstrapcreative.com/">
                    <picture>
                        <source srcset="https://dummyimage.com/2000x500/007aeb/4196e5" media="(min-width: 1400px)">
                        <source srcset="https://dummyimage.com/1400x500/007aeb/4196e5" media="(min-width: 769px)">
                        <source srcset="https://dummyimage.com/800x500/007aeb/4196e5" media="(min-width: 577px)">
                        <img srcset="https://dummyimage.com/600x500/007aeb/4196e5" alt="responsive image"
                            class="d-block img-fluid">
                    </picture>

                    <div class="carousel-caption justify-content-center align-items-center">
                        <div>
                            <h2>Every project begins with a sketch</h2>
                            <p>We work as an extension of your business to explore solutions</p>
                            <span class="btn btn-sm btn-outline-secondary">Our Process</span>
                        </div>
                    </div>
                </a>
            </div>
            <!-- /.carousel-item -->
            <div class="carousel-item">
                <a href="https://bootstrapcreative.com/">
                    <picture>
                        <source srcset="https://dummyimage.com/2000x500/007aeb/4196e5" media="(min-width: 1400px)">
                        <source srcset="https://dummyimage.com/1400x500/007aeb/4196e5" media="(min-width: 769px)">
                        <source srcset="https://dummyimage.com/800x500/007aeb/4196e5" media="(min-width: 577px)">
                        <img srcset="https://dummyimage.com/600x500/007aeb/4196e5" alt="responsive image"
                            class="d-block img-fluid">
                    </picture>

                    <div class="carousel-caption justify-content-center align-items-center">
                        <div>
                            <h2>Performance Optimization</h2>
                            <p>We monitor and optimize your site's long-term performance</p>
                            <span class="btn btn-sm btn-secondary">Learn How</span>
                        </div>
                    </div>
                </a>
            </div>
            <!-- /.carousel-item -->
        </div>
        <!-- /.carousel-inner -->
        <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!-- /.carousel -->
    <div class="container-fluid text-center">
        <p>Full width carousel with a maximum height and art direction. Resize window to see image change based on the
            size of the window.</p>
    </div>
    <!-- /.container -->










    <!-- Carousel wrapper -->
    <!-- akhir jumbotron -->
    <!-- Main content -->
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
                                            <th> Beri Nilai </th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($agendas as $agenda)
                                            <tr>
                                                <td>{{ $agenda->nama_kegiatan }}</td>
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
                                                    <a class=""
                                                        href="{{ route('penilaiankegiatan.edit', $agenda->id) }}">
                                                        <i class="fa fa-tasks" aria-hidden="true" title="Nilai"></i>
                                                    </a>
                                                </td>
                                                <td>
                                                    <form action="{{ route('agenda.destroy', $agenda->id) }}"
                                                        method="POST">
                                                        <a class=""
                                                            href="{{ route('agenda.edit', $agenda->id) }}">
                                                            <i class="fa fa-pen" aria-hidden="true"></i>
                                                        </a>
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn">
                                                            <i class="fa fa-trash text-danger" aria-hidden="true"></i>
                                                        </button>
                                                        <a class="" data-toggle="modal"
                                                            data-target="#modalSaya{{ $agenda->id }}">
                                                            <i class="fa fa-eye" aria-hidden="true"
                                                                title="Nilai"></i>
                                                        </a>
                                                    </form>
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
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close">
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
                                                        <div class="panel panel-pink">: {{ $agenda->nama_kegiatan }}
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr />
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="panel panel-pink">Tanggal</div>
                                                    </div>
                                                    <div class="col">

                                                        <div class="panel panel-pink">:
                                                            {{ $pasaran->getHari($agenda->tanggal) . ' ' . $pasaran->getPasaran($agenda->tanggal) . '/' . $agenda->tangga }}
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
                                                            {{ $agenda->waktu_mulai . '-' . $agenda->waktu_selesai }}
                                                        </div>
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
                                                        <div class="panel panel-pink">:
                                                            {{ $agenda->namaDivisi->nama }}
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
                                                        <div class="panel panel-pink">:
                                                            {{ $agenda->pengisiAgenda->nama }}
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr />
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="panel panel-pink">Jenis</div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="panel panel-pink">:
                                                            {{ $agenda->jenisAgenda->nama }}
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr />
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="panel panel-pink">Deskripsi Kegiatan</div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="panel panel-pink">:
                                                            {{ $agenda->deskripsi_kegiatan }}
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
                                                        <div class="panel panel-pink">:
                                                            {{ $agenda->realisasi_anggaran }}
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr />
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="panel panel-pink">Status</div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="panel panel-pink">: <span
                                                                class="badge badge-success">{{ $agenda->statusAgenda->nama }}</span>
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
