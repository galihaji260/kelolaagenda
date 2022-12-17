
@inject('pasaran', 'App\Lib\PasaranHelper')
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
	<title>DataTables example - Mobile support (Responsive integration)</title>
	<link rel="shortcut icon" type="image/png" href="/media/images/favicon.png">
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="http://www.datatables.net/rss.xml">
	<link rel="stylesheet" type="text/css" href="/media/css/site-examples.css?_=8f7cff5ee7757412879aedf3efbfaee01">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/rowreorder/1.3.1/css/rowReorder.dataTables.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.4.0/css/responsive.dataTables.min.css">
	<style type="text/css" class="init">
	
	</style>
 <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jq-3.3.1/jszip-2.5.0/dt-1.10.20/b-1.6.1/b-colvis-1.6.1/b-html5-1.6.1/r-2.2.3/datatables.min.css"/>
 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
 <script type="text/javascript" src="https://cdn.datatables.net/v/dt/jq-3.3.1/jszip-2.5.0/dt-1.10.20/b-1.6.1/b-colvis-1.6.1/b-html5-1.6.1/r-2.2.3/datatables.min.js"></script>
	<script type="text/javascript" class="init">
  $(document).ready(function() {
    var table = $('#example').DataTable( {
        dom: 'Bfrtip',
      responsive: true,
        buttons: [
            {
                extend: 'copyHtml5',
                exportOptions: {
                    columns: [ 0, ':visible' ]
                }
            },
            {
                extend: 'excelHtml5',
                exportOptions: {
                    columns: ':visible'
                }
            },
            {
                extend: 'pdfHtml5',
                exportOptions: {
                    columns: function ( idx, data, node ) {
                      return table.column(idx).visible();
                    }
                }
            },
            'colvis'
        ]
    } );
} );


	</script>
</head>
<nav>
  <a href="{{ route('login') }}">LOGIN</a> |
  <a href="/css/">CSS</a> |
  <a href="/js/">JavaScript</a> |
  <a href="/python/">Python</a>
</nav>
<body class="wide comments example">
	<a name="top" id="top"></a>
	<div class="fw-background">
		<div></div>
	</div>
	<div class="fw-container">
		<div class="fw-header">
			<div class="nav-wrapper">
				<div class="nav-master">
					<div class="nav-item">
						
		<div class="fw-body">
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
                  <div class="col-lg-4 mb-2">
                  {!! Form::select('jenis', $jenis, $request->jenis, ['class' => 'form-control']) !!}
                  </div>
                  <div class="col-lg-4 mb-2">
                  <input type="text" class="form-control" name="keyword" value="{{ $request->keyword }}">
                  </div>
                  <div class="col-lg-4 mb-2">
                  <input type="submit" value="Cari" class="btn btn-primary">
                  <a href="{{ route('agenda.index') }}" class="btn btn-danger">Reset</a>
                  </div>
                  </div>
                </form>
                <div class="table-responsive">
                <table id="example" class="table table-bordered table-striped">
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
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($agendas as $agenda)
                  <tr>
                    <td>{{$agenda->nama_kegiatan}}</td>
                    <td>{{ $pasaran->getHari($agenda->tanggal) }}</td>
                    <td>{{ $pasaran->getPasaran($agenda->tanggal) }}</td>
                    <td>{{$agenda->tanggal}}</td>
                    <td>{{$agenda->penanggung_jawab}}</td>
                    <td>{{$agenda->pengisi}}</td>
                    <td>{{$agenda->jenis}}</td>
                    <td><span style="background-color: {{ $color[$agenda->status] ?? '#ffffff' }}; color:#ffffff; padding: 0.375rem 0.75rem;">{{$agenda->status}}</span></td>
                    <td>
                      <form action="{{ route('agenda.destroy', $agenda->id) }}" method="POST">
                        <a class="" href="{{ route('agenda.edit', $agenda->id) }}">
                        <i class="fa fa-pen" aria-hidden="true"></i>
                        </a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn">
                          <i class="fa fa-trash text-danger" aria-hidden="true"></i>
                        </button>
                        <a class="" href="{{ route('penilaiankegiatan.edit', $agenda->id) }}">
                          <i class="fa fa-tasks" aria-hidden="true" title="Nilai"></i>
                        </a>
                      </form>
                    </td>
                  </tr>
                  @endforeach
                  </tfoot>
                </table>
                </div>
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

	<div class="fw-footer">
		<div class="skew"></div>
		<div class="skew-bg"></div>
		<div class="copyright">
			<h4>DataTables</h4>
			<p>DataTables designed and created by <a href="//sprymedia.co.uk">SpryMedia Ltd</a>.<br>
			© 2007-2022 <a href="/license/mit">MIT licensed</a>. <a href="/privacy">Privacy policy</a>. <a href="/supporters">Supporters</a>.<br>
			SpryMedia Ltd is registered in Scotland, company no. SC456502.</p>
		</div>
	</div>
</body>
</html>

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
  <!-- jQuery -->
  <script src="../../plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../../dist/js/adminlte.min.js"></script>
@endpush