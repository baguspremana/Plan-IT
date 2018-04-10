@extends('layouts.main')

@section('content')
	<header id="header" class="header-fixed">
    <div class="container">

      <div id="logo" class="pull-left">
        <h1><a href="#intro" class="scrollto">PLANT IT</a></h1>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-has-children"><a href="#">Lokasi Lahan</a>
          	<ul>
              <li><a href="#">Denpasar</a></li>
              <li><a href="#">Badung</a></li>
              <li><a href="#">Tabanan</a></li>
              <li><a href="#">Bangli</a></li>
              <li><a href="#">Buleleng</a></li>
              <li><a href="#">Klungkung</a></li>
              <li><a href="#">Karangasem</a></li>
              <li><a href="#">Jembrana</a></li>
              <li><a href="#">Gianyar</a></li>
            </ul>
          </li>			
          <li class="menu-has-children"><a href="#">Nama User</a>
          	<ul>
              <li><a href="#">Profile</a></li>
              <li><a href="#">Sign Out</a></li>
            </ul>
          </li>	
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <section id="lahan" style="margin-top: 80px;">
  	<div class="container">
  		<form class="form-inline">
		  	<div class="form-group mb-2">
		    	<input type="text" class="form-control" id="laha" placeholder="Cari Lahan">
		  	</div>
  			<button type="submit" class="btn btn-success mx-sm-2 mb-2">Cari</button>
  		</form>

  		<div class="row about-cols" style="margin-top: 40px;">

  			<div class="col-md-4 wow fadeInUp">
	            <div class="about-col">
	              <div class="img">
	                <img src="img/petani.jpg">
	              </div>
	              <h2>Lahan di Tabanan</h2>
	              <center>
		              <p>
		                <b>Luas :</b><br>2 Are
		              </p>
		              <p>
		                <b>Cocok Untuk Tanaman :</b><br>Cabai, Jagung, Kelapa Sawit
		              </p>
		              <a href="#" class="btn-get-started">Selengkapnya</a>
	          	  </center>
	            </div>
          	</div>

          	<div class="col-md-4 wow fadeInUp">
	            <div class="about-col">
	              <div class="img">
	                <img src="img/petani.jpg">
	              </div>
	              <h2>Lahan di Tabanan</h2>
	              <center>
		              <p>
		                <b>Luas :</b><br>2 Are
		              </p>
		              <p>
		                <b>Cocok Untuk Tanaman :</b><br>Cabai, Jagung, Kelapa Sawit
		              </p>
		              <a href="#" class="btn-get-started">Selengkapnya</a>
	          	  </center>
	            </div>
          	</div>

          	<div class="col-md-4 wow fadeInUp">
	            <div class="about-col">
	              <div class="img">
	                <img src="img/petani.jpg">
	              </div>
	              <h2>Lahan di Tabanan</h2>
	              <center>
		              <p>
		                <b>Luas :</b><br>2 Are
		              </p>
		              <p>
		                <b>Cocok Untuk Tanaman :</b><br>Cabai, Jagung, Kelapa Sawit
		              </p>
		              <a href="#" class="btn-get-started">Selengkapnya</a>
	          	  </center>
	            </div>
          	</div>

  		</div>

  		<div class="row about-cols" style="margin-bottom: 40px;">

  			<div class="col-md-4 wow fadeInUp">
	            <div class="about-col">
	              <div class="img">
	                <img src="img/petani.jpg">
	              </div>
	              <h2>Lahan di Tabanan</h2>
	              <center>
		              <p>
		                <b>Luas :</b><br>2 Are
		              </p>
		              <p>
		                <b>Cocok Untuk Tanaman :</b><br>Cabai, Jagung, Kelapa Sawit
		              </p>
		              <a href="#" class="btn-get-started">Selengkapnya</a>
	          	  </center>
	            </div>
          	</div>

          	<div class="col-md-4 wow fadeInUp">
	            <div class="about-col">
	              <div class="img">
	                <img src="img/petani.jpg">
	              </div>
	              <h2>Lahan di Tabanan</h2>
	              <center>
		              <p>
		                <b>Luas :</b><br>2 Are
		              </p>
		              <p>
		                <b>Cocok Untuk Tanaman :</b><br>Cabai, Jagung, Kelapa Sawit
		              </p>
		              <a href="#" class="btn-get-started">Selengkapnya</a>
	          	  </center>
	            </div>
          	</div>

          	<div class="col-md-4 wow fadeInUp">
	            <div class="about-col">
	              <div class="img">
	                <img src="img/petani.jpg">
	              </div>
	              <h2>Lahan di Tabanan</h2>
	              <center>
		              <p>
		                <b>Luas :</b><br>2 Are
		              </p>
		              <p>
		                <b>Cocok Untuk Tanaman :</b><br>Cabai, Jagung, Kelapa Sawit
		              </p>
		              <a href="#" class="btn-get-started">Selengkapnya</a>
	          	  </center>
	            </div>
          	</div>

  		</div>

  	</div>
  </section>

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 text-lg-left text-center">
          <div class="copyright">
            &copy; Copyright <strong>Plant IT</strong>. All Rights Reserved.
          </div>
          <div class="credits">
            <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Avilon
            -->
            Template by <a href="https://bootstrapmade.com/">BootstrapMade</a>. Modify By Plant IT
          </div>
        </div>
        <!--div class="col-lg-6">
          <nav class="footer-links text-lg-right text-center pt-2 pt-lg-0">
            <a href="#intro" class="scrollto">Home</a>
            <a href="#about" class="scrollto">About</a>
          </nav>
        </div-->
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>  

@endsection
