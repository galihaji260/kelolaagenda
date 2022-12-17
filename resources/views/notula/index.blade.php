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
            <h3 class="card-title">Anggota</h3>
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
                  <th>Judul Notula</th>
                  <th>Tanggal dibuat</th>
                  <th>Pencatat</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Rapat akhir tahun 2022</td>
                  <td>12/12/2022</td>
                  <td>Bp A</td>
                  <td>
                    <form action="" method="POST">
                      <a class="" href="">
                        <i class="fa fa-pen" aria-hidden="true"></i>
                      </a>
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn">
                        <i class="fa fa-trash text-danger" aria-hidden="true"></i>
                      </button>
                    </form>
                  </td>
                </tr>

                <tr>
                  <td>2</td>
                  <td>Rapat acara pembentukan panitia</td>
                  <td>11/05/2022</td>
                  <td>Bp A</td>
                  <td>
                    <form action="" method="POST">
                      <a class="" href="">
                        <i class="fa fa-pen" aria-hidden="true"></i>
                      </a>
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn">
                        <i class="fa fa-trash text-danger" aria-hidden="true"></i>
                      </button>
                    </form>
                  </td>
                </tr>

                <tr>
                  <td>3</td>
                  <td>Musyawarah sawah hibah</td>
                  <td>12/12/2022</td>
                  <td>Bp Andika</td>
                  <td>
                    <form action="" method="POST">
                      <a class="" href="">
                        <i class="fa fa-pen" aria-hidden="true"></i>
                      </a>
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn">
                        <i class="fa fa-trash text-danger" aria-hidden="true"></i>
                      </button>
                    </form>
                  </td>
                </tr>

                <tr>
                  <td>4</td>
                  <td>Persiapan ramadhan</td>
                  <td>14/03/2021</td>
                  <td>Bp A</td>
                  <td>
                    <form action="" method="POST">
                      <a class="" href="">
                        <i class="fa fa-pen" aria-hidden="true"></i>
                      </a>
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn">
                        <i class="fa fa-trash text-danger" aria-hidden="true"></i>
                      </button>
                    </form>
                  </td>
                </tr>
              
              </tbody>
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
  $(function () {
    $('#example1').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false
    });
  });
</script>
@endpush