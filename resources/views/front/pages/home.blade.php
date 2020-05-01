@extends('front.pages.index')
@section('content')
    
    
<div id="home">
        <!-- header -->
        <header>
            <nav class="navbar navbar-expand-lg navbar-light">
                <h1>
                    <a class="navbar-brand text-white" href="index.html">
                        Trips
                    </a>
                </h1>
                <button class="navbar-toggler ml-md-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-lg-auto text-center">
                        <li class="nav-item active  mr-lg-3 mt-lg-0 mt-sm-3">
                            <a class="nav-link" href="index.html" data-blast="color">Home
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item  mr-lg-3 mt-lg-0 mt-3">
                            <a class="nav-link scroll" href="#about">about</a>
                        </li>
                        <li class="nav-item dropdown mr-lg-3 mt-lg-0 mt-3">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                Dropdown
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item scroll" href="#services">services</a>
                                <a class="dropdown-item scroll" href="#plans">pricing</a>
                                <a class="dropdown-item scroll" href="#team">team</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item scroll" href="#portfolio">portfolio</a>
                                <a class="dropdown-item scroll" href="#posts">latest posts</a>
                            </div>
                        </li>
                        <li class="nav-item  mt-lg-0 mt-3">
                            <a class="nav-link scroll" href="#contact">Contact</a>
                        </li>
                    </ul>
                </div>

            </nav>
        </header>
        <!-- //header -->
        <div class="callbacks_container">
            <ul class="rslides" id="slider3">
                <li class="banner banner1">
                    <div class="container">
                        <div class="banner-text">
                            <div class="slider-info">
                                <span class="line">collect moments..</span>
                                <h3>a <span data-blast="bgColor">delightful</span> trip awaits!</h3>
                                <p class="text-white">Donec mi nulla, auctor nec sem a, ornare. Sed mi tortorcomm odo a
                                    felis in, fringilla tincidunt nulla estibulum. </p>
                                <a class="btn bg-theme mt-4 w3_pvt-link-bnr scroll text-white" data-blast="bgColor"
                                    href="#about" role="button">View
                                    More</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="banner banner2">
                    <div class="container">
                        <div class="banner-text">
                            <div class="slider-info">
                                <span class="line">collect moments..</span>
                                <h3>a <span data-blast="bgColor">delightful</span> trip awaits!</h3>
                                <p class="text-white">Donec mi nulla, auctor nec sem a, ornare. Sed mi tortorcomm odo a
                                    felis in, fringilla tincidunt nulla estibulum. </p>
                                <a class="btn bg-theme mt-4 w3_pvt-link-bnr scroll text-white" href="#about" role="button"
                                    data-blast="bgColor">View
                                    More</a>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <!-- //banner -->
    <!-- about -->
    <div class="about-wthree" id="about">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-5 about-right-bg"></div>
                <div class="col-lg-7 about-left-wthree bg-theme" data-blast="bgColor">
                    <div class="title-desc text-right pb-sm-3">
                        <h3 class="main-title-w3pvt text-white text-capitalize">about us</h3>
                        <p class="text-white">Explore it all. The sky is the limit!</p>
                    </div>
                    <p class="my-3 text-right text-white child_second">Donec mi nulla, auctor nec sem a, ornare. Sed mi
                        tortorcomm odo a felis
                        in, fringilla tincidunt nulla. Vestibulum
                        volutpat non eros ut vulpuuctor, ornare auctor mi.Commodo a felis
                        lpuuctor nein.</p>
                    <p class="my-3 text-right text-white child_second">Donec mi nulla, auctor nec sem a, ornare. Sed mi
                        tortorcomm odo a felis
                        in, fringilla tincidunt nulla.</p>
                    <div class="ml-auto text-right">
                        <a href="#plans" class="text-capitalize text-dark w3_pvt-link-bnr btn bg-light scroll mt-sm-4">view
                            more</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- about -->
    <!-- services -->
    <section class=" services-wthreepvt position-relative" id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 service-sub-grids">
                    <div class="d-flex services-box">
                        <span class="icon">
                            <i class="fa fa-pencil" data-blast="color"></i>
                        </span>
                        <div class="service-content">
                            <span>adipiscing</span>
                            <h4>sodalesd vulpu</h4>
                        </div>
                    </div>
                    <div class="d-flex services-box">
                        <span class="icon">
                            <i class="fa fa-rocket" data-blast="color"></i>
                        </span>
                        <div class="service-content">
                            <span>scingadipi</span>
                            <h4>sodalesd tortor</h4>
                        </div>
                    </div>
                    <div class="d-flex services-box">
                        <span class="icon">
                            <i class="fa fa-laptop" data-blast="color"></i>
                        </span>
                        <div class="service-content">
                            <span>ngsciadipi</span>
                            <h4>eu lorem fringilla</h4>
                        </div>
                    </div>
                    <div class="service-bottom-img">
                        <img src="{{asset('front/images/g1.jpg')}}" alt="" class="img-fluid rounded" />
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="services-bottom">
                        <div class="service-txt">
                            <h5 data-blast="color">Explore it all. <br>The sky is the limit!</h5>
                            <p class="my-3 text-right">Donec mi nulla, auctor nec sem a, ornare. Sed mi
                                tortorcomm odo a felis
                                in, fringilla tincidunt nulla.</p>
                        </div>
                    </div>
                    <div class="my-auto service-top-img">
                        <img src="{{asset('front/images/p3.jpg')}}" alt="" class="img-fluid rounded" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //services -->
    <!-- about bottom -->
    <div class="about-wthree1 bg-theme" data-blast="bgColor">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 about-left-wthree">
                    <div class="title-desc  pb-sm-3">
                        <h3 class="main-title-w3pvt text-white text-capitalize">discover</h3>
                        <p class="text-white">Explore it all. The sky is the limit!</p>
                    </div>
                    <p class="my-3 text-white child_second">Donec mi nulla, auctor nec sem a, ornare. Sed mi
                        tortorcomm odo a felis
                        in, fringilla tincidunt nulla. Vestibulum
                        volutpat non eros ut vulpuuctor, ornare auctor mi.Commodo a felis
                        lpuuctor nein.</p>
                    <p class="my-3 text-white child_second">Donec mi nulla, auctor nec sem a, ornare. Sed mi
                        tortorcomm odo a felis
                        in, fringilla tincidunt nulla.</p>
                    <div class="ml-auto">
                        <a href="#portfolio" class="text-capitalize text-dark w3_pvt-link-bnr btn bg-light scroll mt-sm-4">view
                            more</a>
                    </div>
                </div>
                <div class="col-lg-5">
                    <img src="{{asset('front/images/g4.jpg')}}" alt="" class="img-fluid rounded" />
                </div>
            </div>
        </div>
    </div>
    <!-- about bottom -->
    <!-- pricing plans -->
    <section class="py-lg-5 py-4" id="plans">
        <div class="container py-md-5">
            <div class="title-desc text-right pb-sm-3">
                <h3 class="main-title-w3pvt  text-capitalize">packages</h3>
                <p>Explore it all. The sky is the limit!</p>
            </div>
            <div class="row price-row">
                <div class="col-lg-4 col-sm-6 column mb-lg-0 mb-4">
                    <div class="box" data-blast="borderColor">
                        <div class="title">
                            <i class="fa fa-paper-plane" data-blast="color"></i>
                            <h5 data-blast="color">Basic</h5>
                        </div>
                        <div class="price">
                            <h4><sup>$</sup>800</h4>
                        </div>
                        <div class="option">
                            <ul>
                                <li><i class="fa fa-check"></i> 50 Gb Space</li>
                                <li><i class="fa fa-check"></i> 5 Domain Names</li>
                                <li><i class="fa fa-check"></i> 20 Email Address</li>
                                <li><i class="fa fa-paper-times"></i> Live Support</li>
                            </ul>
                        </div>
                        <button type="button" class="btn w3ls-btn bg-theme  d-block" data-toggle="modal" aria-pressed="false"
                            data-target="#exampleModal" data-blast="bgColor">
                            book now
                        </button>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 column mb-lg-0 mb-4">
                    <div class="box" data-blast="borderColor">
                        <div class="title">
                            <i class="fa fa-plane" data-blast="color"></i>
                            <h5 data-blast="color">Standard</h5>
                        </div>
                        <div class="price">
                            <h4><sup>$</sup>1200</h4>
                        </div>
                        <div class="option">
                            <ul>
                                <li><i class="fa fa-check"></i> 10 Gb Space</li>
                                <li><i class="fa fa-check"></i> 3 Domain Names</li>
                                <li><i class="fa fa-check"></i> Unlimiteds Email Address</li>
                                <li><i class="fa fa-check"></i> Live Support</li>
                            </ul>
                        </div>
                        <button type="button" class="btn w3ls-btn bg-theme  d-block" data-toggle="modal" aria-pressed="false"
                            data-target="#exampleModal" data-blast="bgColor">
                            book now
                        </button>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6  mx-auto mt-lg-0 mt-4 column">
                    <div class="box" data-blast="borderColor">
                        <div class="title">
                            <i class="fa fa-rocket" data-blast="color"></i>
                            <h5 data-blast="color">Premium</h5>
                        </div>
                        <div class="price">
                            <h4><sup>$</sup>3000</h4>
                        </div>
                        <div class="option">
                            <ul>
                                <li><i class="fa fa-check"></i> Unlimited Gb Space</li>
                                <li><i class="fa fa-check"></i> 30 Domain Names</li>
                                <li><i class="fa fa-check"></i> Unlimited Email Address</li>
                                <li><i class="fa fa-check"></i> Live Support</li>
                            </ul>
                        </div>
                        <button type="button" class="btn w3ls-btn bg-theme  d-block" data-toggle="modal" aria-pressed="false"
                            data-target="#exampleModal" data-blast="bgColor">
                            book now
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //pricing plans -->
    <!-- portfolio -->
    <section class="wthree-row w3-gallery cliptop-portfolio-wthree pt-lg-5" id="portfolio">
        <div class="container-fluid">
            <div class="title-desc  pb-3">
                <h3 class="main-title-w3pvt  text-capitalize">portfolio</h3>
                <p>Explore it all. The sky is the limit!</p>
            </div>
            <ul class="demo row py-lg-5 py-sm-4 pb-4">
                <li class="col-lg-3 col-sm-6">
                    <div class="gallery-grid1">
                        <img src="{{asset('front/images/g1.jpg')}}" alt=" " class="img-fluid img-thumbnail" />
                    </div>
                </li>
                <li class="col-lg-3 col-sm-6">
                    <div class="gallery-grid1">
                        <img src="{{asset('front/images/p4.jpg')}}" alt=" " class="img-fluid img-thumbnail" />
                    </div>
                </li>
                <li class="col-lg-3 col-sm-6">
                    <div class="gallery-grid1">
                        <img src="{{asset('front/images/p5.jpg')}}" alt=" " class="img-fluid img-thumbnail" />
                    </div>
                </li>
                <li class="col-lg-3 col-sm-6">
                    <div class="gallery-grid1">
                        <img src="{{asset('front/images/p1.jpg')}}" alt=" " class="img-fluid img-thumbnail" />
                    </div>
                </li>
                <li class="col-lg-4 col-sm-6">
                    <div class="gallery-grid1">
                        <img src="{{asset('front/images/p2.jpg')}}" alt=" " class="img-fluid img-thumbnail" />
                    </div>
                </li>
                <li class="col-lg-4 col-sm-6">
                    <div class="gallery-grid1">
                        <img src="{{asset('front/images/p3.jpg')}}" alt=" " class="img-fluid img-thumbnail" />
                    </div>
                </li>
                <li class="col-lg-4 col-sm-6 mx-auto">
                    <div class="gallery-grid1">
                        <img src="{{asset('front/images/p4.jpg')}}" alt=" " class="img-fluid img-thumbnail" />
                    </div>
                </li>
                <li class="col-lg-3 col-sm-6">
                    <div class="gallery-grid1">
                        <img src="{{asset('front/images/p5.jpg')}}" alt=" " class="img-fluid img-thumbnail" />
                    </div>
                </li>
                <li class="col-lg-3 col-sm-6">
                    <div class="gallery-grid1">
                        <img src="{{asset('front/images/g1.jpg')}}" alt=" " class="img-fluid img-thumbnail" />
                    </div>
                </li>
                <li class="col-lg-3 col-sm-6">
                    <div class="gallery-grid1">
                        <img src="{{asset('front/images/p4.jpg')}}" alt=" " class="img-fluid img-thumbnail" />
                    </div>
                </li>
                <li class="col-lg-3 col-sm-6">
                    <div class="gallery-grid1">
                        <img src="{{asset('front/images/p5.jpg')}}" alt=" " class="img-fluid img-thumbnail" />
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <!-- //portfolio -->
    <!-- blog -->
    <section class="blog_w3ls py-lg-5" id="posts">
        <div class="container py-sm-5 py-4">
            <div class="title-desc text-right pb-sm-3">
                <h3 class="main-title-w3pvt  text-capitalize">latest blog</h3>
                <p>Explore it all. The sky is the limit!</p>
            </div>
            <div class="row space-sec">
                <!-- blog grid -->
                <div class="col-lg-4 col-md-6 mt-sm-0 mt-4">
                    <div class="card">
                        <div class="card-header p-0 position-relative">
                            <a href="#exampleModal2" data-toggle="modal" aria-pressed="false" data-target="#exampleModal2"
                                role="button">
                                <img class="card-img-bottom" src="{{asset('front/images/p1.jpg')}}" alt="Card image cap">
                                <span class="fa fa-user post-icon bg-theme" data-blast="bgColor" aria-hidden="true"></span>

                            </a>
                        </div>
                        <div class="card-body">
                            <h5 class="blog-title card-title font-weight-bold">
                                <a href="#exampleModal2" data-toggle="modal" aria-pressed="false" data-target="#exampleModal2"
                                    role="button">Cras ultricies ligula sed.</a>
                            </h5>
                            <p>At vero eos et accusam et justo duo dolores et ea rebum. Lorem ipsum dolor sit
                                ametLorem ipsum dolor sit amet,sed diam nonumy.</p>
                            <button type="button" class="btn blog-btn wthree-bnr-btn mt-3" data-blast="color"
                                data-toggle="modal" aria-pressed="false" data-target="#exampleModal2">
                                Read more
                            </button>
                        </div>
                    </div>
                </div>
                <!-- //blog grid -->
                <!-- blog grid -->
                <div class="col-lg-4 col-md-6 mt-md-0 mt-sm-5 mt-4">
                    <div class="card">
                        <div class="card-header p-0 position-relative">
                            <a href="#exampleModal3" data-toggle="modal" aria-pressed="false" data-target="#exampleModal3"
                                role="button">
                                <img class="card-img-bottom" src="{{asset('front/images/p2.jpg')}}" alt="Card image cap">
                                <span class="fa fa-user post-icon bg-theme" data-blast="bgColor" aria-hidden="true"></span>
                            </a>
                        </div>
                        <div class="card-body">
                            <h5 class="blog-title card-title font-weight-bold">
                                <a href="#exampleModal3" data-toggle="modal" aria-pressed="false" data-target="#exampleModal3"
                                    role="button">magna porta auris.</a>
                            </h5>
                            <p>At vero eos et accusam et justo duo dolores et ea rebum. Lorem ipsum dolor sit
                                ametLorem ipsum dolor sit amet,sed diam nonumy.</p>
                            <button type="button" class="btn blog-btn wthree-bnr-btn mt-3" data-blast="color"
                                data-toggle="modal" aria-pressed="false" data-target="#exampleModal3">
                                Read more
                            </button>
                        </div>
                    </div>
                </div>
                <!-- //blog grid -->
                <!-- blog grid -->
                <div class="col-lg-4 col-md-6 mt-lg-0 mt-4 mx-auto">
                    <div class="card">
                        <div class="card-header p-0  position-relative">
                            <a href="#exampleModal4" data-toggle="modal" aria-pressed="false" data-target="#exampleModal4"
                                role="button">
                                <img class="card-img-bottom" src="{{asset('front/images/p3.jpg')}}" alt="Card image cap">
                                <span class="fa fa-user post-icon bg-theme" data-blast="bgColor" aria-hidden="true"></span>
                            </a>
                        </div>
                        <div class="card-body">
                            <h5 class="blog-title card-title font-weight-bold">
                                <a href="#exampleModal4" data-toggle="modal" aria-pressed="false" data-target="#exampleModal4"
                                    role="button">Cras ultricies ligula sed.</a>
                            </h5>
                            <p>At vero eos et accusam et justo duo dolores et ea rebum. Lorem ipsum dolor sit
                                ametLorem ipsum dolor sit amet,sed diam nonumy.</p>
                            <button type="button" class="btn blog-btn wthree-bnr-btn mt-3" data-toggle="modal"
                                aria-pressed="false" data-target="#exampleModal4" data-blast="color">
                                Read more
                            </button>
                        </div>
                    </div>
                </div>
                <!-- //blog grid -->
            </div>
        </div>
    </section>
    <!-- //blog -->
    <!-- team -->
    <section class="team-wthree py-3  position-relative bg-theme" data-blast="bgColor" id="team">
        <div class="container py-lg-5">
            <div class="title-desc text-left pb-3">
                <h3 class="main-title-w3pvt  text-capitalize text-white">our team</h3>
                <p class="text-white">Explore it all. The sky is the limit!</p>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    <div id="carouselExampleIndicators" class="carousel slide py-lg-5" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="box5">
                                            <img src="{{asset('front/images/t1.jpg')}}" alt="" class=" img-fluid" />
                                            <ul class="icon">
                                                <li><a href="#" class="fa fa-search"></a></li>
                                                <li><a href="#" class="fa fa-link"></a></li>
                                            </ul>
                                            <div class="box-content">
                                                <h3 class="title">Williamson</h3>
                                                <span class="post">lorem ipsum</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="box5">
                                            <img src="{{asset('front/images/t2.jpg')}}" alt="" class=" img-fluid" />
                                            <ul class="icon">
                                                <li><a href="#" class="fa fa-search"></a></li>
                                                <li><a href="#" class="fa fa-link"></a></li>
                                            </ul>
                                            <div class="box-content">
                                                <h3 class="title">Kristiana</h3>
                                                <span class="post">lorem ipsum</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="box5">
                                            <img src="{{asset('front/images/t3.jpg')}}" alt="" class=" img-fluid" />
                                            <ul class="
                                            icon">
                                                <li><a href="#" class="fa fa-search"></a></li>
                                                <li><a href="#" class="fa fa-link"></a></li>
                                            </ul>
                                            <div class="box-content">
                                                <h3 class="title">Williamson</h3>
                                                <span class="post">lorem ipsum</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="box5">
                                            <img src="{{asset('front/images/t4.jpg')}}" alt="" class=" img-fluid" />
                                            <ul class="icon">
                                                <li><a href="#" class="fa fa-search"></a></li>
                                                <li><a href="#" class="fa fa-link"></a></li>
                                            </ul>
                                            <div class="box-content">
                                                <h3 class="title">Kristiana</h3>
                                                <span class="post">lorem ipsum</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 team-right-grid position-absolute p-0 mx-auto">
                    <img src="{{asset('front/images/g4.jpg')}}" alt="" class="img-fluid" />
                </div>
            </div>
        </div>
    </section>
    <!-- //team -->

@stop