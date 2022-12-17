@extends('layouts.master')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Kegiatan Rutin Lainnya</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Kegiatan Rutin Lainnya</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
  <form action="{{ route('rancanganrutin.lainnyastore') }}" method="POST">
    @csrf
    <div class="row">
      <div class="col-md-12">
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Kegiatan Rutin Lainnya</h3>

            <div class="card-tools">
            </div>
          </div>
          <div class="card-body">
          <table id="example1" class="table table-bordered table-striped table-responsive">
              <thead>
                <tr>
                  <th style="white-space: nowrap;">Nama Kegiatan</th>
                  <th style="white-space: nowrap;">Pasaran</th>
                  <th style="white-space: nowrap;">Pengisi</th>
                  <th style="white-space: nowrap;">Tanggal</th>
                  <th style="white-space: nowrap;">Waktu</th>
                  <th style="white-space: nowrap;">Lokasi</th>
                  <th style="white-space: nowrap;"></th>
                </tr>
              </thead>
              <tbody>
                @php
                $i = 0;
                @endphp
                @foreach($dates as $date)
                @php
                $i++;
                @endphp
                <tr id="data{{ $i }}">
                  <td><input type="text" name="kegiatan[]" class="form-control" value="{{ $req['nama_kegiatan'] }}" readonly required></td>
                  <td><input type="text" name="pasaran[]" value="{{ $date['pasaran'] }}" class="form-control" style="
    width: 80px;" readonly required></td>
                  <td>
                    {!! Form::select('pengisi[]', $personalData, $req['pengisi'], ['class' => 'form-control','readonly', 'style="width:100px"']) !!}
                    <input type="hidden" name="penanggungjawab[]" value="{{ $req['pic'] }}" class="form-control">
                    <input type="hidden" name="divisi[]" value="{{ $req['divisi'] }}" class="form-control">
                    <input type="hidden" name="waktu_mulai[]" value="{{ $req['mulai'] }}">
                    <input type="hidden" name="waktu_selesai[]" value="{{ $req['selesai'] }}">
                  </td>
                  <td><input type="text" name="tanggal[]" value="{{ $date['tanggal'] }}" class="form-control" style="
    width: 110px;" readonly></td>
                  <td><input type="text" name="waktu[]" class="form-control" value="{{ $req['mulai'].'-'.$req['selesai']}}" style="
    width: 150px;" required readonly></td>
                  <td><input type="text" name="lokasi[]" value="{{ $req['tempat'] }}" class="form-control" style="
    width: 110px;"></td>
                  <td style="width: 5%;">
                    <button onclick="deleteRow({{ $i}})" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <a href="{{ route('rancanganrutin.index') }}" class="btn btn-secondary">Back</a>
        <input type="submit" value="Save" name="submit" class="btn btn-success float-right">
      </div>
    </div>
  </form>
</section>
<!-- /.content -->
@stop

@push('scripts')
<script>
  function deleteRow(data){
    $('#data'+data).remove();
  }
</script>
@endpush