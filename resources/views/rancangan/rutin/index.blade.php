@extends('layouts.master')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">

        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Rancangan Rutin</h3>
                        <div class="card-tools">
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('rancanganrutin.yasinan') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12 mb-2">
                                    <label>Yasinan</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-2 mb-2">
                                    <select id="inputTahun" name="tahun" class="form-control custom-select" required>
                                        <option value="" selected disabled>Pilih Tahun</option>
                                        <option value="2022">2022</option>
                                        <option value="2023">2023</option>
                                        <option value="2024">2024</option>
                                        <option value="2025">2025</option>
                                        <option value="2026">2026</option>
                                        <option value="2027">2027</option>
                                    </select>
                                </div>
                                <div class="col-lg-2 mb-2">
                                    <select id="divisi" name="divisi" class="form-control custom-select" required>
                                        @foreach ($divisi as $key => $value)
                                            <option value="{{ $key }}">{{ $value }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-lg-2 mb-2">
                                    <select id="inputHari" name="hari" class="form-control custom-select" required>
                                        <option value="" selected disabled>Pilih Hari</option>
                                        <option value="Monday">Senin</option>
                                        <option value="Tuesday">Selasa</option>
                                        <option value="Wednesday">Rabu</option>
                                        <option value="Thursday">Kamis</option>
                                        <option value="Friday">Jum'at</option>
                                        <option value="Saturday">Sabtu</option>
                                        <option value="Sunday">Minggu</option>
                                    </select>
                                </div>
                                <div class="col-lg-2 mb-2">
                                    <input type="text" name="nama_kegiatan" value="Yasinan" class="form-control">
                                </div>
                                <div class="col-lg-2 mb-2">
                                    <input type="time" name="mulai" value="" placeholder="Mulai"
                                        class="form-control" required>
                                </div>
                                <div class="col-lg-2 mb-2">
                                    <input type="time" name="selesai" value="" placeholder="Selesai"
                                        class="form-control" required>
                                </div>
                                <div class="col-lg-2 mb-2">
                                    <select id="pic" name="pic" class="form-control custom-select" required>
                                        @foreach ($pic as $key => $value)
                                            <option value="{{ $key }}">{{ $value }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-12">
                                    <input type="submit" value="Generate" name="submit" class="btn btn-success">
                                </div>
                            </div>
                        </form>
                        <form action="{{ route('rancanganrutin.lainnya') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-12 mb-2 mt-5">
                                    <label>Kegiatan Rutin Lain</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-2 mb-2">
                                    <select id="inputTahun" name="tahun" class="form-control custom-select" required>
                                        <option value="" selected disabled>Pilih Tahun</option>
                                        <option value="2022">2022</option>
                                        <option value="2023">2023</option>
                                        <option value="2024">2024</option>
                                        <option value="2025">2025</option>
                                        <option value="2026">2026</option>
                                        <option value="2027">2027</option>
                                    </select>
                                </div>
                                <div class="col-lg-2 mb-2">
                                    <select id="inputHari" name="hari" class="form-control custom-select" required>
                                        <option value="" selected disabled>Pilih Hari</option>
                                        <option value="Monday">Senin</option>
                                        <option value="Tuesday">Selasa</option>
                                        <option value="Wednesday">Rabu</option>
                                        <option value="Thursday">Kamis</option>
                                        <option value="Friday">Jum'at</option>
                                        <option value="Saturday">Sabtu</option>
                                        <option value="Sunday">Minggu</option>
                                    </select>
                                </div>
                                <div class="col-lg-2 mb-2">
                                    <select id="inputPasar" name="pasar" class="form-control custom-select" required>
                                        <option value="" selected disabled>Pilih Pasar</option>
                                        <option value="pon">Pon</option>
                                        <option value="wage">Wage</option>
                                        <option value="kliwon">Kliwon</option>
                                        <option value="legi">Legi</option>
                                        <option value="pahing">Pahing</option>
                                    </select>
                                </div>
                                <div class="col-lg-2 mb-2">
                                    <input type="time" name="mulai" value="" placeholder="Mulai"
                                        class="form-control" required>
                                </div>
                                <div class="col-lg-2 mb-2">
                                    <input type="time" name="selesai" value="" placeholder="Selesai"
                                        class="form-control" required>
                                </div>
                                <div class="col-lg-2 mb-2">
                                    <input type="text" name="tempat" value="" placeholder="Tempat"
                                        class="form-control">
                                </div>
                                <div class="col-lg-2 mb-2">
                                    <input type="text" name="nama_kegiatan" placeholder="Kegiatan"
                                        class="form-control">
                                </div>
                                <div class="col-lg-2 mb-2">
                                    {!! Form::select('divisi', $divisi, '', ['class' => 'form-control']) !!}
                                </div>
                                <div class="col-lg-2 mb-2">
                                    {!! Form::select('pic', $pic, '', ['class' => 'form-control']) !!}
                                </div>
                                <div class="col-lg-2 mb-2">
                                    {!! Form::select('pengisi', $personalData, '', ['class' => 'form-control']) !!}
                                </div>
                                <div class="col-12">
                                    <input type="submit" value="Generate" name="submit" class="btn btn-success">
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
    </section>
    <!-- /.content -->
@endsection

@push('scripts')
<script>
    $(document).ready(function() {
        $('#layanan').on('change', function() {
            var LayananID = $(this).val();
            console.log(LayananID);
            if (LayananID) {
                $.ajax({
                    url: '/pengaduan/getSubKategori/' + LayananID,
                    type: "GET",
                    data: {
                        "_token": "{{ csrf_token() }}"
                    },
                    dataType: "json",
                    success: function(data) {
                        if (data) {
                            $('#subkategori').empty();
                            $('#subkategori').append('<option hidden>Pilih Sub Kategori</option>');
                            $.each(data, function(key, val) {
                                $('select[name="subkategori"]').append('<option value="' + key + '">' + val + '</option>');
                            });
                        } else {
                            $('#subkategori').empty();
                        }
                    }
                });
            } else {
                $('#subkategori').empty();
            }
        });
    });
</script>
@endpush


