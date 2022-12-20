<!DOCTYPE html>
<html>
<head>
	<title>Membuat Menu Responsive Dengan CSS Dan JQuery | www.malasngoding.com</title>
	<!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
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
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="{{ route('login') }}">MASJIDKU</a>
			</div>
			
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li><a href="#">Profil <span class="sr-only">(current)</span></a></li>
					<li><a href="#">Portofolio</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Tutorial <span class="caret"></span></a>
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
					<li><button type="button" class="btn btn-primary navbar-btn" data-toggle="modal" data-target="#modal-daftar">Daftar</button></li>
				</ul>
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>	
 
	<!-- Modal -->
	<div class="modal fade" id="modal-login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
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
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
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
                    <img srcset="https://dummyimage.com/600x500/007aeb/4196e5" alt="responsive image" class="d-block img-fluid">
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
                    <img srcset="https://dummyimage.com/600x500/007aeb/4196e5" alt="responsive image" class="d-block img-fluid">
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
                    <img srcset="https://dummyimage.com/600x500/007aeb/4196e5" alt="responsive image" class="d-block img-fluid">
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
  <p>Full width carousel with a maximum height and art direction. Resize window to see image change based on the size of the window.</p>
</div>
<!-- /.container -->










<!-- Carousel wrapper -->
		<!-- akhir jumbotron -->
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
                {{-- {!! Form::select('tahun', $tahun, $request->tahun, ['class' => 'form-control']) !!} --}}
                </div>
                <div class="col-lg-4 mb-2">
                {{-- {!! Form::select('bulan', $bulan, $request->bulan, ['class' => 'form-control']) !!} --}}
                </div>
                <div class="col-lg-4 mb-2">
                {{-- {!! Form::select('divisi', $divisi, $request->divisi, ['class' => 'form-control']) !!} --}}
                </div>
                <div class="col-lg-4 mb-2">
                {{-- {!! Form::select('jenis', $jenis, $request->jenis, ['class' => 'form-control']) !!} --}}
                </div>
                <div class="col-lg-4 mb-2">
                <input type="text" class="form-control" name="keyword" value="">
                </div>
                <div class="col-lg-4 mb-2">
                <input type="submit" value="Cari" class="btn btn-primary">
                {{-- <a href="{{ route('agenda.index') }}" class="btn btn-danger">Reset</a> --}}
                </div>
                </div>
              </form>
              <div class="table-responsive">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                  <th>Rendering engine</th>
                  <th>Browser</th>
                  <th>Platform(s)</th>
                  <th>Engine version</th>
                  <th>CSS grade</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                  <td>Trident</td>
                  <td>Internet
                  Explorer 4.0
                  </td>
                  <td>Win 95+</td>
                  <td> 4</td>
                  <td>X</td>
                  </tr>
                  <tr>
                  <td>Trident</td>
                  <td>Internet
                  Explorer 5.0
                  </td>
                  <td>Win 95+</td>
                  <td>5</td>
                  <td>C</td>
                  </tr>
                  <tr>
                  <td>Trident</td>
                  <td>Internet
                  Explorer 5.5
                  </td>
                  <td>Win 95+</td>
                  <td>5.5</td>
                  <td>A</td>
                  </tr>
                  <tr>
                  <td>Trident</td>
                  <td>Internet
                  Explorer 6
                  </td>
                  <td>Win 98+</td>
                  <td>6</td>
                  <td>A</td>
                  </tr>
                  <tr>
                  <td>Trident</td>
                  <td>Internet Explorer 7</td>
                  <td>Win XP SP2+</td>
                  <td>7</td>
                  <td>A</td>
                  </tr>
                  <tr>
                  <td>Trident</td>
                  <td>AOL browser (AOL desktop)</td>
                  <td>Win XP</td>
                  <td>6</td>
                  <td>A</td>
                  </tr>
                  <tr>
                  <td>Gecko</td>
                  <td>Firefox 1.0</td>
                  <td>Win 98+ / OSX.2+</td>
                  <td>1.7</td>
                  <td>A</td>
                  </tr>
                  <tr>
                  <td>Gecko</td>
                  <td>Firefox 1.5</td>
                  <td>Win 98+ / OSX.2+</td>
                  <td>1.8</td>
                  <td>A</td>
                  </tr>
                  <tr>
                  <td>Gecko</td>
                  <td>Firefox 2.0</td>
                  <td>Win 98+ / OSX.2+</td>
                  <td>1.8</td>
                  <td>A</td>
                  </tr>
                  <tr>
                  <td>Gecko</td>
                  <td>Firefox 3.0</td>
                  <td>Win 2k+ / OSX.3+</td>
                  <td>1.9</td>
                  <td>A</td>
                  </tr>
                  <tr>
                  <td>Gecko</td>
                  <td>Camino 1.0</td>
                  <td>OSX.2+</td>
                  <td>1.8</td>
                  <td>A</td>
                  </tr>
                  <tr>
                  <td>Gecko</td>
                  <td>Camino 1.5</td>
                  <td>OSX.3+</td>
                  <td>1.8</td>
                  <td>A</td>
                  </tr>
                  <tr>
                  <td>Gecko</td>
                  <td>Netscape 7.2</td>
                  <td>Win 95+ / Mac OS 8.6-9.2</td>
                  <td>1.7</td>
                  <td>A</td>
                  </tr>
                  <tr>
                  <td>Gecko</td>
                   <td>Netscape Browser 8</td>
                  <td>Win 98SE+</td>
                  <td>1.7</td>
                  <td>A</td>
                  </tr>
                  <tr>
                  <td>Gecko</td>
                  <td>Netscape Navigator 9</td>
                  <td>Win 98+ / OSX.2+</td>
                  <td>1.8</td>
                  <td>A</td>
                  </tr>
                  <tr>
                  <td>Gecko</td>
                  <td>Mozilla 1.0</td>
                  <td>Win 95+ / OSX.1+</td>
                  <td>1</td>
                  <td>A</td>
                  </tr>
                  <tr>
                  <td>Gecko</td>
                  <td>Mozilla 1.1</td>
                  <td>Win 95+ / OSX.1+</td>
                  <td>1.1</td>
                  <td>A</td>
                  </tr>
                  <tr>
                  <td>Gecko</td>
                  <td>Mozilla 1.2</td>
                  <td>Win 95+ / OSX.1+</td>
                  <td>1.2</td>
                  <td>A</td>
                  </tr>
                  <tr>
                  <td>Gecko</td>
                  <td>Mozilla 1.3</td>
                  <td>Win 95+ / OSX.1+</td>
                  <td>1.3</td>
                  <td>A</td>
                  </tr>
                  <tr>
                  <td>Gecko</td>
                  <td>Mozilla 1.4</td>
                  <td>Win 95+ / OSX.1+</td>
                  <td>1.4</td>
                  <td>A</td>
                  </tr>
                  <tr>
                  <td>Gecko</td>
                  <td>Mozilla 1.5</td>
                  <td>Win 95+ / OSX.1+</td>
                  <td>1.5</td>
                  <td>A</td>
                  </tr>
                  <tr>
                  <td>Gecko</td>
                  <td>Mozilla 1.6</td>
                  <td>Win 95+ / OSX.1+</td>
                  <td>1.6</td>
                  <td>A</td>
                  </tr>
                  <tr>
                  <td>Gecko</td>
                  <td>Mozilla 1.7</td>
                  <td>Win 98+ / OSX.1+</td>
                  <td>1.7</td>
                  <td>A</td>
                  </tr>
                  <tr>
                  <td>Gecko</td>
                  <td>Mozilla 1.8</td>
                  <td>Win 98+ / OSX.1+</td>
                  <td>1.8</td>
                  <td>A</td>
                  </tr>
                  <tr>
                  <td>Gecko</td>
                  <td>Seamonkey 1.1</td>
                  <td>Win 98+ / OSX.2+</td>
                  <td>1.8</td>
                  <td>A</td>
                  </tr>
                  <tr>
                  <td>Gecko</td>
                  <td>Epiphany 2.20</td>
                  <td>Gnome</td>
                  <td>1.8</td>
                  <td>A</td>
                  </tr>
                  <tr>
                  <td>Webkit</td>
                  <td>Safari 1.2</td>
                  <td>OSX.3</td>
                  <td>125.5</td>
                  <td>A</td>
                  </tr>
                  <tr>
                  <td>Webkit</td>
                  <td>Safari 1.3</td>
                  <td>OSX.3</td>
                  <td>312.8</td>
                  <td>A</td>
                  </tr>
                  <tr>
                  <td>Webkit</td>
                  <td>Safari 2.0</td>
                  <td>OSX.4+</td>
                  <td>419.3</td>
                  <td>A</td>
                  </tr>
                  <tr>
                  <td>Webkit</td>
                  <td>Safari 3.0</td>
                  <td>OSX.4+</td>
                  <td>522.1</td>
                  <td>A</td>
                  </tr>
                  <tr>
                  <td>Webkit</td>
                  <td>OmniWeb 5.5</td>
                  <td>OSX.4+</td>
                  <td>420</td>
                  <td>A</td>
                  </tr>
                  <tr>
                  <td>Webkit</td>
                  <td>iPod Touch / iPhone</td>
                  <td>iPod</td>
                  <td>420.1</td>
                  <td>A</td>
                  </tr>
                  <tr>
                  <td>Webkit</td>
                  <td>S60</td>
                  <td>S60</td>
                  <td>413</td>
                  <td>A</td>
                  </tr>
                  <tr>
                  <td>Presto</td>
                  <td>Opera 7.0</td>
                  <td>Win 95+ / OSX.1+</td>
                  <td>-</td>
                  <td>A</td>
                  </tr>
                  <tr>
                  <td>Presto</td>
                  <td>Opera 7.5</td>
                  <td>Win 95+ / OSX.2+</td>
                  <td>-</td>
                  <td>A</td>
                  </tr>
                  <tr>
                  <td>Presto</td>
                  <td>Opera 8.0</td>
                  <td>Win 95+ / OSX.2+</td>
                  <td>-</td>
                  <td>A</td>
                  </tr>
                  <tr>
                  <td>Presto</td>
                  <td>Opera 8.5</td>
                  <td>Win 95+ / OSX.2+</td>
                  <td>-</td>
                  <td>A</td>
                  </tr>
                  <tr>
                  <td>Presto</td>
                  <td>Opera 9.0</td>
                  <td>Win 95+ / OSX.3+</td>
                  <td>-</td>
                  <td>A</td>
                  </tr>
                  <tr>
                  <td>Presto</td>
                  <td>Opera 9.2</td>
                  <td>Win 88+ / OSX.3+</td>
                  <td>-</td>
                  <td>A</td>
                  </tr>
                  <tr>
                  <td>Presto</td>
                  <td>Opera 9.5</td>
                  <td>Win 88+ / OSX.3+</td>
                  <td>-</td>
                  <td>A</td>
                  </tr>
                  <tr>
                  <td>Presto</td>
                  <td>Opera for Wii</td>
                  <td>Wii</td>
                  <td>-</td>
                  <td>A</td>
                  </tr>
                  <tr>
                  <td>Presto</td>
                  <td>Nokia N800</td>
                  <td>N800</td>
                  <td>-</td>
                  <td>A</td>
                  </tr>
                  <tr>
                  <td>Presto</td>
                  <td>Nintendo DS browser</td>
                  <td>Nintendo DS</td>
                  <td>8.5</td>
                  <td>C/A<sup>1</sup></td>
                  </tr>
                  <tr>
                  <td>KHTML</td>
                  <td>Konqureror 3.1</td>
                  <td>KDE 3.1</td>
                  <td>3.1</td>
                  <td>C</td>
                  </tr>
                  <tr>
                  <td>KHTML</td>
                  <td>Konqureror 3.3</td>
                  <td>KDE 3.3</td>
                  <td>3.3</td>
                  <td>A</td>
                  </tr>
                  <tr>
                  <td>KHTML</td>
                  <td>Konqureror 3.5</td>
                  <td>KDE 3.5</td>
                  <td>3.5</td>
                  <td>A</td>
                  </tr>
                  <tr>
                  <td>Tasman</td>
                  <td>Internet Explorer 4.5</td>
                  <td>Mac OS 8-9</td>
                  <td>-</td>
                  <td>X</td>
                  </tr>
                  <tr>
                  <td>Tasman</td>
                  <td>Internet Explorer 5.1</td>
                  <td>Mac OS 7.6-9</td>
                  <td>1</td>
                  <td>C</td>
                  </tr>
                  <tr>
                  <td>Tasman</td>
                  <td>Internet Explorer 5.2</td>
                  <td>Mac OS 8-X</td>
                  <td>1</td>
                  <td>C</td>
                   </tr>
                  <tr>
                  <td>Misc</td>
                  <td>NetFront 3.1</td>
                  <td>Embedded devices</td>
                  <td>-</td>
                  <td>C</td>
                  </tr>
                  <tr>
                  <td>Misc</td>
                  <td>NetFront 3.4</td>
                  <td>Embedded devices</td>
                  <td>-</td>
                  <td>A</td>
                  </tr>
                  <tr>
                  <td>Misc</td>
                  <td>Dillo 0.8</td>
                  <td>Embedded devices</td>
                  <td>-</td>
                  <td>X</td>
                  </tr>
                  <tr>
                  <td>Misc</td>
                  <td>Links</td>
                  <td>Text only</td>
                  <td>-</td>
                  <td>X</td>
                  </tr>
                  <tr>
                  <td>Misc</td>
                  <td>Lynx</td>
                  <td>Text only</td>
                  <td>-</td>
                  <td>X</td>
                  </tr>
                  <tr>
                  <td>Misc</td>
                  <td>IE Mobile</td>
                  <td>Windows Mobile 6</td>
                  <td>-</td>
                  <td>C</td>
                  </tr>
                  <tr>
                  <td>Misc</td>
                  <td>PSP browser</td>
                  <td>PSP</td>
                  <td>-</td>
                  <td>C</td>
                  </tr>
                  <tr>
                  <td>Other browsers</td>
                  <td>All others</td>
                  <td>-</td>
                  <td>-</td>
                  <td>U</td>
                  </tr>
                  </tbody>
                  <tfoot>
                  <tr>
                  <th>Rendering engine</th>
                  <th>Browser</th>
                  <th>Platform(s)</th>
                  <th>Engine version</th>
                  <th>CSS grade</th>
                  </tr>
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
$(function () {
  $('#example1').DataTable({
    "paging": true,
    "lengthChange": false,
    "searching": false
  });
});
</script>
@endpush