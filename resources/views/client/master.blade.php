<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from html.rrdevs.net/consulter/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 20 Dec 2024 07:23:05 GMT -->

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="dev_raj">
    <!-- ======== Page title ============ -->
    <title>{{$config->title}}</title>
    <!-- ========== Favicon Icon ========== -->
    <link type="image/png" href="{{ asset('assets/img/favicon.png') }}">
    <!-- ===========  All Stylesheet ================= -->
    <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/magnific-popup.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/slick.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    {{--    The script below prevents FOUC on Firefox--}}
    <script>0</script>
</head>

<body class="body-wrapper">

<!-- preloader start -->
<div id="preloader">
    <div class="sk-three-bounce">
        <div class="sk-child sk-bounce1"></div>
        <div class="sk-child sk-bounce2"></div>
        <div class="sk-child sk-bounce3"></div>
    </div>
</div>
<!-- preloader start -->

<!-- welcome content start from here -->

<!-- header start -->
<header class="header header-1 header-3">
    <div class="top-header d-none d-xl-block">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-4">
                    <div class="header-right-socail d-flex align-items-center">
                        <h6 class="font-la color-white fw-normal">Chào mừng đến với Trường Kinh Doanh và Lãnh Đạo
                        </h6>
                        {{-- <div class="social-profile">
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div> --}}
                    </div>
                </div>

                <div class="col-8">
                    <div class="header-cta d-flex justify-content-end">
                        <ul>
                            <li><a href="tel:{{$config->hotline}}"><i class="icon-phone"></i> {{$config->hotline}}</a></li>
                            <li><a href="mailto:{{$config->email}}"><i class="icon-email"></i>{{$config->email}}</a>
                            </li>
                            <div class="social-profile">

                                <ul>
                                    <li><a href="${{$config->facebook}}"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="main-header-wraper">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="logo">
                            <a href="{{route("index")}}">
                                <img src="{{asset("assets/img/logo/logo.png")}}" alt="logo" width="20%">
                            </a>

                        </div>
                            <div class="header-menu d-none d-xl-block">
                                <div class="main-menu">
                                    <ul>
                                        <li>
                                            <a data-spa href="{{route("index")}}">Trang chủ</a>
                                        </li>
                                        <li>
                                            <a href="{{route("about")}}">Giới thiệu</a>
                                        </li>
                                        <li>
                                            <a href="{{route('course.index')}}">Khoá học</a>
                                        </li>
                                        <li>
                                            <a href="{{route('blog.index')}}">Tin tức</a>
                                        </li>
                                        <li>
                                            <a href="{{route('contact.create')}}" data-spa>Liên hệ</a>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                        </div>

                        <div class="header-right d-flex align-items-center">
                            <div class="header-search">
                                <a class="search-toggle" data-selector=".header-search">
                                    <span class="fas fa-search"></span>
                                </a>

                                <form class="search-box" action="#" method="get">
                                    <div class="form-group d-flex align-items-center">
                                        <input type="search" name="s" value="" class="search-input"
                                               id="search" placeholder="Search">
                                        <button type="submit" class="search-submit"><i
                                                class="fas fa-search"></i></button>
                                    </div>
                                </form>
                            </div>

                            {{-- <a href="contact.html" class="header-btn">Get A Quote <i
                                    class="far fa-chevron-double-right"></i></a> --}}
                            <div class="mobile-nav-bar d-block ml-3 ml-sm-5 d-xl-none">
                                <div class="mobile-nav-wrap">
                                    <div id="hamburger">
                                        <i class="fal fa-bars"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- mobile menu - responsive menu  -->
    <div class="mobile-nav mobile-nav-red">
        <button type="button" class="close-nav">
            <i class="fal fa-times-circle"></i>
        </button>

        <nav class="sidebar-nav">
            <div class="navigation">
                <div class="consulter-mobile-nav">
                            <a href="#">Home</a>
                            <ul>
                                <li>
                                    <a data-spa href="{{route("index")}}">Trang chủ</a>
                                </li>
                                <li>
                                    <a href="{{route("about")}}">Giới thiệu</a>
                                </li>
                                <li>
                                    <a href="{{route('course.index')}}">Khoá học</a>
                                </li>
                                <li>
                                    <a href="{{route('blog.index')}}">Tin tức</a>
                                </li>
                                <li>
                                    <a href="{{route('contact.create')}}" data-spa>Liên hệ</a>
                                </li>
                            </ul>
                </div>

                <div class="sidebar-nav__bottom mt-20">
                    <div class="sidebar-nav__bottom-contact-infos mb-20">
                        <h6 class="color-black mb-5">thông tin liên hệ</h6>


            <div class="sidebar-nav__bottom mt-20">
                <div class="sidebar-nav__bottom-contact-infos mb-20">
                    <h6 class="color-black mb-5">thông tin liên hệ</h6>

                    <ul>
                        <li><a href="mailto:{{$config->email}}"><i
                                    class="icon-email"></i>{{$config->email}}</a></li>
                        <li>
                            <a class="header-contact d-flex align-items-center">
                                <div class="icon">
                                    <i class="icon-call"></i>
                                    <!-- <img src="assets/img/icon/phone-1.svg" alt=""> -->
                                </div>
                                <div class="text">
                                    <span class="font-la mb-5 d-block fw-500">Contact For Support</span>
                                    <h5 class="fw-500">
                                        <a href="tel:{{$config->hotline}}">
                                            {{$config->hotline}}
                                        </a>
                                    </h5>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="sidebar-nav__bottom-social">
                    <h6 class="color-black mb-5">Follow On:</h6>

                    <ul>
                        <li><a href="{{$config->facebook}}"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</div>

<div class="offcanvas-overlay"></div>
<!-- offcanvas-overlay -->
<!-- header end -->

<div class="header-gutter home"></div>
<!-- header end -->


<!-- banner-home start -->
{{-- main  --}}
<div id="content">
    @yield('content')
</div>
<!-- footer start -->
<footer class="footer-1 footer-3 overflow-hidden"
        style="background-image: url({{asset("assets/img/footer/footer-bg-3.png")}});">
    <div class="overly">
        <div class="container"></div>
    </div>
    <div class="container">
        <div class="row justify-content-between">
            <a href="index.html" class="d-block mb-30 mb-xs-20">
                <img src="{{asset("assets/img/logo/footer-logo.png")}}" alt="" width="20%">
            </a>
            <div class="col-md-6 col-xl-3">
                <div class="single-footer-wid widget-description">
                    <div class="description font-la color-white mb-40 mb-sm-30 mb-xs-25">
                        <h4 class="wid-title mb-30 color-white">Địa chỉ</h4>
                        <span>
                                <ul>
                                <li>
                                <p> {{$config->address}}</p>
                                </li>
                                <li><a><i class="icon-phone"></i> <span> {{$config->hotline}}</span>  </a></li>
                                <li><a href="mailto:info@ssb.edu.vn"><i
                                            class="icon-email"></i> <span> {{$config->email}}</span>  </a></li>
                                <li><a class=""><i class="icon-home-location"> </i> <span>  1901</span> </a></li>
                                </ul>
                            </span>
                    </div>

                    {{-- <a href="#" class="theme-btn btn-red btn-md fw-600">Purchase Now <i
                            class="far fa-chevron-double-right"></i></a> --}}
                </div>
            </div>
            <!-- /.col-lg-3 - single-footer-wid -->

                <div class="col-md-6 col-xl-4">
                    <div class="single-footer-wid recent_post_widget pl-xl-10 pl-65 pr-50 pr-xl-30">
                        <h4 class="wid-title mb-30 color-white">Bài viết gần đây</h4>
                        @foreach ($blogs->slice(-2) as $blog)       
                        <a href="blog.html" class="single-recent-post mb-20 pb-20 d-flex align-items-center">
                            <div class="thumb">
                                <img src="{{ url('') }}/assets/img/blog/{{ $blog->avatar }}" style="width: 70px; height: auto;" alt="">
                            </div>

                            <div class="post-data">
                                <span class="color-white d-flex ailign-items-center"><i
                                        class="far fa-clock"></i> {{ $blog->created_at->translatedFormat('d,F,Y') }}</span>
                                <h5 class="color-white mb-10 fw-600"> {{$blog->title}}</h5>
                            </div>
                        </a>
                        @endforeach

                        <div class="recent-post-list">


                        </div>

                    </div>
                </div>
            </div>

                <!-- /.col-lg-2 - single-footer-wid -->
                <div class="col-md-6 col-xl-2">
                    <div class="single-footer-wid pl-xl-10 pl-50">
                        <h4 class="wid-title mb-30 color-white">Khoá học</h4>

                        <ul>
                            @foreach ($courses->random(4) as $course)
                            <li><a href="">{{$course->title}}</a></li>
                            @endforeach
                        </ul>
                    </div>

                </div>
            </div>

            <!-- /.col-lg-4 - single-footer-wid -->

            <div class="col-md-6 col-xl-3">
                <div class="single-footer-wid">
                    <h4 class="wid-title mb-30 color-white">Trụ sở chính</h4>
                    {!! htmlspecialchars_decode($config->map) !!}

                </div>
            </div>
            <!-- /.col-lg-3 - single-footer-wid -->
        </div>
    </div>

    <div class="footer-bottom overflow-hidden mt-20 mt-sm-15 mt-xs-10 ftbg">
        <div class="container">
            <div
                class="footer-bottom-content d-flex flex-column flex-md-row justify-content-between align-items-center">
                <div class="coppyright text-center text-md-start">
                    Copyright © 2024 | All Rights Reserved by <a
                        href="https://ouransoft.vn">OuranSoft</a>
                </div>

                <div class="footer-bottom-list last_no_bullet">
                    <ul>
                        <li><a href="#">Terms & Conditions</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>


<!-- footer end -->
<!--  ALl JS Plugins
====================================== -->
<script type="text/javascript" src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/jquery.easing.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/slick.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/scrollUp.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/counterup.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/jquery.sticky-kit.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/magnific-popup.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/jquery.easypiechart.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/jquery.waypoints.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/wow.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/active.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/spa.js') }}"></script>
</body>

</html>
