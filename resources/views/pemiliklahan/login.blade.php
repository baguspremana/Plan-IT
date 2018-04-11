@extends('layouts.main')


@section('content')

<header id="header">
        <div class="container">
    
          <div id="logo" class="pull-left">
            <h1><a href="#intro" class="scrollto">PLANT IT</a></h1>
          </div>
    
          <nav id="nav-menu-container">
            <ul class="nav-menu">
              <li class="menu-active"><a href="index.html">Home</a></li>
              <li><a href="login.html">Login</a></li>
              <li><a href="sign-up.html">Sign Up</a></li>
            </ul>
          </nav><!-- #nav-menu-container -->
        </div>
      </header><!-- #header -->
    
    <!--==========================
      Login Form
    ============================-->
    <section id="login" class="bg-login">
        <div class="container">
            
            <div class="row" style="margin-top: 100px;">
                <div class="col-lg-12">
                    <center>
                        <div class="col-lg-6 col-md-6">
                            <div class="box featured wow wow fadeInDown" data-wow-delay="0.4s" data-wow-duration="0.6s">
                                <h3>Plant IT</h3>
                                <h5>Login</h5>
                                <hr>
    
                                <form method="POST" action="dashboard.html">
                                    <div class="input-group mb-2 mr-sm-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">Username</div>
                                        </div>
                                        <input type="text" class="form-control" id="username">
                                    </div>
    
                                    <div class="input-group mb-2 mr-sm-2" style="padding-top:10px">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">Password</div>
                                        </div>
                                        <input type="password" class="form-control" id="password">
                                    </div>
    
                                    <button class="btn btn-login btn-block" type="submit" style="margin-top:10px">Login</button>
                                </form>
                                
                                <hr>
                                
                                <div class="row">
                                    <div class="col-lg-6">
                                        <a href="email-confirmation.html">Forgot Password?</a>
                                    </div>
                                    <div class="col-lg-6">
                                        <a href="sign-up.html">Sign Up</a>
                                    </div>
                                </div>
                            
                            </div>
                        </div>
                    </center>
                </div>
            </div>
        </div>
    </section><!-- #login -->


@endsection