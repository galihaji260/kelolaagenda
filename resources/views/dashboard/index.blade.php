@extends('layouts.master')

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
                            <h3 class="card-title">Dashboard</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12 col-lg-6">
                                    <div class="card card-primary">
                                        <div class="card-header">
                                            <h3 class="card-title">Statistik Agenda</h3>
                                        </div>
                                        <!-- /.card-header -->
                                        <div class="card-body">
                                            <div id="evalagenda" style="width:100%"></div>
                                        </div>
                                        <!-- /.card-body -->
                                    </div>

                                </div>
                                <div class="col-md-12 col-lg-6">
                                    <div class="card card-primary">
                                        <div class="card-header">
                                            <h3 class="card-title">Statistik Kontributor Pengisi</h3>
                                        </div>
                                        <!-- /.card-header -->
                                        <div class="card-body">
                                            <div id="kontributor" style="width:100%"></div>
                                        </div>
                                        <div class="card-body">
                                            <div id="kontributor1" style="width:100%"></div>
                                        </div>
                                        <!-- /.card-body -->
                                    </div>

                                </div>
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
    <!-- /.content -->
@stop

@push('scripts')
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {
            'packages': ['bar']
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var obj = JSON.parse(@json($data['agenda']));
            console.log(obj)
            var i;
            var parameter = [
                ['Tahun', 'Berjalan', 'Terlaksana', 'Dibatal', 'Total']
            ];
            for (i = 0; i < obj.length; i++) {
                parameter.push(obj[i]);
            }
            var data = google.visualization.arrayToDataTable(parameter);
            var options = {
                chart: {
                    title: 'Statistik Kegiatan di hitung pertahun',

                },
                colors: ['#007bff', '#28a745', '#dc3545', '#fdf711']

            };
            console.log(options)
            var chart = new google.charts.Bar(document.getElementById('evalagenda'));
            chart.draw(data, google.charts.Bar.convertOptions(options));
        }
    </script>
    <script type="text/javascript">
        google.charts.load('current', {
            'packages': ['corechart']
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var obj = JSON.parse(@json($data['kontributor']));
            var i;
            var parameter = [
                ['Nama Pengisi', 'Jumlah Agenda']
            ];
            for (i = 0; i < obj.length; i++) {
                parameter.push(obj[i]);
            }
            var data = google.visualization.arrayToDataTable(parameter);
            var options = {
                title: 'Tahun Lalu'
            };
            var chart = new google.visualization.PieChart(document.getElementById('kontributor'));
            chart.draw(data, options);
        }
    </script>

    <script type="text/javascript">
        google.charts.load('current', {
            'packages': ['corechart']
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var obj = JSON.parse(@json($data['kontributor1']));
            var i;
            var parameter = [
                ['Nama Pengisi', 'Jumlah Agenda']
            ];
            for (i = 0; i < obj.length; i++) {
                parameter.push(obj[i]);
            }
            var data = google.visualization.arrayToDataTable(parameter);
            var options = {
                title: 'Tahun Sekarang'
            };
            var chart = new google.visualization.PieChart(document.getElementById('kontributor1'));
            chart.draw(data, options);
        }
    </script>
@endpush
