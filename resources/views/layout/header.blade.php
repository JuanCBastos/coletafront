<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset=utf-8>
        <meta http-equiv=X-UA-Compatible content="IE=edge">
        <meta name=viewport content="width=device-width, initial-scale=1">
        <title>Coleta Seletiva</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="{{asset('novio/style.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('novio/img/favicon.png')}}" >
        <link rel="stylesheet" type="text/css" href="{{asset('novio/css/effect.css')}}" >
        <link rel="stylesheet" type="text/css" href="{{asset('novio/css/responsive.css')}}" >
        
        <!-- ====== main style end ====== -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
          <![endif]-->
    </head>
    <body>
        <div class="preloader">
            <div class="spinner">
            </div>
        </div>
        <!-- page-wrapper start -->
        <div class="page-wrapper">
            <!-- header start -->
            <header class="header1">
                <nav class="navbar nav-solid mb-0">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-menu"> <span></span>  <span></span>  <span></span> 
                            </button>
                            <a class="navbar-brand" href="index-2.html">
                                <img src="{{ asset('novio/img/logo/01.png')}}" alt="logo">
                            </a>
                        </div>
                        <div class="collapse navbar-collapse" id="main-menu">
                            <form class="navbar-left">
                                <input type="text" class="form-control" placeholder="Search">
                            </form>
                            <ul class="nav navbar-nav f1 mainMenu text-capitalize">
                                <li class="active"> <a href="index-2.html">Home</a>
                                    <ul class="sub-menu">
                                        <li class="active"><a href="index-2.html">home 1</a>
                                        </li>
                                        <li><a href="index-3.html">home 2</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="about.html">about</a>
                                </li>
                                <li> <a href="projects.html">projects</a>
                                    <ul class="sub-menu">
                                        <li><a href="projects.html">01 projects</a>
                                        </li>
                                        <li><a href="projects_2.html">02 projects</a>
                                        </li>
                                        <li><a href="project-single.html">project detail</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="gallery.html">gallery</a>
                                </li>
                                <li> <a href="news.html">news</a>
                                    <ul class="sub-menu">
                                        <li><a href="single-news.html">single news</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="contact.html">contact</a>
                                </li>
                            </ul>
                            <ul class="nav navbar-nav social-nav navbar-right">
                                <li>
                                    <a href="#"> <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#"> <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#"> <i class="fa fa-linkedin"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#"> <i class="fa fa-youtube-play"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </header>
            <!-- header end -->
            <!-- main-slider start -->
            <div class="main-slider ms1">
                <div class="banner-carousel owl-carousel">
                    <div class="ms1-item">
                        <img src="{{asset('novio/img/slider/01.jpg')}}" alt="">
                        <div class="pos-r g-table">
                            <div class="d-middle">
                                <div class="container crop">
                                    <div class="item-inner"> <span class="slider-icon">
                    <i class="nivio-tree-leaf"></i>
                  </span>
                                        <p class="f2 c3 fw-4">Donate and help us change the world</p>
                                        <div class="head-lines f1 cw mb-55">
                                            <h1 class="fw-7">Together we</h1>
                                            <h1 class="fw-7">can make a</h1>
                                            <h1 class="fw-7">difference</h1>
                                        </div> <a href="#" class="thm-btn hvr-2 bg3 c4">Start Today!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ms1-item">
                        <img src="{{asset ('novio/img/slider/02.jpg')}}" alt="">
                        <div class="pos-r g-table">
                            <div class="d-middle">
                                <div class="container crop">
                                    <div class="item-inner"> <span class="slider-icon">
                    <i class="nivio-tree-leaf"></i>
                  </span>
                                        <p class="f2 c3 fw-4">Donate and help us change the world</p>
                                        <div class="head-lines f1 cw mb-50">
                                            <h1 class="fw-7">Together we</h1>
                                            <h1 class="fw-7">can bring</h1>
                                            <h1 class="fw-7">the change</h1>
                                        </div> <a href="#" class="thm-btn hvr-3 bg1 cw">support us</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>