<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Beranda | {{ config('app.name') }}</title>

    <!-- slider stylesheet -->
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="{{ url('css/bootstrap.css') }}" />

    <!-- Custom styles for this template -->
    <link href="{{ url('css/style.css') }}" rel="stylesheet" />
    <!-- responsive style -->
    <link href="{{ url('css/responsive.css') }}" rel="stylesheet" />
</head>

<body>
    <div class="hero_area">
        <!-- header section strats -->
        <header class="header_section">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-lg custom_nav-container d-block">
                    <div class="main_nav_menu">
                        {{-- <div class="fk_width">
                            <div class="custom_menu-btn">
                                <button onclick="openNav()">
                                    <span class="s-1"> </span>
                                    <span class="s-2"> </span>
                                    <span class="s-3"> </span>
                                </button>
                            </div>
                            <div id="myNav" class="overlay">
                                <div class="overlay-content">
                                    <a class="" href="">Home <span class="sr-only">(current)</span></a>
                                    <a class="" href="">About </a>
                                    <a class="" href="">Gallery </a>
                                    <a class="" href="">Blog </a>
                                    <a class="" href="">Testimonial </a>
                                </div>
                            </div>
                        </div> --}}
                        <a class="navbar-brand" href="">
                            <span>
                                {{ config('app.name') }}
                            </span>
                        </a>
                        <div class="user_option">
                            <a href="/dashboard">
                                login
                            </a>
                            <form class="form-inline ">
                                <button class="btn  nav_search-btn" type="submit"></button>
                            </form>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
        <!-- end header section -->

        <!-- slider section -->
        <section class=" slider_section position-relative">
            <div class="container-fluid">
                <div class="row slider-row">
                    <div class="col-lg-3 offset-lg-1">
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="detail-box">
                                        <h1>
                                            Ananda <br />
                                            Photography
                                        </h1>
                                        <p>
                                            Welcome to Ananda Photography, where precious moments are immortalized into everlasting memories. 
                                            I am a photographer and videographer, committed to capturing the essence of beauty.
                                        </p>
                                        <div>
                                            <a href="#">
                                                Request A Quote
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="detail-box">
                                        <h1>
                                            Ananda <br />
                                            Photography
                                        </h1>
                                        <p>
                                            Gladly, come take a look at my portfolio and see the beauty of the world through my lens. 
                                            Let's share stories, emotions, and beauty together, and make memories that'll last a lifetime.
                                        </p>
                                        <div>
                                            <a href="#">
                                                Request A Quote
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel_control-box">
                                <div class="carousel_btn-container">
                                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                                        data-slide="prev">
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                                        data-slide="next">
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                                <ol class="carousel-indicators">
                                    <li data-target="#carouselExampleIndicators" data-slide-to="0"
                                        class="active li_one">01</li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="1" class="li_two">02
                                    </li>
                                    <li class="ol_design"></li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 px-0">
                        <div class="img-box">
                            <img src="{{ asset('/storage/' . $homeSettings->get('sliderImage')) }}"
                                alt="{{ config('app.name') }}" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end slider section -->
    </div>

    <!-- about section -->

    {{-- <section class="about_section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="detail-box">
                        <div class="heading_container">
                            <h2>
                                About Studio
                            </h2>
                            <p>
                                It is a long established fact that a reader will be distracted by the readable content
                                of a page
                            </p>
                            <a href="">
                                Read More
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="img-box">
            <div class="play_btn">
                <a href="#">
                    <img src="{{ url('images/play.png') }}" alt="" />
                </a>
            </div>
            <img src="{{ url('images/about-img.png') }}" class="about-img" alt="" />
        </div>
    </section> --}}

    <!-- end about section -->

    <!-- gallery section -->
    <section class="gallery_section layout_padding-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 ml-auto">
                    <div class="heading_container">
                        <h2>
                            Our Gallery
                        </h2>
                        <p>
                            With my solid experience in this industry, I ensure that every picture and video I produce not only 
                            becomes a beautiful memory but also reflects the overflowing happiness and love in every moment.
                        </p>
                        <a href="">
                            See More
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="gallery_container">
            <div class="gallery_bg">
                <img src="{{ url('images/gallery-bg.png') }}" alt="" />
            </div>
            <div class="container">
                <div class="gallery_box">
                    @foreach ($galleries as $i => $rows) 
                        <div class="box b{{ $i + 1 }}"> 
                            @foreach ($rows as $row)
                                <div class="img-box">
                                    <a href="{{ $row->link }}">
                                        <img src="{{ asset('storage/' . $row->path) }}" alt="{{ $row->title }}" />
                                    </a>
                                    <h5>
                                        <span>{{ $row->title }}</span>
                                    </h5>
                                </div>
                            @endforeach
                        </div>
                    @endforeach
                    {{-- <div class="box b2">
                        <div class="img-box">
                            <img src="images/gallery-2.jpg" alt="" />
                            <h5>
                                <span>photography</span>
                            </h5>
                        </div>
                        <div class="img-box">
                            <img src="images/gallery-3.jpg" alt="" />
                            <h5>
                                <span>photography</span>
                            </h5>
                        </div>
                    </div>
                    <div class="box b3">
                        <div class="img-box">
                            <img src="images/gallery-4.jpg" alt="" />
                            <h5>
                                <span>photography</span>
                            </h5>
                        </div>
                        <div class="img-box">
                            <img src="images/gallery-5.jpg" alt="" />
                            <h5>
                                <span>photography</span>
                            </h5>
                        </div>
                    </div>
                    <div class="box b4">
                        <div class="img-box">
                            <img src="images/gallery-6.jpg" alt="" />
                            <h5>
                                <span>photography</span>
                            </h5>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </section>
    <!-- end gallery section -->

    <!-- blog section -->

    <section class="blog_section layout_padding slider_section " style="margin-top: 6em">
        <div class="container">
            <div class="row slider-row">
                <div class="col-md-4">
                    <div class="detail-box">
                        <div class="heading_container">
                            <h2>
                                Tools
                            </h2>
                            <p>
                                We take pride in using the finest photography equipment in the industry to ensure that every image we produce reaches the highest level of quality
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div id="carouselExampleIndicators1" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            @foreach ($tools as $row)
                                <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                    <div class="float: left; width: 200px">
                                        <a href="">
                                            <img src="{{ asset('storage/' . $row->path) }}"
                                                alt="Tools {{ $row->id }}" class="img-thumbnail"
                                                style="width: 180px; height: 180px; object-fit: cover;float: left;margin-right: 20px;">
                                        </a>
                                    </div>
                                    <p class="float:left;">
                                        {{ $row->description }}
                                    </p>
                                    <div class="clear:both;">&nbsp;</div>
                                </div>
                            @endforeach
                        </div>
                        <div class="carousel_control-box">
                            <div class="carousel_btn-container">
                                <a class="carousel-control-prev" href="#carouselExampleIndicators1" role="button"
                                    data-slide="prev">
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleIndicators1" role="button"
                                    data-slide="next">
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                            {{-- <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators1" data-slide-to="0"
                                    class="active li_one">01</li>
                                <li data-target="#carouselExampleIndicators1" data-slide-to="1" class="li_two">02
                                </li>
                                <li class="ol_design"></li>
                            </ol> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end blog section -->

    <!-- client section -->

    <section class="client_section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 ml-auto">
                    <div class="heading_container">
                        <h2>
                            What Says Customer
                        </h2>
                        <p>
                            It is a long established fact that a reader will be distracted by the readable content of a
                            page
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="client_container">
            <div class="client_bg">
                <img src="{{ url('images/gallery-bg.png') }}" alt="" />
            </div>
            <div class="container">
                <div class="client_box">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="box b1">
                                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner">
                                        @foreach ($testimonials as $row)
                                            <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                                <div class="client_content-box layout_padding">
                                                    <div class="img-box">
                                                        <img src="{{ asset('storage/' . $row->user_image) }}"
                                                            alt="" />
                                                    </div>
                                                    <div class="detail-box">
                                                        <h4>
                                                            {{ $row->user_fullname }}
                                                        </h4>
                                                        <p>
                                                            {{ $row->description }}
                                                        </p>
                                                        <img src="{{ url('images/quote.png') }}" alt="" />
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                                        data-slide="prev">
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                                        data-slide="next">
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="box b2">
                                <div class="camera_img-box">
                                    <img src="{{ url('images/camera.png') }}" alt="" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end client section -->

    <!-- info section -->

    <section class="info_section ">
        <div class="info_container layout_padding-top">
            <div class="container">
                <div class="heading_container">
                    <h2>
                        Contact Us
                    </h2>
                </div>
                <div class="info_main">
                    <div class="row">
                        <div class="col-md-4 col-lg-3">
                            <div class="info_contact ">
                                <a href="#" class="link-box">
                                    <div class="img-box">
                                        <img src="{{ url('images/location.png') }}" alt="" />
                                    </div>
                                    <div class="detail-box">
                                        <h6>
                                            {{ $contactSettings->get('address', 'location') }}
                                        </h6>
                                    </div>
                                </a>
                                <a href="mailto:{{ $contactSettings->get('email') }}" class="link-box">
                                    <div class="img-box">
                                        <img src="{{ url('images/mail.png') }}" alt="" />
                                    </div>
                                    <div class="detail-box">
                                        <h6>
                                            {{ $contactSettings->get('email', 'demo@gmail.com') }}
                                        </h6>
                                    </div>
                                </a>
                                <a href="tel:{{ $contactSettings->get('phone') }}" class="link-box">
                                    <div class="img-box">
                                        <img src="{{ url('images/call.png') }}" alt="" />
                                    </div>
                                    <div class="detail-box">
                                        <h6>
                                            Call {{ $contactSettings->get('phone', '+01 1234567890') }}
                                        </h6>
                                    </div>
                                </a>
                            </div>
                        </div>
<!--                    <div class="col-md-2 col-lg-3">
                            <div class="info_link-box">
                                <ul>
                                    <li class=" ">
                                        <a class="" href="index.html">Home <span
                                                class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="">
                                        <a class="" href="about.html">About </a>
                                    </li>
                                    <li class="">
                                        <a class="" href="gallery.html">Gallery </a>
                                    </li>
                                    <li class="">
                                        <a class="" href="blog.html">Blog </a>
                                    </li>
                                    <li class="">
                                        <a class="" href="testimonial.html">Testimonial </a>
                                    </li>
                                </ul>
                            </div>
                        </div> -->
<!--                    <div class="col-md-6 ">
                            <div class="social_box">
                                <a href="#">
                                    <img src="{{ url('images/facebook.png') }}" alt="" />
                                </a>
                                <a href="#">
                                    <img src="{{ url('images/twitter.png') }}" alt="" />
                                </a>
                                <a href="#">
                                    <img src="{{ url('images/linkedin.png') }}" alt="" />
                                </a>
                                <a href="#">
                                    <img src="{{ url('images/instagram.png') }}" alt="" />
                                </a>
                                <a href="#">
                                    <img src="{{ url('images/youtube.png') }}" alt="" />
                                </a>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end info section -->

    <!-- footer section 
    <footer class="footer_section ">
        <div class="container">
            <p>
                &copy; <span id="displayYear"></span> All Rights Reserved. Design by
                <a href="https://html.design/">Free Html Templates</a>
            </p>
        </div>
    </footer>
        footer section -->

    <script src="{{ url('js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ url('js/bootstrap.js') }}"></script>
    <script src="{{ url('js/custom.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
</body>

</html>
