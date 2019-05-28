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
            <!-- main-slider end -->
            <!-- page-content start -->
            <div class="page-content">
                <div class="intro1 pb-100">
                    <div class="container">
                        <div class="row">
                            <div class="section-header text-center mb-60">
                                <h2 class="f2 c1">welcome to novio</h2>
                                <h1 class="f1 fw-7 c4">Time to change the world</h1>
                            </div>
                            <div class="col-md-4 col-sm-6 col-sm-offset-3 col-md-offset-0 col-xs-offset-0 mb-sm-50">
                                <div class="item">
                                    <div class="item-thumb">
                                        <a href="#">
                                            <img src="{{asset('novio/img/intro/01.jpg')}}" alt="intro thumb">
                                        </a>
                                    </div>
                                    <div class="item-txt text-center f1">
                                        <h2 class="fw-6">Support a Campaign</h2>
                                        <p class="fw-4">Quisque egestas justo nec hendrerit feugiat duide turpis porttitor sapien egestas.</p>
                                        <a href="#" class="rdm">    <i class="fa fa-angle-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 mb-xs-50">
                                <div class="item">
                                    <div class="item-thumb">
                                        <a href="#">
                                            <img src="{{ asset('novio/img/intro/02.jpg')}}" alt="intro thumb">
                                        </a>
                                    </div>
                                    <div class="item-txt text-center f1">
                                        <h2 class="fw-6">Safe Enviorement</h2>
                                        <p class="fw-4">Quisque egestas justo nec hendrerit feugiat duide turpis porttitor sapien egestas.</p>
                                        <a href="#" class="rdm">    <i class="fa fa-angle-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 mb-xs-50">
                                <div class="item">
                                    <div class="item-thumb">
                                        <a href="#">
                                            <img src="{{asset('novio/img/intro/03.jpg')}}" alt="intro thumb">
                                        </a>
                                    </div>
                                    <div class="item-txt text-center f1">
                                        <h2 class="fw-6">Become a Volunteer</h2>
                                        <p class="fw-4">Quisque egestas justo nec hendrerit feugiat duide turpis porttitor sapien egestas.</p>
                                        <a href="#" class="rdm">    <i class="fa fa-angle-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hotline">
                    <div class="txt-row">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="item">
                                        <div class="section-header">
                                            <h2 class="f2 c1">time to change</h2>
                                            <h1 class="f1 fw-7 c4">Join the race to make the world a better place</h1>
                                        </div>
                                        <p class="f1 fw-4 mt-45">Lorem ipsum dolor sit amet nsectetur cing elit. Suspe ndisse suscipit sagittis leo sit met entum estibulum dignissim posuere cubilia durae. Leo sit met entum cubilia crae.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="contac-row mt-60">
                        <div class="container">
                            <div class="row pos-r">
                                <div class="col-lg-6 pos-s col-lg-push-6">
                                    <div class="vdo">
                                        <img src="{{asset('novio/img/vdo/01.jpg')}}" alt="">
                                        <a href="https://www.youtube.com/embed/l-epKcOA7RQ?rel=0&amp;controls=0&amp;showinfo=0" class="play-button html5lightbox">  <i class="fa fa-play c4"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-lg-pull-6">
                                    <div class="item clearfix">
                                        <div class="icon-box">  <span>
                                    <i class="nivio-phone-call"></i>
                                </span>
                                        </div>
                                        <div class="txt-box f1">
                                            <h2 class="fw-6 cw">For any inquiries call the hotline: <span><a href="#" class="c3 fw-7">888 999 0000</a></span></h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="brands py-100">
                    <div class="container">
                        <div class="brand-carousel owl-carousel">
                            <div class="brandItem text-center">
                                <a href="#" class="brands-icon-envato"></a>
                            </div>
                            <div class="brandItem text-center">
                                <a href="#" class="brands-icon-codecanyon"></a>
                            </div>
                            <div class="brandItem text-center">
                                <a href="#" class="brands-icon-graphicriver"></a>
                            </div>
                            <div class="brandItem text-center">
                                <a href="#" class="brands-icon-themeforest"></a>
                            </div>
                            <div class="brandItem text-center">
                                <a href="#" class="brands-icon-photodune"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- facts start -->
                <div class="facts-area text-center text-capitalize">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3 col-sm-6">
                                <div class="fact-container mb-sm-50">
                                    <div class="single-fact">   <span class="nivio-recycle"></span>
                                        <h3 class="fact-title c3 f2 fw-3 text-capitalize">Recycling</h3>
                                        <div class="numscroller fact-num cw f1" data-slno='15' data-min="0" data-max="5493" data-delay='30' data-increment="5">0</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="fact-container mb-sm-50">
                                    <div class="single-fact">   <span class="nivio-handshake"></span>
                                        <h3 class="fact-title c3 f2 fw-3 text-capitalize">Volunteer</h3>
                                        <div class="numscroller fact-num cw f1" data-slno='15' data-min="0" data-max="1750" data-delay='30' data-increment="5">0</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="fact-container mb-xs-50">
                                    <div class="single-fact">   <span class="nivio-growth"></span>
                                        <h3 class="fact-title c3 f2 fw-3 text-capitalize">Projects</h3>
                                        <div class="numscroller fact-num cw f1" data-slno='15' data-min="0" data-max="2458" data-delay='30' data-increment="5">0</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="fact-container">
                                    <div class="single-fact">   <span class="nivio-key"></span>
                                        <h3 class="fact-title c3 f2 fw-3 text-capitalize">Comunity</h3>
                                        <div class="numscroller fact-num cw f1" data-slno='35' data-min="0" data-max="1670" data-delay='30' data-increment="5">0</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- facts end -->
                <div class="projects">
                    <div class="container">
                        <div class="section-header text-center">
                            <h2 class="f2 c1">current compaigns</h2>
                            <h1 class="f1 fw-7 c4">Projects arround the world</h1>
                        </div>
                        <div class="project-area clearfix">
                            <div class="row">
                                <div class="col-lg-12 col-md-6 col-sm-8 col-xs-8 col-md-offset-3 col-sm-offset-2 col-xs-offset-2 col-lg-offset-0 project-box">
                                    <div class="row">
                                        <div class="donate f1 fw-7 cw">10%
                                            <br>Donated</div>
                                        <div class="col-lg-6 pl-0 col-lg-push-6">
                                            <img src="{{asset('novio/img/companies/01.jpg')}}" alt="">
                                        </div>
                                        <div class="col-lg-6 col-lg-pull-6">
                                            <div class="project-card">
                                                <div class="donate f1 fw-7 cw">10%
                                                    <br>Donated</div>
                                                <div class="section-header">
                                                    <h2 class="f2 c1">featured compaign</h2>
                                                    <h1 class="f1 fw-7 c4">Help the endangered species today</h1>
                                                </div>
                                                <p class="fw-4 f1">Lorem ipsum dolor sit amet nsectetur cing elituspe ndisse suscipit sagitis leo sit met entum estibulum dignissim posuere cubilia durae.</p>
                                                <ul class="f1">
                                                    <li>    <span class="c4 fw-7">Goal: <span class="c1">100000.00 USD</span></span>
                                                    </li>
                                                    <li>    <span class="c4 fw-7">Raised: <span class="c1">20000.00 USD</span></span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="project-blocks">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-sm-6 mt-30">
                                    <div class="item clearfix">
                                        <img src="{{asset('novio/img/companies/02.jpg')}}" alt="">
                                        <div class="item-content tnz bg2 cw f1">
                                            <h2 class="fw-7">
                                    <a href="project-single.html">Energy Preservation</a>
                                </h2>
                                            <p class="fw-4">Quisque egestas justo nec hendrerit feugiat duide turpis ase porttitor sapien egestas sollicitudin.</p>
                                            <a href="project-single.html" class="rdm">   <i class="fa fa-angle-right c2"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6 mt-30">
                                    <div class="item clearfix">
                                        <img src="{{asset('novio/img/companies/03.jpg')}}" alt="">
                                        <div class="item-content tnz bg2 cw f1">
                                            <h2 class="fw-7">
                                    <a href="project-single.html">Energy Preservation</a>
                                </h2>
                                            <p class="fw-4">Quisque egestas justo nec hendrerit feugiat duide turpis ase porttitor sapien egestas sollicitudin.</p>
                                            <a href="project-single.html" class="rdm">   <i class="fa fa-angle-right c2"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6 col-md-offset-3 col-sm-offset-3 col-xs-offset-0 col-lg-offset-0 mt-30">
                                    <div class="item clearfix">
                                        <img src="{{asset('novio/img/companies/04.jpg')}}" alt="">
                                        <div class="item-content tnz bg2 cw f1">
                                            <h2 class="fw-7">
                                    <a href="project-single.html">Energy Preservation</a>
                                </h2>
                                            <p class="fw-4">Quisque egestas justo nec hendrerit feugiat duide turpis ase porttitor sapien egestas sollicitudin.</p>
                                            <a href="project-single.html" class="rdm">   <i class="fa fa-angle-right c2"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimony mt-md pt-md">
                    <div class="container">
                        <div class="section-header text-center">
                            <h2 class="f2 c1">testimonials</h2>
                            <h1 class="f1 fw-7 c4">What customers says</h1>
                        </div>
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2 col-sm-offset-0 col-xs-offset-0">
                                <div class="testimonial owl-carousel">
                                    <div class="pw-item f1 text-center">
                                        <p>This is due to their excellent service, competitive pricing and customer support. It’s throughly refresing to get such a personal touch. Novio in my opinion deserves support for its projects.</p>
                                        <img src="{{ asset('novio/img/testimony/01.png')}}" alt="">
                                        <p class="name fw-7 c1">john smith</p>
                                    </div>
                                    <div class="pw-item f1 text-center">
                                        <p>This is due to their excellent service, competitive pricing and customer support. It’s throughly refresing to get such a personal touch. Novio in my opinion deserves support for its projects.</p>
                                        <img src="{{ asset('novio/img/testimony/02.png')}}" alt="">
                                        <p class="name fw-7 c1">allen stwart</p>
                                    </div>
                                    <div class="pw-item f1 text-center">
                                        <p>This is due to their excellent service, competitive pricing and customer support. It’s throughly refresing to get such a personal touch. Novio in my opinion deserves support for its projects.</p>
                                        <img src="{{ asset('novio/img/testimony/03.png')}}" alt="">
                                        <p class="name fw-7 c1">maria dove</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="blog">
                    <div class="container">
                        <div class="section-header text-center">
                            <h2 class="f2 c1">news & articles</h2>
                            <h1 class="f1 fw-7 c4">Recent posts and updates</h1>
                        </div>
                        <div class="blog-post owl-carousel">
                            <div class="col-md-4">
                                <div class="blog-card">
                                    <a href="single-news.html">
                                        <img src="{{ asset('novio/img/blog/01.jpg')}}" alt="">
                                    </a>
                                    <div class="blog-text">
                                        <div class="date f1 bg3">
                                            <p class="fw-6">Aug</p>
                                            <p class="fw-7">20</p>
                                        </div>
                                        <a href="single-news.html" class="title f1 fw-7 cw"> <span>Eco System Responsible For Green Energy</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="blog-card">
                                    <a href="single-news.html">
                                        <img src="{{asset('novio/img/blog/02.jpg')}}" alt="">
                                    </a>
                                    <div class="blog-text">
                                        <div class="date f1 bg3">
                                            <p class="fw-6">Aug</p>
                                            <p class="fw-7">09</p>
                                        </div>
                                        <a href="single-news.html" class="title f1 fw-7 cw"> <span>Don’t Throw Away, Recycle For Your Another Day</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="blog-card">
                                    <a href="single-news.html">
                                        <img src="{{asset('novio/img/blog/03.jpg')}}" alt="">
                                    </a>
                                    <div class="blog-text">
                                        <div class="date f1 bg3">
                                            <p class="fw-6">Aug</p>
                                            <p class="fw-7">02</p>
                                        </div>
                                        <a href="single-news.html" class="title f1 fw-7 cw"> <span>You Have The Power Today To Change Tomorrow</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="blog-card">
                                    <a href="single-news.html">
                                        <img src="{{asset('novio/img/blog/04.jpg')}}" alt="">
                                    </a>
                                    <div class="blog-text">
                                        <div class="date f1 bg3">
                                            <p class="fw-6">Jul</p>
                                            <p class="fw-7">30</p>
                                        </div>
                                        <a href="single-news.html" class="title f1 fw-7 cw"> <span>Save World By Planting Trees Your Sournding</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="blog-card">
                                    <a href="single-news.html">
                                        <img src="{{asset('novio/img/blog/01.jpg')}}" alt="">
                                    </a>
                                    <div class="blog-text">
                                        <div class="date f1 bg3">
                                            <p class="fw-6">Aug</p>
                                            <p class="fw-7">20</p>
                                        </div>
                                        <a href="single-news.html" class="title f1 fw-7 cw"> <span>Eco System Responsible For Green Energy</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="blog-card">
                                    <a href="single-news.html">
                                        <img src="{{asset('novio/img/blog/02.jpg')}}" alt="">
                                    </a>
                                    <div class="blog-text">
                                        <div class="date f1 bg3">
                                            <p class="fw-6">Aug</p>
                                            <p class="fw-7">09</p>
                                        </div>
                                        <a href="single-news.html" class="title f1 fw-7 cw"> <span>Don’t Throw Away, Recycle For Your Another Day</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="blog-card">
                                    <a href="single-news.html">
                                        <img src="{{asset('novio/img/blog/03.jpg')}}" alt="">
                                    </a>
                                    <div class="blog-text">
                                        <div class="date f1 bg3">
                                            <p class="fw-6">Aug</p>
                                            <p class="fw-7">02</p>
                                        </div>
                                        <a href="single-news.html" class="title f1 fw-7 cw"> <span>You Have The Power Today To Change Tomorrow</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="blog-card">
                                    <a href="single-news.html">
                                        <img src="{{asset('novio/img/blog/04.jpg')}}" alt="">
                                    </a>
                                    <div class="blog-text">
                                        <div class="date f1 bg3">
                                            <p class="fw-6">Jul</p>
                                            <p class="fw-7">30</p>
                                        </div>
                                        <a href="single-news.html" class="title f1 fw-7 cw"> <span>Save World By Planting Trees Your Sournding</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- page-content end -->
            <!-- footer start -->
            <footer>
                <div class="footer-top">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6 mb-xs-30">
                                <a href="#">
                                    <img src="{{asset('novio/img/logo/02.png')}}" alt="">
                                </a>
                            </div>
                            <div class="col-sm-6">
                                <ul class="list-inline text-right">
                                    <li><a href="#"><i class="c4 fa fa-twitter"></i></a>
                                    </li>
                                    <li><a href="#"><i class="c4 fa fa-facebook"></i></a>
                                    </li>
                                    <li><a href="#"><i class="c4 fa fa-linkedin"></i></a>
                                    </li>
                                    <li><a href="#"><i class="c4 fa fa-youtube-play"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-middle">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 clearfix mb-sm-50">
                                <div class="fooler-col f1">
                                    <h2 class="footer-title">conmpany</h2>
                                    <ul>
                                        <li>    <a href="#">about</a>
                                        </li>
                                        <li>    <a href="#">our team</a>
                                        </li>
                                        <li>    <a href="#">missions</a>
                                        </li>
                                        <li>    <a href="#">our projects</a>
                                        </li>
                                        <li>    <a href="#">contact</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="fooler-col f1">
                                    <h2 class="footer-title">services</h2>
                                    <ul>
                                        <li><a href="#">Recycling</a>
                                        </li>
                                        <li><a href="#">Ecosystem</a>
                                        </li>
                                        <li><a href="#">Organic</a>
                                        </li>
                                        <li><a href="#">Biology</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="fooler-col f1">
                                    <h2 class="footer-title">links</h2>
                                    <ul>
                                        <li><a href="#">Help</a>
                                        </li>
                                        <li><a href="#">Support</a>
                                        </li>
                                        <li><a href="#">Clients</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3 mb-sm-50">
                                <div class="footer-contact">
                                    <h2 class="footer-title">Contact</h2>
                                    <h3>855 Road Broklyn Street, 600
                            New York, USA</h3>
                                    <ul>
                                        <li><i class="fa fa-envelope"></i> needhelp@novio.com</li>
                                        <li><i class="fa fa-phone-square"></i> 888 999 0000</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="footer-contact f1">
                                    <h2 class="footer-title">newslater</h2>
                                    <form>
                                        <input type="email" placeholder="Email address">
                                        <button type="submit">Subscribe</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom f1">
                    <div class="container">
                        <p>© copyright 2019 by Layerdrops.com</p>
                    </div>
                </div>
            </footer>
            <!-- footer end -->
            </div>
            <!-- page-wrapper end -->
            <div class="back2Top bg1"> <i class="fa fa-angle-up fa-2x cw"></i>
            </div>
            <script src="{{ asset('novio/js/jquery-1.12.4.min.js')}}"></script>
            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTPlX-43R1TpcQUyWjFgiSfL_BiGxslZU"></script>
            <script src="{{ asset('novio/js/html5lightbox/html5lightbox.js')}}"></script>
            <script src="{{ asset('novio/js/bootstrap.min.js') }}"></script>
            <script src="{{ asset('novio/js/owl.carousel.js') }}"></script>
            <script src="{{ asset('novio/js/numscroller-1.0.js') }}"></script>
            <script src="{{ asset('novio/js/jquery.countdown.min.js') }}"></script>
            <script src="{{ asset('novio/js/jquery.enllax.min.js') }}"></script>
            <script src="{{ asset('novio/js/isotope.js') }}"></script>
            <script src="{{ asset('novio/js/magnific-popup.js') }}"></script>
            <script src="{{ asset('novio/js/main.js') }}"></script>
    </body>
            
</html>
            
            