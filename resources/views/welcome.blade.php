<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from aipthemes.com/fotor_portfolio/index-4.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 01 Apr 2020 17:55:02 GMT -->
<head>
    <!--// Meta Tags //-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Fotor Personal Portfolio">
    <meta name="keywords" content="portfolio,resume,personal,cv,one page">
    <meta name="author" content="Yucel Yilmaz">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--// Icons //-->
    <link rel="stylesheet" href="fonts/flat_icons/flaticon.css">
    <link rel="stylesheet" href="fonts/font_awesome/css/all.css">
    <!--// Google Fonts //-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,500i,600,600i,700,700i,800,800i&amp;display=swap&amp;subset=latin-ext" rel="stylesheet">
    <!--// StyleSheets //-->
    <link rel="stylesheet" href="css/frameworks.css">
    <!--// Theme Main Css //-->
    <link rel="stylesheet" href="css/style.css">
    <title>Fotor - Personal Portfolio</title>
</head>

<body data-spy="scroll" data-target="#fixedNavbar">

    <!--// Page Wrapper Start //-->
    <div class="page-wrapper" id="top">

        <!--// Header Start //-->
      @include('layouts.header')
        <!--// Header End  //-->
        {{-- @foreach ($data as $row) --}}
                                   
        {{-- @endforeach --}}
        <!--// Hero Banner Start //-->
        <section class="hero-banner hero-ripless-banner bg-overlay" style="background-image: url('img/slide1.jpg');" data-scroll-index="1">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-lg-7 col-md-12 col-sm-12">
                        <div class="hero-inner white-text">
                            <div class="hero-social-white">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                            <h1>Im <span id="typed-text"></span></h1>
                            <p> 
                               
                              test muy site
                                {{-- @for($data ?? '' as $portfolio)
                            {{$portfolio->Phone}} --}}
                            </p>
                            {{-- <a href="#" class="default-white-btn disabled" >Hire Me <i class="ml-2 fas fa-thumbs-up"></i></a> --}}
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="button-group-center " data-wow-delay="0.4s">
                <a href="#" class="scroll-down-btn" data-scroll-nav="2">
                    <i class="fas fa-angle-double-down"></i>
                </a>
                {{-- <a href="https://www.youtube.com/watch?v=mQFI37HH_eY" class="popup-youtube my-video-btn">
                    <span class="fa fa-play"></span>
                </a> --}}
            {{-- </div> --}} 
        </section>
        <!--// Hero Banner End //-->

        <!--// About Me Start //-->
        <section class="about section" id="about-me" data-scroll-index="2">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-md-6 about-tilt-img col-sm-12 col-lg-6" data-tilt data-tilt-max="10" data-tilt-speed="400" data-tilt-perspective="1000">
                        <div class="about-img-wrap">
                            <img src="img/pankaj.jpg" alt="Pankaj image" class="img-fluid about-img-thumb">
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-lg-6 about-inner">
                        <h4>Hello, My Name Is Pankaj<br>
                            Im <span>dddddd</span>
                        </h4>
                        <p>
                            cvquotes
                        </p>
                        <ul class="about-list">
                            <li>
                                <span class="list-item-title">Name</span>
                                <span class="list-item-value">email</span>
                            </li>
                            <li>
                                <span class="list-item-title">Country</span>
                                <span class="list-item-value">Nepal</span>
                            </li>
                            <li>
                                <span class="list-item-title">Age</span>
                                <span class="list-item-value">age}}</span>
                            </li>
                            <li>
                                <span class="list-item-title">Email</span>
                                <span class="list-item-value">email</span>
                            </li>
                            <li>
                                <span class="list-item-title">University</span>
                                <span class="list-item-value">Tribhuban University</span>
                            </li>
                            <li>
                                <span class="list-item-title">Phone</span>
                                <span class="list-item-value">+  phone}}</span>
                            </li>
                        </ul>
                        <a href="#" class="default-orange-btn">Download Cv</a>
                    </div>
                </div>
            </div>
        </section>
        <!--// About Me End //-->

        <!--// Education Start //-->
        {{-- <section class="education-experience pb-minus-70 section">
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-lg-7 col-sm-12">
                        <h3 class="section-title">My<span>Education</span></h3>
                        <hr class="section-line-border">
                        <p class="section-sub-line">What I have learned and experience.</p>
                    </div>
                </div>
                <div class="row justify-content-center text-center align-items-center">
                    <div class="resume-tab-item col-md-6 col-lg-4 col-sm-6 col-xs-12 active">
                        <div class="resume-tab-item-inner">
                            <i class="flaticon-022-learning"></i>
                            <h5>Education</h5>
                        </div>
                    </div>
                    <div class="resume-tab-item col-md-6 col-lg-4 col-sm-6 col-xs-12">
                        <div class="resume-tab-item-inner">
                            <i class="flaticon-007-thinking"></i>
                            <h5>Experience</h5>
                        </div>
                    </div>
                </div>
               
                <div class="resume-tab-content active animated fadeIn">
                    <div class="row">
                        @foreach ($edudata as $item)
                      
                      
                        <div class="col-md-6">
                            <div class="experience-item">
                                <div class="experience-item-header">
                                    <div class="resume-univ-icon">
                                        <span class="flaticon-010-success"></span>
                                    </div>
                                    <div class="resume-univ-text">
                                    <h6><i class="far fa-calendar-alt"></i>{{$item->started}} _ {{$item->ended}}</h6>
                                        <h5>{{$item->title}}</h5>
                                    </div>
                                </div>
                                <div class="experience-item-body">
                                    <p>{{$item->subtitle}}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <div class="col-md-6">
                            <div class="experience-item">
                                <div class="experience-item-header">
                                    <div class="resume-univ-icon">
                                        <span class="flaticon-010-success"></span>
                                    </div>
                                    <div class="resume-univ-text">
                                        <h6><i class="far fa-calendar-alt"></i>{{$item->started}} _ {{$item->ended}}</h6>
                                        <h5>{{$item->title}}</h5>
                                    </div>
                                </div>
                                <div class="experience-item-body">
                                    <p>{{$item->subtitle}} </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="experience-item">
                                <div class="experience-item-header">
                                    <div class="resume-univ-icon">
                                        <span class="flaticon-010-success"></span>
                                    </div>
                                    <div class="resume-univ-text">
                                        <h6><i class="far fa-calendar-alt"></i>2018-2019</h6>
                                        <h5>UI/UX Design</h5>
                                    </div>
                                </div>
                                <div class="experience-item-body">
                                    <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="experience-item">
                                <div class="experience-item-header">
                                    <div class="resume-univ-icon">
                                        <span class="flaticon-010-success"></span>
                                    </div>
                                    <div class="resume-univ-text">
                                        <h6><i class="far fa-calendar-alt"></i>2018-2019</h6>
                                        <h5>App Design</h5>
                                    </div>
                                </div>
                                <div class="experience-item-body">
                                    <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="resume-tab-content animated fadeIn">
                    <div class="row">
                        @foreach ($edudata as $item)
                      
                      
                        <div class="col-md-6">
                            <div class="experience-item">
                                <div class="experience-item-header">
                                    <div class="resume-univ-icon">
                                        <span class="flaticon-010-success"></span>
                                    </div>
                                    <div class="resume-univ-text">
                                    <h6><i class="far fa-calendar-alt"></i>{{$item->started}} _ {{$item->ended}}</h6>
                                        <h5>{{$item->title}}</h5>
                                    </div>
                                </div>
                                <div class="experience-item-body">
                                    <p>{{$item->subtitle}}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <div class="col-md-6">
                            <div class="experience-item">
                                <div class="experience-item-header">
                                    <div class="resume-univ-icon">
                                        <span class="flaticon-030-deal"></span>
                                    </div>
                                    <div class="resume-univ-text">
                                        <h6><i class="far fa-calendar-alt"></i>2018-2019</h6>
                                        <h5>Web Designer</h5>
                                    </div>
                                </div>
                                <div class="experience-item-body">
                                    <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="experience-item">
                                <div class="experience-item-header">
                                    <div class="resume-univ-icon">
                                        <span class="flaticon-030-deal"></span>
                                    </div>
                                    <div class="resume-univ-text">
                                        <h6><i class="far fa-calendar-alt"></i>2017-2019</h6>
                                        <h5>Mockup Designer</h5>
                                    </div>
                                </div>
                                <div class="experience-item-body">
                                    <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="experience-item">
                                <div class="experience-item-header">
                                    <div class="resume-univ-icon">
                                        <span class="flaticon-030-deal"></span>
                                    </div>
                                    <div class="resume-univ-text">
                                        <h6><i class="far fa-calendar-alt"></i>2018-2019</h6>
                                        <h5>Logo Design</h5>
                                    </div>
                                </div>
                                <div class="experience-item-body">
                                    <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--// Education End //--> --}}

        <!--// Services Start //-->
        {{-- <section class="section my-services pb-minus-70" id="services" data-scroll-index="3">
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-lg-7 col-sm-12">
                        <h3 class="section-title">My<span>Services</span></h3>
                        <hr class="section-line-border">
                        <p class="section-sub-line">You can also get support for the service you want.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-4">
                        <div class="services-box">
                            <div class="services-box-icon">
                                <span class="flaticon-028-design"></span>
                            </div>
                            <div class="services-box-body">
                                <h5>Web Design</h5>
                                <p>
                                    It is a long established fact that a reader will be distracted 
                                    by the readable content..
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="services-box">
                            <div class="services-box-icon">
                                <span class="flaticon-011-strategy"></span>
                            </div>
                            <div class="services-box-body">
                                <h5>Logo Design</h5>
                                <p>
                                    It is a long established fact that a reader will be distracted 
                                    by the readable content..
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="services-box">
                            <div class="services-box-icon">
                                <span class="flaticon-024-idea"></span>
                            </div>
                            <div class="services-box-body">
                                <h5>App UI Design</h5>
                                <p>
                                    It is a long established fact that a reader will be distracted 
                                    by the readable content..
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="services-box">
                            <div class="services-box-icon">
                                <span class="flaticon-012-startup"></span>
                            </div>
                            <div class="services-box-body">
                                <h5>Seo Optimization</h5>
                                <p>
                                    It is a long established fact that a reader will be distracted 
                                    by the readable content..
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="services-box">
                            <div class="services-box-icon">
                                <span class="flaticon-018-online-shop"></span>
                            </div>
                            <div class="services-box-body">
                                <h5>Cms & E-Commerce</h5>
                                <p>
                                    It is a long established fact that a reader will be distracted 
                                    by the readable content..
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="services-box">
                            <div class="services-box-icon">
                                <span class="flaticon-021-marketing"></span>
                            </div>
                            <div class="services-box-body">
                                <h5>Marketing</h5>
                                <p>
                                    It is a long established fact that a reader will be distracted 
                                    by the readable content..
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--// Services End //--> --}}

        {{-- <!--// Counters Start //-->
        <section class="pb-minus-70 section" id="counters">
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-lg-7 col-sm-12">
                        <h3 class="section-title">My Skills &<span>Values</span></h3>
                        <hr class="section-line-border">
                        <p class="section-sub-line">Some of the skills I've gained.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-3 col-sm-6 col-xs-12">
                        <div class="counters-item">
                            <span class="flaticon-005-trophy"></span>
                            <div class="counters-body">
                                <h3 class="counter">150</h3>
                                <span>Awards & Winners</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 col-sm-6 col-xs-12">
                        <div class="counters-item">
                            <span class="flaticon-015-partnership"></span>
                            <div class="counters-body">
                                <h3 class="counter">2000</h3>
                                <span>Happy Clients</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 col-sm-6 col-xs-12">
                        <div class="counters-item">
                            <span class="flaticon-032-coffee-cup"></span>
                            <div class="counters-body">
                                <h3 class="counter">1000</h3>
                                <span>Cups Of Coffee</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 col-sm-6 col-xs-12">
                        <div class="counters-item">
                            <span class="flaticon-020-meeting"></span>
                            <div class="counters-body">
                                <h3 class="counter">1150</h3>
                                <span>Complete Project</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--// Counters End //-->

        <!--// My Price Start //-->
        <section class="my-prices section pb-minus-70">
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-lg-7 col-sm-12">
                        <h3 class="section-title">My<span>Prices</span></h3>
                        <hr class="section-line-border">
                        <p class="section-sub-line">Prices and packages may suit you.</p>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-4">
                        <div class="price-table text-center">
                            <div class="price-top-inner">
                                <h5>Basic</h5>
                                <span class="flaticon-009-target price-icon"></span>
                            </div>
                            <div class="price-text">
                                <span>$39/yr</span>
                            </div>
                            <ul class="price-value-list">
                                <li>10 GB Diskspace</li>
                                <li>5 Domain Names</li>
                                <li>4 Email Adress</li>                                
                                <li>Private Support</li>
                            </ul>
                            <a href="#" class="default-orange-btn">Buy Now</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="price-table text-center">
                            <div class="price-top-inner">
                                <h5>Standart</h5>
                                <span class="flaticon-006-work price-icon"></span>
                            </div>
                            <div class="price-text">
                                <span>$49/yr</span>
                            </div>
                            <ul class="price-value-list">
                                <li>10 GB Diskspace</li>
                                <li>5 Domain Names</li>
                                <li>4 Email Adress</li>
                                <li>Private Support</li>
                            </ul>
                            <a href="#" class="default-orange-btn">Buy Now</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="price-table text-center">
                            <div class="price-top-inner">
                                <h5>Pro</h5>
                                <span class="flaticon-026-growth price-icon"></span>
                            </div>
                            <div class="price-text">
                                <span>$59/yr</span>
                            </div>
                            <ul class="price-value-list">
                                <li>10 GB Diskspace</li>
                                <li>5 Domain Names</li>
                                <li>4 Email Adress</li>
                                <li>Private Support</li>
                            </ul>
                            <a href="#" class="default-orange-btn">Buy Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--// Ny Price End //--> --}}

        <!--// Portfolio Start //-->
        <section class="section my-portfolio pb-minus-70" id="portfolio" data-scroll-index="4">
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-lg-7 col-sm-12">
                        <h3 class="section-title">My<span>Portfolio</span></h3>
                        <hr class="section-line-border">
                        <p class="section-sub-line">I attach importance to simplicity in design Take a look at my projects and decide.</p>
                    </div>
                </div>
                <div class="text-center">
                    <div class="portfolio-filter d-flex align-items-center justify-content-center">
                        <a href="#0" data-gallery-filter="*" class="current">All</a>
                        <a href="#0" data-gallery-filter=".web">Web</a>
                        <a href="#0" data-gallery-filter=".logo">Mobile App</a>
                        {{-- <a href="#0" data-gallery-filter=".branding">Branding</a> --}}
                    </div>
                </div>
                <div class="gallery-masonary portfolio-grid row" id="masonaryGallery">
                    <div class="col-md-6 col-lg-4 glry-item col-sm-12 web">
                        <div class="portfolio-inner">
                            <div class="portfolio-back">
                                <div class="portfolio-buttons">
                                    <a href="img/portfolio-1000x1000-1.png" class="portfolio-zoom-link">
                                        <i class="fas fa-search"></i>
                                    </a>
                                    <a href="portfolio-details.html">
                                        <i class="fas fa-link"></i>
                                    </a>
                                </div>
                            </div>
                            <img src="img/portfolio-1000x1000-1.png" alt="Portfolio Img" class="img-fluid portfolio-img">
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 glry-item col-sm-12 logo">
                        <div class="portfolio-inner">
                            <div class="portfolio-back">
                                <div class="portfolio-buttons">
                                    <a href="img/portfolio-900x1200-1.png" class="portfolio-zoom-link">
                                        <i class="fas fa-search"></i>
                                    </a>
                                    <a href="portfolio-details.html">
                                        <i class="fas fa-link"></i>
                                    </a>
                                </div>
                            </div>
                            <img src="img/portfolio-900x1200-1.png" alt="Portfolio Img" class="img-fluid portfolio-img">
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 glry-item col-sm-12 branding">
                        <div class="portfolio-inner">
                            <div class="portfolio-back">
                                <div class="portfolio-buttons">
                                    <a href="img/portfolio-1000x1000-2.png" class="portfolio-zoom-link">
                                        <i class="fas fa-search"></i>
                                    </a>
                                    <a href="portfolio-details.html">
                                        <i class="fas fa-link"></i>
                                    </a>
                                </div>
                            </div>
                            <img src="img/portfolio-1000x1000-2.png" alt="Portfolio Img" class="img-fluid portfolio-img">
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 glry-item col-sm-12 logo">
                        <div class="portfolio-inner">
                            <div class="portfolio-back">
                                <div class="portfolio-buttons">
                                    <a href="img/portfolio-900x1200-2.png" class="portfolio-zoom-link">
                                        <i class="fas fa-search"></i>
                                    </a>
                                    <a href="portfolio-details.html">
                                        <i class="fas fa-link"></i>
                                    </a>
                                </div>
                            </div>
                            <img src="img/portfolio-900x1200-2.png" alt="Portfolio Img" class="img-fluid portfolio-img">
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 glry-item col-sm-12 logo">
                        <div class="portfolio-inner">
                            <div class="portfolio-back">
                                <div class="portfolio-buttons">
                                    <a href="img/portfolio-900x1200-3.png" class="portfolio-zoom-link">
                                        <i class="fas fa-search"></i>
                                    </a>
                                    <a href="portfolio-details.html">
                                        <i class="fas fa-link"></i>
                                    </a>
                                </div>
                            </div>
                            <img src="img/portfolio-900x1200-3.png" alt="Portfolio Img" class="img-fluid portfolio-img">
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 glry-item col-sm-12 web">
                        <div class="portfolio-inner">
                            <div class="portfolio-back">
                                <div class="portfolio-buttons">
                                    <a href="img/portfolio-1000x1000-3.png" class="portfolio-zoom-link">
                                        <i class="fas fa-search"></i>
                                    </a>
                                    <a href="portfolio-details.html">
                                        <i class="fas fa-link"></i>
                                    </a>
                                </div>
                            </div>
                            <img src="img/portfolio-1000x1000-3.png" alt="Portfolio Img" class="img-fluid portfolio-img">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--// Portfolio End //-->

        <!--// My Team Start //-->
        {{-- <section class="section" id="my-team">
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-lg-7 col-sm-12">
                        <h3 class="section-title">My<span>Team</span></h3>
                        <hr class="section-line-border">
                        <p class="section-sub-line">Lorem Ipsum is simply dummy text of the printing..</p>
                    </div>
                </div>
                <div class="my-team-slider owl-carousel owl-theme">
                    <div class="item">
                        <div class="team-card">
                            <div class="team-card-header">
                                <img src="img/team-img-1.png" alt="" class="img-fluid shadow-md">
                            </div>
                            <div class="team-card-body">
                               <div class="team-text">
                                    <h5>Thomas Brown</h5>
                                    <span>Web Developer</span>
                               </div>
                               <div class="social-links text-center">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                               </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="team-card">
                            <div class="team-card-header">
                                <img src="img/team-img-2.png" alt="" class="img-fluid shadow-md">
                            </div>
                            <div class="team-card-body">
                               <div class="team-text">
                                    <h5>Richard Smith</h5>
                                    <span>Project Manager</span>
                               </div>
                               <div class="social-links text-center">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                               </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="team-card">
                            <div class="team-card-header">
                                <img src="img/team-img-3.png" alt="" class="img-fluid shadow-md">
                            </div>
                            <div class="team-card-body">
                               <div class="team-text">
                                    <h5>Harry O'Brien</h5>
                                    <span>UI/UX Designer</span>
                               </div>
                               <div class="social-links text-center">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                               </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="team-card">
                            <div class="team-card-header">
                                <img src="img/team-img-4.png" alt="" class="img-fluid shadow-md">
                            </div>
                            <div class="team-card-body">
                               <div class="team-text">
                                    <h5>Jacob Bolt</h5>
                                    <span>UI/UX Designer</span>
                               </div>
                               <div class="social-links text-center">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                               </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--// My Team End //-->

        <!--// Clients Start //-->
        <section class="section testimonials" id="clients" data-scroll-index="5">
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-lg-7 col-sm-12">
                        <h3 class="section-title">My<span>Clients</span></h3>
                        <hr class="section-line-border">
                        <p class="section-sub-line">Lorem Ipsum is simply dummy text of the printing..</p>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="testimonials-carousel owl-carousel owl-theme">
                            <div class="item">
                                <div class="testimonials-item">
                                    <div class="testimonials-header">
                                        <img src="img/clients-img-120x120-1.png" alt="testimonials image" class="img-fluid">
                                    </div>
                                    <div class="testimonials-body">
                                        <h5>Richard William</h5>
                                        <span>Customer</span>
                                        <p>
                                            It is a long established fact that a reader will be distracted by 
                                            the readable content of a page when looking at its layout. 
                                        </p>
                                        <div class="testimonial-rating">
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonials-item">
                                    <div class="testimonials-header">
                                        <img src="img/clients-img-120x120-2.png" alt="testimonials image" class="img-fluid">
                                    </div>
                                    <div class="testimonials-body">
                                        <h5>Mark Vilson</h5>
                                        <span>Customer</span>
                                        <p>
                                            It is a long established fact that a reader will be distracted by 
                                            the readable content of a page when looking at its layout. 
                                        </p>
                                        <div class="testimonial-rating">
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonials-item">
                                    <div class="testimonials-header">
                                        <img src="img/clients-img-120x120-3.png" alt="testimonials image" class="img-fluid">
                                    </div>
                                    <div class="testimonials-body">
                                        <h5>Derick McKinney</h5>
                                        <span>Customer</span>
                                        <p>
                                            It is a long established fact that a reader will be distracted by 
                                            the readable content of a page when looking at its layout. 
                                        </p>
                                        <div class="testimonial-rating">
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--// Testimonial End //--> --}}
        
        <!--// Latest Blog Start //-->
        <section class="latest-blog section" id="latest-blog" data-scroll-index="6">
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-lg-7 col-sm-12">
                        <h3 class="section-title">Latest<span>Blogs</span></h3>
                        <hr class="section-line-border">
                        <p class="section-sub-line">Answers to design suggestions and questions.</p>
                    </div>
                </div>
                <div class="blog-slider owl-carousel owl-theme">
                    <div class="item blog-item">
                        <div class="blog-top">
                            <a href="blog-single.html" class="blog-img-link">
                                <img src="img/blog-600x400-1.png" alt="Blog image" class="img-fluid">
                            </a>
                        </div>
                        <div class="blog-body">
                            <h5 class="blog-title"><a href="blog-single.html">Shapes used in logo.</a></h5>
                            <a href="#" class="blog-author mr-3"><i class="far fa-user mr-2"></i>Mark Wilson</a>
                            <a href="#" class="blog-date"><i class="far fa-clock mr-2"></i>July 15</a>
                            <p class="blog-text">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            </p>
                            <a href="blog-single.html" class="default-link">Read More <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="blog-item item">
                        <div class="blog-top">
                            <a href="blog-single.html" class="blog-img-link">
                                <img src="img/blog-600x400-2.png" alt="Blog image" class="img-fluid">
                            </a>
                        </div>
                        <div class="blog-body">
                            <h5 class="blog-title"><a href="blog-single.html">Design Quality Test.</a></h5>
                            <a href="#" class="blog-author mr-3"><i class="far fa-user mr-2"></i>John Doe</a>
                            <a href="#" class="blog-date"><i class="far fa-clock mr-2"></i>June 05</a>
                            <p class="blog-text">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            </p>
                            <a href="blog-single.html" class="default-link">Read More <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="blog-item item">
                        <div class="blog-top">
                            <a href="blog-single.html" class="blog-img-link">
                                <img src="img/blog-600x400-3.png" alt="Blog image" class="img-fluid">
                            </a>
                        </div>
                        <div class="blog-body">
                            <h5 class="blog-title"><a href="blog-single.html">Drawing Vector.</a></h5>
                            <a href="#" class="blog-author mr-3"><i class="far fa-user mr-2"></i>Alex Patterson</a>
                            <a href="#" class="blog-date"><i class="far fa-clock mr-2"></i>03 Aqust</a>
                            <p class="blog-text">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            </p>
                            <a href="blog-single.html" class="default-link">Read More <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="blog-item item">
                        <div class="blog-top">
                            <a href="blog-single.html" class="blog-img-link">
                                <img src="img/blog-600x400-4.png" alt="Blog image" class="img-fluid">
                            </a>
                        </div>
                        <div class="blog-body">
                            <h5 class="blog-title"><a href="blog-single.html">Clients Meet.</a></h5>
                            <a href="#" class="blog-author mr-3"><i class="far fa-user mr-2"></i>Richard William</a>
                            <a href="#" class="blog-date"><i class="far fa-clock mr-2"></i>03 Aqust</a>
                            <p class="blog-text">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            </p>
                            <a href="blog-single.html" class="default-link">Read More <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--// Latest Blog End //-->

        <!--// Contact Start //-->
        <section class="contact-me section" id="contact" data-scroll-index="7">
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-lg-7 col-sm-12">
                        <h3 class="section-title">Contact<span>Me</span></h3>
                        <hr class="section-line-border">
                        <p class="section-sub-line">Please contact me if your mind has any question fitted.</p>
                    </div>
                </div>
                <div class="contact-content">
                    <div class="contact-form-outer">
                        <div class="contact-form">
                            <div class="empty-form" style="display: none;"><span>Please Fill Required Fields</span></div>
                            <div class="email-invalid" style="display: none;"><span>Email is invalid</span></div>
                            <div class="success-form"></div>
                            <form id="contactForm" action="/contact" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="contact-form-group">
                                            <input type="text" class="contact-form-control" placeholder="Enter Name" name="contact_name" id="contactName">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="contact-form-group">
                                            <input type="text" class="contact-form-control" placeholder="Enter Email Address" name="contact_email" id="contactEmail">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="contact-form-group">
                                            <input type="text" class="contact-form-control" placeholder="Enter Subject" name="contact_subject" id="contactSubject">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="contact-form-group">
                                            <textarea name="contact_message" placeholder="Enter Message" id="contactMessage" class="contact-form-control" cols="30" rows="5"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="contact-form-group mb-0">
                                            <button type="submit" id="contactBtn" class="default-orange-btn">Send Message</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--// Contact End //-->
    
        <!--// Footer Start //-->
        <footer class="footer">
            <div class="footer-content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-lg-3">
                            <div class="footer-widget">
                                {{-- <div class="footer-logo-wrap">
                                    <a href="#">
                                        <img src="img/logo-transparent.png" alt="Footer Logo">
                                    </a>
                                </div> --}}
                                <p class="footer-about-text">
                                   Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                </p>  
                                <div class="footer-social-links">
                                    <a href="#">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fab fa-dribbble"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="col-md-6 col-sm-6 col-lg-3">
                            <div class="footer-widget">
                                <h6 class="footer-title">Links</h6>
                                <ul class="footer-links">
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">About</a></li>
                                    <li><a href="#">Services</a></li>
                                    <li><a href="#">Portfolio</a></li>
                                    <li><a href="#">Blog</a></li>
                                </ul>
                            </div>
                        </div> --}}
                        {{-- <div class="col-md-6 col-sm-6 col-lg-3">
                            <div class="footer-widget">
                                <h6 class="footer-title">Help</h6>
                                <ul class="footer-links">
                                    <li><a href="#">Team</a></li>
                                    <li><a href="#">404</a></li>
                                    <li><a href="#">Terms</a></li>
                                    <li><a href="#">Blog</a></li>
                                    <li><a href="#">Clients</a></li>
                                </ul>
                            </div>
                        </div> --}}
                        <div class="col-md-6 col-sm-6 col-lg-3">
                            <div class="footer-widget sm-margin-0">
                                <h6 class="footer-title">Contact Info</h6>
                                <ul class="footer-contact-info">
                                    <li><i class="fa fa-map"></i>Urlabari-8,Morang,Koshi</li>
                                    <li><i class="fa fa-mobile"></i>9812317940</li>
                                    <li><i class="fa fa-mobile"></i>986214583</li>
                                    <li><i class="fa fa-envelope"></i>pankaj.dulal07@gmail.com</li>
                                  </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright-wrap">
                <div class="container">
                    <p class="copyright-text text-center">AipThemes © Copyright 2020. All Right Reserved.</p>
                </div>
            </div>
        </footer>
        <!--// Footer End //-->
    
        <div id="preloader">
            <div id="loader"></div>
        </div>
        <!--// Preloader //-->

        <a href="#" class="scroll-top-btn" data-scroll-goto="1">
            <span class="fa fa-angle-up"></span>
        </a>
        <!--// Scroll Top Btn  //-->

    </div>
    <!--// Page Wrapper End //-->

    <!--// Scripts //-->
    <script src="js/jquery.js"></script>
    <script src="js/typed.js"></script>
    <script src="js/plugins.js"></script>
    
    <!--// Theme Main Js // -->
    <script src="js/main.js"></script>

    <!--// Typed Text, Ripples Effect // -->
    <script>
        $(document).ready(function() {
            // Typed Text
            var options = {
                strings: ["Web Designer", "Web Developer"],
                typeSpeed: 40,
                backSpeed: 40,
                loop: true
            }
            var typed = new Typed("#typed-text", options);

            // Ripples Effect
            $('.hero-ripless-banner').ripples({
                resolution: 500,
                dropRadius: 20,
                perturbance: 0.04
            });
        });
    </script>
</body>


<!-- Mirrored from aipthemes.com/fotor_portfolio/index-4.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 01 Apr 2020 17:55:02 GMT -->
</html>