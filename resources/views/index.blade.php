@extends('layouts.main')

@section('content')

<header id="header">
        <div class="container">
    
          <div id="logo" class="pull-left">
            <h1><a href="#intro" class="scrollto">PLANT IT</a></h1>
          </div>
    
          <nav id="nav-menu-container">
            <ul class="nav-menu">
              <li class="menu-active"><a href="#intro">Home</a></li>
              <li><a href="#about">About Us</a></li>
              <li><a href="#features">How To Use</a></li>
              <li><a href="#team">Team</a></li>
              <li><a href="#gallery">Our Gallery</a></li>
              <li><a href="#contact">Contact Us</a></li>
              <li><a href="login.html">Login</a></li>
              <li><a href="sign-up.html">Sign Up</a></li>
            </ul>
          </nav><!-- #nav-menu-container -->
        </div>
      </header><!-- #header -->
    
      <!--==========================
        Intro Section
      ============================-->
      <section id="intro">
    
        <div class="intro-text">
          <h2>Welcome to Plant IT</h2>
          <p>We are the team that helps bring the landowner together with the entrepreneur</p>
          <a href="#about" class="btn-get-started scrollto">Get Started</a>
        </div>
    
      </section><!-- #intro -->
    
      <main id="main">
    
        <!--==========================
          About Us Section
        ============================-->
        <section id="about" class="section-bg">
          <div class="container-fluid">
            <div class="section-header">
              <h3 class="section-title">About Us</h3>
              <span class="section-divider"></span>
              <p class="section-description">
                Plant IT Website merupakan sebuah layanan website yang bergerak di bidang pertanian<br>
                Plant IT memberikan solusi terhadap kesulitan modal yang dialami oleh petani
              </p>
            </div>
    
            <div class="row">
              <div class="col-lg-6 about-img wow fadeInLeft">
              <img src="{{asset('img/padi.jpg')}}" alt="">
              </div>
    
              <div class="col-lg-6 content wow fadeInRight">
                <h2>Plan IT Website</h2>
                <h3>Solusi Modal Petani</h3>
                <p class="justify">
                  Plan IT merupakan sebuah layanan website yang bergerak dibidang pertanian. Layanan dari website ini adalah mempertemukan pemilik lahan pertanian dan dengan orang yang ingin menggarap lahan pertanian, namun tidak memiliki lahan. Langkah-langkah yang dapat dilakukan untuk dapat menggunakan layanan Plan IT adalah sebagai berikut.
                </p>
    
                <ul>
                  <li><i class="ion-android-checkmark-circle"></i>Mendaftarkan akun pada website Plan IT, baik sebagai pemilik lahan ataupun pencari lahan.</li>
                  <li><i class="ion-android-checkmark-circle"></i>Login akun untuk melakukan pencarian lahan ataupun memasang iklan untuk mencari penggarap.</li>
                  <li><i class="ion-android-checkmark-circle"></i>Lakukan perjanjian sesuai dengan kesepatan yang telah dibuat.</li>
                </ul>
              </div>
            </div>
    
          </div>
        </section><!-- #about -->
    
        <!--==========================
          Product Featuress Section
        ============================-->
        <section id="features">
          <div class="container">
    
            <div class="row">
    
              <div class="col-lg-8 offset-lg-4">
                <div class="section-header wow fadeIn" data-wow-duration="1s">
                  <h3 class="section-title">How To Use</h3>
                  <span class="section-divider"></span>
                </div>
              </div>
    
              <div class="col-lg-4 col-md-5 features-img">
                <img src="{{asset('img/product-features.png')}}" alt="" class="wow fadeInLeft">
              </div>
    
              <div class="col-lg-8 col-md-7 ">
    
                <div class="row">
    
                  <div class="col-lg-6 col-md-6 box wow fadeInRight">
                    <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
                    <h4 class="title"><a href="">1. Registrasi Akun</a></h4>
                    <p class="description">Anda dapat mencari lahan yang bisa digunakan secara mudah dan praktis di Plan IT secara GRATIS tanpa di punggut biaya apa pun.</p>
                  </div>
                  <div class="col-lg-6 col-md-6 box wow fadeInRight" data-wow-delay="0.1s">
                    <div class="icon"><i class="ion-ios-flask-outline"></i></div>
                    <h4 class="title"><a href="">2. Cari Pemiliki Lahan</a></h4>
                    <p class="description">Pengguna Plant IT dapat menemukan dan menegosiasikan lahan yang ingin digunakan secara praktis.</p>
                  </div>
                  <div class="col-lg-6 col-md-6 box wow fadeInRight data-wow-delay="0.2s">
                    <div class="icon"><i class="ion-social-buffer-outline"></i></div>
                    <h4 class="title"><a href="">3. Hubungi Pemiliki Lahan</a></h4>
                    <p class="description">Pengguna Plant IT yang berminat bisa langsung menghubungi pemilik lahan.</p>
                  </div>
                  <div class="col-lg-6 col-md-6 box wow fadeInRight" data-wow-delay="0.3s">
                    <div class="icon"><i class="ion-ios-analytics-outline"></i></div>
                    <h4 class="title"><a href="">4. Lakukan Negosiasi</a></h4>
                    <p class="description">Negosiasi dilakukan secara COD dan hanya antara kedua belah pihak yaitu penyewa dengan pemilik lahan.</p>
                  </div>
                  <div class="col-lg-12 col-md-6 box wow fadeInRight" data-wow-delay="0.3s">
                    <div class="icon"><i class="ion-ios-analytics-outline"></i></div>
                    <h4 class="title"><a href="">5. Deal</a></h4>
                    <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum dinoun trade capsule.</p>
                  </div>
                </div>
    
              </div>
    
            </div>
    
          </div>
    
        </section><!-- #features -->
    
        <!--==========================
          Our Team Section
        ============================-->
        <section id="team" class="section-bg">
          <div class="container">
            <div class="section-header">
              <h3 class="section-title">Our Team</h3>
              <span class="section-divider"></span>
              <p class="section-description">Berikut merupakan developer dari website Plain IT</p>
            </div>
            <div class="row wow fadeInUp">
              <div class="col-lg-4 col-md-6">
                <div class="member">
                  <div class="pic"><img src="img/team/team-1.jpg" alt=""></div>
                  <h4>Abhi Adityaksa</h4>
                  <span>CEO Plant IT</span>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
    
              <div class="col-lg-4 col-md-6">
                <div class="member">
                  <div class="pic"><img src="img/team/team-2.jpg" alt=""></div>
                  <h4>Gunawan</h4>
                  <span>Back End Developer</span>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
    
              <div class="col-lg-4 col-md-6">
                <div class="member">
                  <div class="pic"><img src="img/team/team-3.jpg" alt=""></div>
                  <h4>Bagus Premana</h4>
                  <span>Front End Developer</span>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
    
            </div>
    
          </div>
        </section><!-- #team -->
    
        <!--==========================
          Gallery Section
        ============================-->
        <section id="gallery">
          <div class="container-fluid">
            <div class="section-header">
              <h3 class="section-title">Gallery</h3>
              <span class="section-divider"></span>
              <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
            </div>
    
            <div class="row no-gutters">
    
              <div class="col-lg-4 col-md-6">
                <div class="gallery-item wow fadeInUp">
                  <a href="img/gallery/gallery-1.jpg" class="gallery-popup">
                    <img src="img/gallery/gallery-1.jpg" alt="">
                  </a>
                </div>
              </div>
    
              <div class="col-lg-4 col-md-6">
                <div class="gallery-item wow fadeInUp">
                  <a href="img/gallery/gallery-2.jpg" class="gallery-popup">
                    <img src="img/gallery/gallery-2.jpg" alt="">
                  </a>
                </div>
              </div>
    
              <div class="col-lg-4 col-md-6">
                <div class="gallery-item wow fadeInUp">
                  <a href="img/gallery/gallery-3.jpg" class="gallery-popup">
                    <img src="img/gallery/gallery-3.jpg" alt="">
                  </a>
                </div>
              </div>
    
              <div class="col-lg-4 col-md-6">
                <div class="gallery-item wow fadeInUp">
                  <a href="img/gallery/gallery-4.jpg" class="gallery-popup">
                    <img src="img/gallery/gallery-4.jpg" alt="">
                  </a>
                </div>
              </div>
    
              <div class="col-lg-4 col-md-6">
                <div class="gallery-item wow fadeInUp">
                  <a href="img/gallery/gallery-5.jpg" class="gallery-popup">
                    <img src="img/gallery/gallery-5.jpg" alt="">
                  </a>
                </div>
              </div>
    
              <div class="col-lg-4 col-md-6">
                <div class="gallery-item wow fadeInUp">
                  <a href="img/gallery/gallery-6.jpg" class="gallery-popup">
                    <img src="img/gallery/gallery-6.jpg" alt="">
                  </a>
                </div>
              </div>
    
            </div>
    
          </div>
        </section><!-- #gallery -->
    
        <!--==========================
          Contact Section
        ============================-->
        <section id="contact">
          <div class="container">
            <div class="row wow fadeInUp">
    
              <div class="col-lg-8 col-md-8">
                <div class="contact-about">
                  <h3>Plant IT</h3>
                  <p>Membantu mempertemukan pemilik lahan dengan orang yang ingin menanamkan modal</p>
                  <div class="social-links">
                    <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                    <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                    <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                    <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
                    <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
    
              <div class="col-lg-4 col-md-4">
                <div class="info">
                  <div>
                    <i class="ion-ios-location-outline"></i>
                    <p>Bukit Jimbaran<br>Bali, Indonesia</p>
                  </div>
    
                  <div>
                    <i class="ion-ios-email-outline"></i>
                    <p>info.planit@gmail.com</p>
                  </div>
    
                  <div>
                    <i class="ion-ios-telephone-outline"></i>
                    <p>+1 5589 55488 55s</p>
                  </div>
    
                </div>
              </div>
    
            </div>
    
          </div>
        </section><!-- #contact -->
    
      </main>
    
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
            <div class="col-lg-6">
              <nav class="footer-links text-lg-right text-center pt-2 pt-lg-0">
                <a href="#intro" class="scrollto">Home</a>
                <a href="#about" class="scrollto">About</a>
                <!--a href="#">Privacy Policy</a>
                <a href="#">Terms of Use</a-->
              </nav>
            </div>
          </div>
        </div>
      </footer><!-- #footer -->
    
      <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
    



@endsection