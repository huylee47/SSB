@php $extends = $isSPA ? 'client.layouts.spa' : 'client.master'; @endphp
@extends($extends)

@section("content")
    <!-- ========== Meta Tags ========== -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="dev_raj">
    <!-- ======== Page title ============ -->
    <title>Dịch vụ tư vấn</title>
    <!-- ========== Favicon Icon ========== -->
    <!-- ===========  All Stylesheet ================= -->





<!-- header end -->


<!-- mobile menu - responsive menu  -->
<div class="mobile-nav">
    <button type="button" class="close-nav">
        <i class="fal fa-times-circle"></i>
    </button>

    <nav class="sidebar-nav">
        <div class="navigation">
            <div class="consulter-mobile-nav">
                <ul>
                    <li>
                        <a href="{{route("index")}}">Trang chủ</a>
                        <ul>
                            <li>   <a href="{{route("index")}}">Trang chủ</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="services.html">Dịch vụ chúng tôi cung cấp</a>

                        <ul>
                            <li><a href="services.html">Dịch vụ chúng tôi cung cấp 1</a></li>
                            <li><a href="services-2.html">Dịch vụ chúng tôi cung cấp 2</a></li>
                        </ul>
                    </li>
                    <li>
                        <a>Trang</a>

                        <ul>
                            <li><a href="{{route("about")}}">Giới thiệu</a></li>
                            <li><a href="{{route("contact.create")}}">Liên hệ</a></li>
                            <li><a href="table.html">Bảng giá</a></li>
                            <li><a href="team.html">Đội ngũ</a></li>
                            <li><a href="team-details.html">Chi tiết thành viên</a></li>
                            <li><a href="services-details.html">Chi tiết dịch vụ</a></li>
                            <li><a href="our-project-details.html">Các dự án</a></li>
                            <li><a href="blog-details.html">Blog</a></li>
                            <li><a href="404.html">404</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="our-project.html">Danh mục đầu tư</a>
                    </li>
                    <li>
                        <a href="blog.html">Blog</a>

                        <ul>
                            <li><a href="blog.html">Blog 1</a></li>
                            <li><a href="blog-standard.html">Blog 2</a></li>
                        </ul>
                    </li>
                </ul>
            </div>

            <div class="sidebar-nav__bottom mt-20">
                <div class="sidebar-nav__bottom-contact-infos mb-20">
                    <h6 class="color-black mb-5">Thông tin liên hệ</h6>

                    <ul>
                        <li><a><i class="fal fa-clock"></i> Thứ Hai – Thứ Sáu: 8.00 – 18.00</a></li>
                        <li><a href="mailto:{{$config->email}}"><i class="icon-email"></i>{{$config->email}}</a></li>
                        <li>
                            <a href="tel:{{$config->hotline}}" class="header-contact d-flex align-items-center">
                                <div class="icon">
                                    <i class="icon-call"></i>
                                    <!-- <img src="{{ asset('assets/img/icon/phone-1.svg') }}" alt=""> -->
                                </div>
                                <div class="text">
                                    <span class="font-la mb-2 d-block fw-500">Liên hệ Hỗ trợ</span>
                                    <h5 class="fw-500">
                                        {{$config->hotline}}
                                    </h5>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="sidebar-nav__bottom-social">
                    <h6 class="color-black mb-5">Theo dõi:</h6>

                    <ul>
                        <li><a target="_blank" href="{{$config->facebook}}"><i class="fab fa-facebook-f"></i></a></li>
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

<div class="header-gutter"></div>
<!-- header end -->

<!-- page-banner start -->
<section class="page-banner pt-xs-60 pt-sm-80 overflow-hidden">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="page-banner__content mb-xs-10 mb-sm-15 mb-md-15 mb-20">
                    <div class="transparent-text">Giới thiệu</div>
                    <div class="page-title">
                        <h1>Giới thiệu <span></span></h1>
                    </div>
                </div>

                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Trang chủ</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Giới thiệu Chúng tôi</li>
                    </ol>
                </nav>
            </div>

            <div class="col-md-6">
                <div class="page-banner__media mt-xs-30 mt-sm-40">
                    <img src="{{asset("assets/img/page-banner/page-banner-start.svg")}}" class="img-fluid start" alt="">
                    <img src="{{asset("assets/img/page-banner/page-banner.jpg")}}" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- page-banner end -->

<!-- our-company start -->
<section class="our-company  pt-xs-80 pb-xs-80 pt-sm-100 pb-sm-100 pt-md-100 pb-md-100 pt-120 pb-120 overflow-hidden">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="our-company__meida wow fadeInUp" data-wow-delay=".3s">
                    <img src="{{ asset('assets/img/about/our-company-1.png') }}" alt="" class="img-fluid">

                    <div class="years-experience overflow-hidden mt-20 mt-sm-10 mt-xs-10 text-center">
                        <div class="number mb-5 color-white">
                            <span class="counter">23</span><sup>+</sup>
                        </div>

                        <h5 class="title color-white">Năm hoạt động</h5>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="our-company__meida border-radius wow fadeInUp" data-wow-delay=".5s">
                    <img src="{{ asset('assets/img/about/our-company-2.png') }}" alt="" class="img-fluid">

                    <div class="horizental-bar"></div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="our-company__content mt-md-50 mt-sm-40 mt-xs-35 wow fadeInUp" data-wow-delay=".3s">
                    <span class="sub-title fw-500 color-primary text-uppercase mb-sm-10 mb-xs-5 mb-20 d-block"><img src="{{ asset('assets/img/team-details/badge-line.svg') }}" class="img-fluid mr-10" alt=""> Hiểu về Công ty</span>
                    <h2 class="title color-d_black mb-20 mb-sm-15 mb-xs-10">Chuyên cung cấp các giải pháp chất lượng cao</h2>

                    <div class="descriiption font-la mb-30 mb-md-25 mb-sm-20 mb-xs-15">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip</p>
                    </div>

                    <div class="client-feedback d-flex flex-column flex-sm-row">
                        <div class="client-feedback__item text-center">
                            <div class="client-feedback__item-header">
                                <span class="color-primary font-la fw-600 text-uppercase">Dự án Thành công</span>
                            </div>

                            <div class="client-feedback__item-body">
                                <div class="number mb-10 mb-xs-5 color-d_black fw-600">+<span class="counter">95</span>%</div>
                                <div class="description font-la mb-10 mb-xs-5">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do.</p>
                                </div>
                                <div class="starts">
                                    <ul>
                                        <li><span></span></li>
                                        <li><span></span></li>
                                        <li><span></span></li>
                                        <li><span></span></li>
                                        <li><span></span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="client-feedback__item text-center">
                            <div class="client-feedback__item-header">
                                <span class="color-primary font-la fw-600 text-uppercase">Đánh giá Khách hàng</span>
                            </div>

                            <div class="client-feedback__item-body">
                                <div class="number mb-10 mb-xs-5 color-d_black fw-600">+<span class="counter">4.7</span></div>
                                <div class="description font-la mb-10 mb-xs-5">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do.</p>
                                </div>
                                <div class="starts">
                                    <ul>
                                        <li><span></span></li>
                                        <li><span></span></li>
                                        <li><span></span></li>
                                        <li><span></span></li>
                                        <li><span></span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- our-company end -->

<!-- employee-friendly start -->
<section class="employee-friendly bg-dark_white pt-sm-60 pt-xs-80 pb-xs-80 pt-sm-100 pb-sm-100 pt-md-100 pb-md-100 pt-120 pb-120 overflow-hidden">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-sm-9">
                <div class="employee-friendly__content wow fadeInUp" data-wow-delay=".3s">
                    <span class="sub-title fw-500 color-primary text-uppercase mb-sm-10 mb-xs-5 mb-15 d-block"><img src="{{ asset('assets/img/team-details/badge-line.svg') }}" class="img-fluid mr-10" alt=""> Services</span>
                    <h2 class="title color-d_black"><span>Dịch vụ </span>Nhân viên thân thiện  </h2>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="slider-controls mt-sm-30">
                    <div class="slider-arrows d-flex align-content-center justify-content-sm-end"></div>
                </div>
            </div>
        </div>

      <div class="row">
    <div class="col-12">
        <div class="employee-friendly__slider mt-65 mt-md-50 mt-sm-40 mt-xs-30 wow fadeInUp" data-wow-delay=".3s">
            <div class="slider-item">
                <div class="similar-work__item reade-more-hidden d-flex justify-content-between flex-column">
                    <div class="top d-flex align-items-center">
                        <div class="icon color-white text-center">
                            <i class="fal fa-analytics"></i>
                        </div>
                        <h4 class="title color-d_black"><a href="services.html">Dịch vụ Tài chính &amp; Chiến lược</a></h4>
                    </div>
                    <div class="bottom">
                        <div class="media overflow-hidden">
                            <img src="{{ asset('assets/img/services/services-2.png') }}" class="img-fluid" alt="">
                        </div>
                        <a href="services.html" class="theme-btn text-center fw-600">Đọc Chi tiết <i class="fas fa-long-arrow-alt-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="slider-item">
                <div class="similar-work__item reade-more-hidden d-flex justify-content-between flex-column">
                    <div class="top d-flex align-items-center">
                        <div class="icon color-white text-center">
                            <i class="icon-planning"></i>
                        </div>
                        <h4 class="title color-d_black"><a href="services.html">Lập kế hoạch kinh doanh, Chiến lược &amp; Thực hiện</a></h4>
                    </div>
                    <div class="bottom">
                        <div class="media overflow-hidden">
                            <img src="{{ asset('assets/img/project-details/project-details-2.png') }}" class="img-fluid" alt="">
                        </div>
                        <a href="services.html" class="theme-btn text-center fw-600">Đọc Chi tiết <i class="fas fa-long-arrow-alt-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="slider-item">
                <div class="similar-work__item reade-more-hidden d-flex justify-content-between flex-column">
                    <div class="top d-flex align-items-center">
                        <div class="icon color-white text-center">
                            <i class="icon-outline"></i>
                        </div>
                        <h4 class="title color-d_black"><a href="services.html">Dự báo Tài chính Và Phân tích</a></h4>
                    </div>
                    <div class="bottom">
                        <div class="media overflow-hidden">
                            <img src="{{ asset('assets/img/project-details/project-details-3.png') }}" class="img-fluid" alt="">
                        </div>
                        <a href="services.html" class="theme-btn text-center fw-600">Đọc Chi tiết <i class="fas fa-long-arrow-alt-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="slider-item">
                <div class="similar-work__item reade-more-hidden d-flex justify-content-between flex-column">
                    <div class="top d-flex align-items-center">
                        <div class="icon color-white text-center">
                            <i class="fal fa-analytics"></i>
                        </div>
                        <h4 class="title color-d_black"><a href="services.html">Dịch vụ Tài chính &amp; Chiến lược</a></h4>
                    </div>
                    <div class="bottom">
                        <div class="media overflow-hidden">
                            <img src="{{ asset('assets/img/services/services-2.png') }}" class="img-fluid" alt="">
                        </div>
                        <a href="services.html" class="theme-btn text-center fw-600">Đọc Chi tiết <i class="fas fa-long-arrow-alt-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="slider-item">
                <div class="similar-work__item reade-more-hidden d-flex justify-content-between flex-column">
                    <div class="top d-flex align-items-center">
                        <div class="icon color-white text-center">
                            <i class="icon-planning"></i>
                        </div>
                        <h4 class="title color-d_black"><a href="services.html">Lập kế hoạch kinh doanh, Chiến lược &amp; Thực hiện</a></h4>
                    </div>
                    <div class="bottom">
                        <div class="media overflow-hidden">
                            <img src="{{ asset('assets/img/project-details/project-details-2.png') }}" class="img-fluid" alt="">
                        </div>
                        <a href="services.html" class="theme-btn text-center fw-600">Đọc Chi tiết <i class="fas fa-long-arrow-alt-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="slider-item">
                <div class="similar-work__item reade-more-hidden d-flex justify-content-between flex-column">
                    <div class="top d-flex align-items-center">
                        <div class="icon color-white text-center">
                            <i class="icon-outline"></i>
                        </div>
                        <h4 class="title color-d_black"><a href="services.html">Dự báo Tài chính Và Phân tích</a></h4>
                    </div>
                    <div class="bottom">
                        <div class="media overflow-hidden">
                            <img src="{{ asset('assets/img/project-details/project-details-3.png') }}" class="img-fluid" alt="">
                        </div>
                        <a href="services.html" class="theme-btn text-center fw-600">Đọc Chi tiết <i class="fas fa-long-arrow-alt-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- employee-friendly end -->

<!-- company-skill start -->
<section class="company-skill pt-xs-80 pb-xs-80 pt-sm-100 pt-md-100 pt-120 pb-100 overflow-hidden">
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="company-skill__content wow fadeInUp" data-wow-delay=".3s">
                    <span class="sub-title d-block fw-500 color-primary text-uppercase mb-sm-10 mb-xs-5 mb-md-15 mb-20"><img src="{{ asset('assets/img/team-details/badge-line.svg') }}" class="img-fluid mr-10" alt="">Các công nghệ</span>
                    <h2 class="title color-pd_black mb-25 mb-xs-10 mb-sm-15">Công ty chúng tôi cung cấp <span>Ý tưởng sáng tạo</span></h2>

                    <div class="description font-la">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip</p>
                    </div>

                    <div class="progress-bar__wrapper mt-40 mt-sm-35 mt-xs-30">
                        <div class="single-progress-bar mb-30 wow fadeInUp" data-wow-delay=".3s">
                            <h6 class="title color-d_black mb-10">Thiết kế Web</h6>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="max-width: 80%">
                                    <span class="placeholder" style="left: 80%">80%</span>
                                </div>
                            </div>
                        </div>

                        <div class="single-progress-bar mb-30 wow fadeInUp" data-wow-delay=".5s">
                            <h6 class="title color-d_black mb-10">Phát triển trang Web</h6>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" style="max-width: 55%">
                                    <span class="placeholder" style="left: 55%">55%</span>
                                </div>
                            </div>
                        </div>

                        <div class="single-progress-bar mb-30 wow fadeInUp" data-wow-delay=".7s">
                            <h6 class="title color-d_black mb-10">Ứng dụng Web</h6>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="max-width: 90%">
                                    <span class="placeholder" style="left: 90%">90%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-6">
                <div class="company-skill__media-wrapper d-flex flex-column mt-lg-60 mt-md-50 mt-sm-45 mt-xs-40 align-items-center wow fadeInUp" data-wow-delay=".3s">
                    <a href="https://www.youtube.com/watch?v=9xwazD5SyVg" class="popup-video" data-effect="mfp-move-from-top"><i class="icon-play"></i></a>

                    <div class="company-skill__media">
                        <img src="{{asset("assets/img/about/company-skill-meida.png")}}" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- company-skill end -->

<!-- counter-area start -->
<div class="counter-area pb-xs-80 pb-sm-120 pb-md-120 pb-lg-120 pb-xl-140 pb-170 overflow-hidden">
    <div class="container">
        <div class="row mb-minus-30">
            <div class="col-xl-3 col-lg-4 col-sm-6">
                <div class="counter-area__item d-flex align-items-center wow fadeInUp" data-wow-delay=".3s">
                    <div class="icon color-primary">
                        <i class="icon-process-1"></i>
                    </div>

                    <div class="text text-center">
                        <div class="number fw-600 color-primary"><span class="counter">5620</span>+</div>
                        <div class="description font-la">Dự Án Thành Công</div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-4 col-sm-6">
                <div class="counter-area__item d-flex align-items-center wow fadeInUp" data-wow-delay=".5s">
                    <div class="icon color-primary">
                        <i class="icon-support-2"></i>
                    </div>

                    <div class="text text-center">
                        <div class="number fw-600 color-primary"><span class="counter">150</span>+</div>
                        <div class="description font-la">Chuyên Gia Tư Vấn</div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-4 col-sm-6">
                <div class="counter-area__item d-flex align-items-center wow fadeInUp" data-wow-delay=".7s">
                    <div class="icon color-primary">
                        <i class="icon-coffee-2"></i>
                    </div>

                    <div class="text text-center">
                        <div class="number fw-600 color-primary"><span class="counter">5506</span>+</div>
                        <div class="description font-la">Cuộc trò chuyện</div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-4 col-sm-6">
                <div class="counter-area__item d-flex align-items-center wow fadeInUp" data-wow-delay=".9s">
                    <div class="icon color-primary">
                        <i class="icon-teamwork-1"></i>
                    </div>

                    <div class="text text-center">
                        <div class="number fw-600 color-primary"><span class="counter">5225</span>+</div>
                        <div class="description font-la">Sự Hài Lòng Của Khách Hàng</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- counter-area end -->

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- counter-area end -->

<!-- our-team start -->
<section class="our-team bg-dark_white pb-xs-80 pt-xs-80 pt-sm-100 pb-sm-100 pt-md-100 pb-md-100 pt-120 pb-120 overflow-hidden">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="our-team__content mb-65 mb-md-50 mb-sm-40 mb-xs-30 text-center wow fadeInUp" data-wow-delay=".3s">
                    <span class="sub-title fw-500 color-primary text-uppercase mb-sm-10 mb-xs-5 mb-15 d-block"><img src="{{ asset('assets/img/team-details/badge-line.svg') }}" class="img-fluid mr-10" alt=""> Đội ngũ</span>
<h2 class="title color-d_black">Gặp Gỡ <span>Đội Ngũ Thành Viên</span></h2>
</div>
</div>
</div>

<div class="row mb-minus-30">
    <div class="col-xxl-3 col-lg-4 col-md-6">
        <a href="team-details.html" class="team-item team-about-item text-center mb-30 d-block overflow-hidden wow fadeInUp" data-wow-delay=".3s">
            <div class="media">
                <img src="{{ asset('assets/img/about/about-member-1.png') }}" class="img-fluid" alt="">
            </div>

            <div class="text d-flex align-items-center justify-content-center">
                <div class="left">
                    <h5 class="title color-white">Stephen Larry</h5>
                    <span class="position color-white font-la fw-500">Quản Lý Sản Phẩm</span>
                </div>

                <div class="right">
                    <div class="icon">
                        <i class="icon-arrow-right-2"></i>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <!-- team-item -->

    <div class="col-xxl-3 col-lg-4 col-md-6">
        <a href="team-details.html" class="team-item team-about-item text-center mb-30 d-block overflow-hidden wow fadeInUp" data-wow-delay=".5s">
            <div class="media">
                <img src="{{ asset('assets/img/about/about-member-2.png') }}" class="img-fluid" alt="">
            </div>

            <div class="text d-flex align-items-center justify-content-center">
                <div class="left">
                    <h5 class="title color-white">Nusrat Jahan</h5>
                    <span class="position color-white font-la fw-500">Trợ Lý Quản Lý, Tài Chính</span>
                </div>

                <div class="right">
                    <div class="icon">
                        <i class="icon-arrow-right-2"></i>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <!-- team-item -->

    <div class="col-xxl-3 col-lg-4 col-md-6">
        <a href="team-details.html" class="team-item team-about-item text-center mb-30 d-block overflow-hidden wow fadeInUp" data-wow-delay=".7s">
            <div class="media">
                <img src="{{ asset('assets/img/about/about-member-3.png') }}" class="img-fluid" alt="">
            </div>

            <div class="text d-flex align-items-center justify-content-center">
                <div class="left">
                    <h5 class="title color-white">Stephen Larry</h5>
                    <span class="position color-white font-la fw-500">Quản Lý Sản Phẩm</span>
                </div>

                <div class="right">
                    <div class="icon">
                        <i class="icon-arrow-right-2"></i>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <!-- team-item -->

    <div class="col-xxl-3 col-lg-4 col-md-6">
        <a href="team-details.html" class="team-item team-about-item text-center mb-30 d-block overflow-hidden wow fadeInUp" data-wow-delay=".9s">
            <div class="media">
                <img src="{{ asset('assets/img/about/about-member-4.png') }}" class="img-fluid" alt="">
            </div>

            <div class="text d-flex align-items-center justify-content-center">
                <div class="left">
                    <h5 class="title color-white">Stephen Larry</h5>
                    <span class="position color-white font-la fw-500">Quản Lý Sản Phẩm</span>
                </div>

                <div class="right">
                    <div class="icon">
                        <i class="icon-arrow-right-2"></i>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <!-- team-item -->
</div>

<div class="row">
    <div class="col-12">
        <div class="our-team__btn-wrapper text-center mt-70 mt-md-50 mt-sm-40 mt-xs-30 wow fadeInUp" data-wow-delay=".3s">
            <a href="team.html" class="theme-btn">Xem Tất Cả Thành Viên <i class="far fa-chevron-double-right"></i></a>
        </div>
    </div>
</div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- our-team end -->

<div class="testimonial-bg" style="background-image: {{asset("assets/img/about/testimonial-bg.png")}});">
    <!-- testimonial start -->
    <section class="testimonial pb-xs-80 pt-xs-80 pt-sm-100 pb-sm-100 pt-md-100 pb-md-100 pt-120 pb-110 overflow-hidden">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="testimonial__content mb-60 mb-md-50 mb-sm-40 mb-xs-30 text-center wow fadeInUp" data-wow-delay=".3s">
                       <h6 class="sub-title fw-500 color-primary text-uppercase mb-sm-10 mb-xs-5 mb-15"><img src="{{ asset('assets/img/team-details/badge-line.svg') }}" class="img-fluid mr-10" alt=""> Đánh Giá</h6>
<h2 class="title color-d_black">Phản Hồi <span>Khách Hàng</span></h2>
</div>
</div>
</div>
</div>

<div class="container container_testimonial">
    <div class="row">
        <div class="col-12">
            <div class="testimonial-slider">
                <div class="slider-item wow fadeInUp" data-wow-delay=".3s">
                    <div class="testimonial__item">
                        <div class="testimonial__item-header d-flex justify-content-between align-items-center mb-35 mb-sm-25 mb-xs-20">
                            <div class="left d-flex align-items-center">
                                <div class="media overflow-hidden">
                                    <img src="{{ asset('assets/img/testimonial/testimonial-1.png') }}" class="img-fluid" alt="">
                                </div>

                                <div class="meta">
                                    <h6 class="name fw-500 text-uppercase color-d_black">Md Ashikul Islam </h6>
                                    <span class="position font-la fw-500 color-d_black">Chuyên gia Thiết Kế Đồ Họa</span>
                                </div>
                            </div>

                            <div class="right">
                                <div class="starts">
                                    <ul>
                                        <li><span></span></li>
                                        <li><span></span></li>
                                        <li><span></span></li>
                                        <li><span></span></li>
                                        <li><span></span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="description font-la mb-40 mb-md-35 mb-sm-30 mb-xs-25">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Ut enim ad minim veniam.</p>
                        </div>

                        <div class="testimonial__item-footer d-flex justify-content-between">
                            <div class="socail-link">
                                <ul>
                                    <li>
                                        <a href="#"><img src="{{asset("assets/img/testimonial/discord.png")}}" alt=""></a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="{{asset("assets/img/testimonial/asana.png")}}" alt=""></a>
                                    </li>
                                </ul>
                            </div>

                            <div class="quote color-primary">
                                <i class="fas fa-quote-right"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="slider-item wow fadeInUp" data-wow-delay=".5s">
                    <div class="testimonial__item border--primary">
                        <div class="testimonial__item-header d-flex justify-content-between align-items-center mb-35 mb-sm-25 mb-xs-20">
                            <div class="left d-flex align-items-center">
                                <div class="media overflow-hidden">
                                    <img src="{{asset("assets/img/testimonial/testimonial-2.png")}}" class="img-fluid" alt="">
                                </div>

                                <div class="meta">
                                    <h6 class="name fw-500 text-uppercase color-d_black">Md Ashikul Islam</h6>
                                    <span class="position font-la fw-500 color-d_black">Chuyên gia Thiết Kế Đồ Họa</span>
                                </div>
                            </div>

                            <div class="right">
                                <div class="starts">
                                    <ul>
                                        <li><span></span></li>
                                        <li><span></span></li>
                                        <li><span></span></li>
                                        <li><span></span></li>
                                        <li><span></span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="description font-la mb-40 mb-md-35 mb-sm-30 mb-xs-25">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Ut enim ad minim veniam.</p>
                        </div>

                        <div class="testimonial__item-footer d-flex justify-content-between">
                            <div class="socail-link">
                                <ul>
                                    <li>
                                        <a href="#"><img src="{{asset("assets/img/testimonial/asana.png")}}" alt=""></a>
                                    </li>
                                </ul>
                            </div>

                            <div class="quote color-primary">
                                <i class="fas fa-quote-right"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="slider-item wow fadeInUp" data-wow-delay=".7s">
                    <div class="testimonial__item border-red">
                        <div class="testimonial__item-header d-flex justify-content-between align-items-center mb-35 mb-sm-25 mb-xs-20">
                            <div class="left d-flex align-items-center">
                                <div class="media overflow-hidden">
                                    <img src="{{ asset('assets/img/testimonial/testimonial-3.png') }}" class="img-fluid" alt="">
                                </div>

                                <div class="meta">
                                    <h6 class="name fw-500 text-uppercase color-d_black">Md Ashikul Islam</h6>
                                    <span class="position font-la fw-500 color-d_black">Chuyên gia Thiết Kế Đồ Họa</span>
                                </div>
                            </div>

                            <div class="right">
                                <div class="starts">
                                    <ul>
                                        <li><span></span></li>
                                        <li><span></span></li>
                                        <li><span></span></li>
                                        <li><span></span></li>
                                        <li><span></span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="description font-la mb-40 mb-md-35 mb-sm-30 mb-xs-25">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Ut enim ad minim veniam.</p>
                        </div>

                        <div class="testimonial__item-footer d-flex justify-content-between">
                            <div class="socail-link">
                                <ul>
                                    <li>
                                        <a href="#"><img src="{{ asset('assets/img/testimonial/amazon.png') }}" alt=""></a>
                                    </li>
                                </ul>
                            </div>

                            <div class="quote color-primary">
                                <i class="fas fa-quote-right"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="slider-item wow fadeInUp" data-wow-delay=".9s">
                    <div class="testimonial__item border--primary">
                        <div class="testimonial__item-header d-flex justify-content-between align-items-center mb-35 mb-sm-25 mb-xs-20">
                            <div class="left d-flex align-items-center">
                                <div class="media overflow-hidden">
                                    <img src="{{ asset('assets/img/testimonial/testimonial-2.png') }}" class="img-fluid" alt="">
                                </div>

                                <div class="meta">
                                    <h6 class="name fw-500 text-uppercase color-d_black">Md Ashikul Islam</h6>
                                    <span class="position font-la fw-500 color-d_black">Chuyên gia Thiết Kế Đồ Họa</span>
                                </div>
                            </div>

                            <div class="right">
                                <div class="starts">
                                    <ul>
                                        <li><span></span></li>
                                        <li><span></span></li>
                                        <li><span></span></li>
                                        <li><span></span></li>
                                        <li><span></span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="description font-la mb-40 mb-md-35 mb-sm-30 mb-xs-25">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Ut enim ad minim veniam.</p>
                        </div>

                        <div class="testimonial__item-footer d-flex justify-content-between">
                            <div class="socail-link">
                                <ul>
                                    <li>
                                        <a href="#"><img src="{{ asset('assets/img/testimonial/asana.png') }}" alt=""></a>
                                    </li>
                                </ul>
                            </div>

                            <div class="quote color-primary">
                                <i class="fas fa-quote-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


                        <div class="slider-item wow fadeInUp" data-wow-delay=".3s">
                            <div class="testimonial__item border-red">
                                <div class="testimonial__item-header d-flex justify-content-between align-items-center mb-35 mb-sm-25 mb-xs-20">
                                    <div class="left d-flex align-items-center">
                                        <div class="media overflow-hidden">
                                            <img src="{{ asset('assets/img/testimonial/testimonial-3.png') }}" class="img-fluid" alt="">
                                        </div>

                                        <div class="meta">
                                            <h6 class="name fw-500 text-uppercase color-d_black">Md Ashikul Islam</h6>
                                            <span class="position font-la fw-500 color-d_black"> Chuyên gia Thiết kế đồ hoạ</span>
                                        </div>
                                    </div>

                                    <div class="right">
                                        <div class="starts">
                                            <ul>
                                                <li><span></span></li>
                                                <li><span></span></li>
                                                <li><span></span></li>
                                                <li><span></span></li>
                                                <li><span></span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="description font-la mb-40 mb-md-35 mb-sm-30 mb-xs-25">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Ut enim ad minim veniam.</p>
                                </div>

                                <div class="testimonial__item-footer d-flex justify-content-between">
                                    <div class="socail-link">
                                        <ul>
                                            <li>
                                                <a href="#"><img src="{{ asset('assets/img/testimonial/amazon.png') }}" alt=""></a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="quote color-primary">
                                        <i class="fas fa-quote-right"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- testimonial end -->

    <!-- client-brand start -->
    <div class="client-brand pb-xs-80 pb-md-100 pb-sm-100 pb-lg-100 pb-105 overflow-hidden wow fadeInUp" data-wow-delay=".3s">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="client-brand__slider" data-slick='{
                            "dots": "false",
                            "arrows": "false",
                            "autoplay": "true",
                            "slidesToShow": 6,
                            "infinite": "true",
                            "slidesToScroll": 1,
                            "autoplaySpeed": 500,
                            "responsive": [
                                {
                                    "breakpoint": 1300,
                                    "settings": {
                                    "slidesToShow": 5
                                    }
                                },
                                {
                                "breakpoint": 1200,
                                "settings": {
                                    "slidesToShow": 4
                                }
                                },
                                {
                                    "breakpoint": 992,
                                    "settings": {
                                    "slidesToShow": 3
                                    }
                                },
                                {
                                    "breakpoint": 768,
                                    "settings": {
                                    "slidesToShow": 2
                                    }
                                },
                                {
                                "breakpoint": 481,
                                "settings": {
                                    "slidesToShow": 1
                                }
                                }
                            ]
                            }'>
                        <div class="slider-item">
                            <a href="#" class="client-brand__item">
                                <div class="client-brand__item-media">
                                    <img src="{{ asset('assets/img/brand/brand-1.png') }}" class="img-fluid" alt="">
                                </div>
                            </a>
                        </div>

                        <div class="slider-item">
                            <a href="#" class="client-brand__item">
                                <div class="client-brand__item-media">
                                    <img src="{{ asset('assets/img/brand/brand-2.png') }}" class="img-fluid" alt="">
                                </div>
                            </a>
                        </div>

                        <div class="slider-item">
                            <a href="#" class="client-brand__item">
                                <div class="client-brand__item-media">
                                    <img src="{{ asset('assets/img/brand/brand-3.png') }}" class="img-fluid" alt="">
                                </div>
                            </a>
                        </div>

                        <div class="slider-item">
                            <a href="#" class="client-brand__item">
                                <div class="client-brand__item-media">
                                    <img src="{{ asset('assets/img/brand/brand-4.png') }}" class="img-fluid" alt="">
                                </div>
                            </a>
                        </div>

                        <div class="slider-item">
                            <a href="#" class="client-brand__item">
                                <div class="client-brand__item-media">
                                    <img src="{{ asset('assets/img/brand/brand-5.png') }}" class="img-fluid" alt="">
                                </div>
                            </a>
                        </div>

                        <div class="slider-item">
                            <a href="#" class="client-brand__item">
                                <div class="client-brand__item-media">
                                    <img src="{{ asset('assets/img/brand/brand-6.png') }}" class="img-fluid" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="slider-item">
                            <a href="#" class="client-brand__item">
                                <div class="client-brand__item-media">
                                    <img src="{{ asset('assets/img/brand/brand-1.png') }}" class="img-fluid" alt="">
                                </div>
                            </a>
                        </div>

                        <div class="slider-item">
                            <a href="#" class="client-brand__item">
                                <div class="client-brand__item-media">
                                    <img src="{{ asset('assets/img/brand/brand-2.png') }}" class="img-fluid" alt="">
                                </div>
                            </a>
                        </div>

                        <div class="slider-item">
                            <a href="#" class="client-brand__item">
                                <div class="client-brand__item-media">
                                    <img src="{{ asset('assets/img/brand/brand-3.png') }}" class="img-fluid" alt="">
                                </div>
                            </a>
                        </div>

                        <div class="slider-item">
                            <a href="#" class="client-brand__item">
                                <div class="client-brand__item-media">
                                    <img src="{{ asset('assets/img/brand/brand-4.png') }}" class="img-fluid" alt="">
                                </div>
                            </a>
                        </div>

                        <div class="slider-item">
                            <a href="#" class="client-brand__item">
                                <div class="client-brand__item-media">
                                    <img src="{{ asset('assets/img/brand/brand-5.png') }}" class="img-fluid" alt="">
                                </div>
                            </a>
                        </div>

                        <div class="slider-item">
                            <a href="#" class="client-brand__item">
                                <div class="client-brand__item-media">
                                    <img src="{{ asset('assets/img/brand/brand-6.png') }}" class="img-fluid" alt="">
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- client-brand end -->
</div>

<!-- cta start -->
    @include("client.commonCta")
@stop

