<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Masjidku</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
    <style>
        .card-header {
            border-bottom: solid #FBC02D;
        }

        .content-wrapper {
            padding-top: 30px;
        }

        .content-header {
            padding: 10px 0.5rem !important;
        }

        @media (max-width: 991.98px) {
            .breadcrumbs {
                z-index: 1036 !important;
            }
        }
    </style>
</head>

<body class="hold-transition sidebar-mini layout-navbar-fixed layout-fixed">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light"
            style="background-color: #f4f6f9; border-bottom:#f4f6f9 solid 1px">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                            class="fas fa-bars"></i></a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Notifications Dropdown Menu -->
                <li>
                    <h5 class="nav-link">Hai, {{ Auth::user()->personData->nama }}</h5>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#" aria-expanded="false">
                        <img src="../../dist/img/user2-160x160.jpg" class="img-circle elevation-2" width="24"
                            alt="User Image">
                        <span><i class="fas fa-sort-down ml-1"></i></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" style="left: inherit; right: 0px;">
                        <a href="{{ route('logout') }}" class="dropdown-item">
                            <i class="fas fa-sign-out-alt mr-2"></i> Logout
                        </a>
                    </div>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->
        <div class="breadcrumbs"
            style="background-color: #f4f6f9;position: fixed; z-index:1039; display:block; width:250px;position: fixed;overflow-y: hidden;">
            <div
                style=" z-index:1039; display:block; width:100%; padding:5px; background-color:#ffffff; padding-left:20px; margin-top:5px;">
                Home > {{ $breadcrumb ?? '' }}</div>
        </div>
        <!-- Main Sidebar Container -->

        <aside class="main-sidebar sidebar-light-primary">
            <!-- Brand Logo -->
            <a href="{{ route('welcome') }}" class="brand-link"
                style="background-color: #f4f6f9; border-bottom:#f4f6f9 solid 1px;">
                <img src="../../dist/img/AdminLTELogo.png" alt="Masjidku Logo" class="brand-image img-circle"
                    style="opacity: .8">
                <span class="brand-text font-weight-light">Masjidku</span>
            </a>
            <!-- Sidebar -->
            <div class="sidebar" style="background-color: #f4f6f9;">
                <!-- Sidebar user (optional) -->
                <!-- Sidebar Menu -->
                <nav class="mt-5" style="height: 90%; margin-bottom: 10px; background: white;">
                    <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview"
                        role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="{{ route('dashboard.index') }}"
                                class="nav-link {{ strpos(Route::currentRouteName(), 'dashboard') === 0 ? 'active' : '' }}">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('agenda.index') }}"
                                class="nav-link {{ strpos(Route::currentRouteName(), 'agenda') === 0 ? 'active' : '' }}">
                                <i class="nav-icon fas fa-calendar"></i>
                                <p>
                                    Agenda
                                </p>
                            </a>
                        </li>
                        @if (Auth::user()->userRole->nama == 'Admin')
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-clipboard"></i>
                                    <p>
                                        Rancangan
                                        <i class="fas fa-angle-left right"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="{{ route('rancanganrutin.index') }}" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Rutin</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('rancanganbiasa.index') }}" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Biasa</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        @endif
                        <li class="nav-item">
                            <a href="{{ route('anggota.index') }}"
                                class="nav-link {{ strpos(Route::currentRouteName(), 'anggota') === 0 ? 'active' : '' }}">
                                <i class="nav-icon fas fa-users"></i>
                                <p>
                                    Anggota
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('notula.index') }}"
                                class="nav-link {{ strpos(Route::currentRouteName(), 'notula') === 0 ? 'active' : '' }}">
                                <i class="nav-icon fas fa-book"></i>
                                <p>
                                    Notula
                                </p>
                            </a>
                        </li>
                        <li
                            class="nav-item {{ preg_match('/pengisiyasinan|jenisagenda/', Route::currentRouteName()) ? 'menu-open' : '' }}">
                            <a href="#"
                                class="nav-link {{ preg_match('/pengisiyasinan|jenisagenda/', Route::currentRouteName()) ? 'active' : '' }}">
                                <i class="nav-icon fas fa-wrench"></i>
                                <p>
                                    Master Data
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('pengisiyasinan.index') }}"
                                        class="nav-link {{ strpos(Route::currentRouteName(), 'pengisiyasinan') === 0 ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Pengisi Yasinan</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('jenisagenda.index') }}"
                                        class="nav-link {{ strpos(Route::currentRouteName(), 'jenisagenda') === 0 ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Jenis Agenda</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <div
            style="background-color: #f4f6f9;position: fixed; z-index:1036; display:block; width:100%;position: fixed;overflow-y: hidden;">
            <div
                style=" z-index:1039; display:block; width:100%; padding:5px; background-color:#ffffff; padding-left:20px; margin-top:5px;">
                Home &gt; {{ $breadcrumb ?? '' }}</div>
        </div>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            @yield('content')
        </div>
        <!-- /.content-wrapper -->

        <footer class="main-footer">
            <div class="float-right d-none d-sm-block">
                <b>Version</b> 1.0.0
            </div>
            <strong>Copyright &copy; 2022.</strong> All rights reserved.
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="../../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/adminlte.min.js"></script>
    @stack('scripts')
</body>

</html>
