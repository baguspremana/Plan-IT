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
            <li class="menu-has-children"><a href="#">Admin</a>
                <ul>
                <li><a href="#">Profile</a></li>
                <li><a href="#">Sign Out</a></li>
                </ul>
            </li>	
            </ul>
        </nav><!-- #nav-menu-container -->
        </div>
    </header><!-- #header -->

    <div class="container-fluid">
        <div class="row">

            <nav class="col-md-2 d-none d-md-block sidebar" style="padding-top: 80px;">
            <div class="sidebar-sticky">
                <ul class="nav flex-column">

                <li class="nav-item">
                    <center>
                        <img src="img/team/team-1.jpg" class="rounded-circle" style="width: 70%;">
                        <h6 style="padding-top:10px;">Admin</h6>
                    </center>
                </li>
                <li class="nav-item">
                    <center>
                        <a class="nav-link active" href="#">Pemilik Lahan</a>
                    </center>
                </li>
                <li class="nav-item">
                    <center>
                        <a class="nav-link" href="#">Edit Profile</a>
                    </center>
                </li>
                
                </ul>
            </div>
            </nav>

            <main ole="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
            <div class="row col-lg-12" style="padding-top: 90px;">
                <h1>Pemilik Lahan</h1>
            </div>

            <div class="row col-lg-12 wow fadeInUp" style="margin-bottom: 60px;">
                <table class="table table-bordered">
                <thead>
                    <tr>
                    <th scope="col">Nama</th>
                    <th scope="col">Lokasi</th>
                    <th scope="col">Kelengkapan</th>
                    <th scope="col">Tanggal Berlaku</th>
                    <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <td>Nama</td>
                    <td>Lokasi</td>
                    <td>Kelengkapan</td>
                    <td>Tanggal Berlaku</td>
                    <td>
                        <a href="#" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                        <a href="#" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                    </td>
                    </tr>
                    <tr>
                    <td>Nama</td>
                    <td>Lokasi</td>
                    <td>Kelengkapan</td>
                    <td>Tanggal Berlaku</td>
                    <td>
                        <a href="#" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                        <a href="#" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                    </td>
                    </tr>
                    <tr>
                    <td>Nama</td>
                    <td>Lokasi</td>
                    <td>Kelengkapan</td>
                    <td>Tanggal Berlaku</td>
                    <td>
                        <a href="#" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                        <a href="#" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                    </td>
                    </tr>
                    <tr>
                    <td>Nama</td>
                    <td>Lokasi</td>
                    <td>Kelengkapan</td>
                    <td>Tanggal Berlaku</td>
                    <td>
                        <a href="#" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                        <a href="#" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                    </td>
                    </tr>
                    <tr>
                    <td>Nama</td>
                    <td>Lokasi</td>
                    <td>Kelengkapan</td>
                    <td>Tanggal Berlaku</td>
                    <td>
                        <a href="#" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                        <a href="#" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                    </td>
                    </tr>
                    <tr>
                    <td>Nama</td>
                    <td>Lokasi</td>
                    <td>Kelengkapan</td>
                    <td>Tanggal Berlaku</td>
                    <td>
                        <a href="#" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                        <a href="#" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                    </td>
                    </tr>
                    <tr>
                    <td>Nama</td>
                    <td>Lokasi</td>
                    <td>Kelengkapan</td>
                    <td>Tanggal Berlaku</td>
                    <td>
                        <a href="#" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                        <a href="#" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                    </td>
                    </tr>
                </tbody>
                </table>
            </div>
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

            </main>
            
        </div>
    </div>

@endsection