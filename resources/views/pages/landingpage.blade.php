<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Cuba admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Cuba admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="{{asset('assets/images/favicon.png')}}" type="image/x-icon">
    <link rel="shortcut icon" href="{{asset('assets/images/favicon.png')}}" type="image/x-icon">
    <title>Kedaireka Mall</title>
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/font-awesome.css')}}">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/icofont.css')}}">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/themify.css')}}">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/flag-icon.css')}}">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/feather-icon.css')}}">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/owlcarousel.css')}}">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/bootstrap.css')}}">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
    <link id="color" rel="stylesheet" href="{{asset('assets/css/color-1.css')}}" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/responsive.css')}}">
  </head>
  <body class="landing-page">
    <!-- page-wrapper Start-->
    <div class="page-wrapper landing-page">
      <!-- Page Body Start            -->
      <div class="landing-home">
        <ul class="decoration">
          <li class="one"><img class="img-fluid" src="{{asset('assets/images/landing/decore/1.png')}}" alt=""></li>
          <li class="two"><img class="img-fluid" src="{{asset('assets/images/landing/decore/2.png')}}" alt=""></li>
          <li class="three"><img class="img-fluid" src="{{asset('assets/images/landing/decore/4.png')}}" alt=""></li>
          <li class="four"><img class="img-fluid" src="{{asset('assets/images/landing/decore/3.png')}}" alt=""></li>
          <li class="five"><img class="img-fluid" src="{{asset('assets/images/landing/2.png')}}" alt=""></li>
          <li class="six"><img class="img-fluid" src="{{asset('assets/images/landing/decore/cloud.png')}}" alt=""></li>
          <li class="seven"><img class="img-fluid" src="{{asset('assets/images/landing/2.png')}}" alt=""></li>
        </ul>
        <div class="container-fluid">
          <div class="sticky-header">
            <header>                       
              <nav class="navbar navbar-b navbar-trans navbar-expand-xl fixed-top nav-padding" id="sidebar-menu"><a class="navbar-brand p-0" href="#"><img class="img-fluid" src="{{asset('assets/images/landing/landing_logo.png')}}" alt=""></a>
                <button class="navbar-toggler navabr_btn-set custom_nav" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation"><span></span><span></span><span></span></button>
                <div class="navbar-collapse justify-content-end collapse hidenav" id="navbarDefault">
                  <ul class="navbar-nav navbar_nav_modify" id="scroll-spy">
                    <li class="nav-item"><a class="nav-link" href="#layout">About</a></li>
                    <li class="nav-item buy-btn"><a class="nav-link js-scroll" href="{{route('login')}}">Login</a></li>
                  </ul>
                </div>
              </nav>
            </header>
          </div>
          <div class="row">
            <div class="col-xl-5 col-lg-6">
              <div class="content">
                <div>
                  <h1 class="wow fadeIn">One stop  </h1>
                  <h1 class="wow fadeIn">For all admin template</h1>
                  <h2 class="txt-secondary wow fadeIn">Faster, Lighter & Dev. Friendly</h2>
                  <p class="mt-3 wow fadeIn">Cuba Admin Design makes your project modern, clean and reduce your project integration time. cuba comes with 10+ Apps , Dark Mode and RTL Ready</p>
                  <div class="btn-grp mt-4"><a class="btn btn-pill btn-primary btn-air-primary btn-lg me-3 wow pulse"> <img src="{{asset('assets/images/landing/icon/html/html.png')}}" alt="">HTML</a><a class="btn btn-pill btn-secondary btn-air-secondary btn-lg me-3 wow pulse"><img src="{{asset('assets/images/landing/icon/react/react.png')}}" alt="">React</a><a class="btn btn-pill btn-info btn-air-info btn-lg wow pulse"> <img src="{{asset('assets/images/landing/icon/angular/angular.svg')}}" alt="">Angular</a></div>
                  <div class="btn-grp mt-4"><a class="btn btn-pill btn-secondary btn-air-secondary btn-lg wow pulse me-3" > <img src="{{asset('assets/images/landing/icon/vue/vue.png')}}" alt="">VueJs</a><a class="btn btn-pill btn-success btn-air-success btn-lg wow pulse me-3"> <img src="{{asset('assets/images/landing/icon/laravel/laravel2.png')}}" alt="">Laravel</a></div>
                </div>
              </div>
            </div>
            <div class="col-xl-7 col-lg-6">                 
              <div class="wow fadeIn"><img class="screen1" src="{{asset('assets/images/landing/screen1.jpg')}}" alt=""></div>
              <div class="wow fadeIn"><img class="screen2" src="{{asset('assets/images/landing/screen2.jpg')}}" alt=""></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- latest jquery-->
    <script src="{{asset('assets/js/jquery-3.5.1.min.js')}}"></script>
    <!-- Bootstrap js-->
    <script src="{{asset('assets/js/bootstrap/bootstrap.bundle.min.js')}}"></script>
    <!-- feather icon js-->
    <script src="{{asset('assets/js/icons/feather-icon/feather.min.js')}}"></script>
    <script src="{{asset('assets/js/icons/feather-icon/feather-icon.js')}}"></script>
    <!-- scrollbar js-->
    <!-- Sidebar jquery-->
    <script src="{{asset('assets/js/config.js')}}"></script>
    <!-- Plugins JS start-->
    <script src="{{asset('assets/js/owlcarousel/owl.carousel.js')}}"></script>
    <script src="{{asset('assets/js/tooltip-init.js')}}"></script>
    <script src="{{asset('assets/js/animation/wow/wow.min.js')}}"></script>
    <script src="{{asset('assets/js/landing_sticky.js')}}"></script>
    <script src="{{asset('assets/js/landing.js')}}"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="{{asset('assets/js/script.js')}}"></script>
    <!-- login js-->
    <!-- Plugin used-->
  </body>
</html>