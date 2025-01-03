@php $extends = $isSPA ? 'client.layouts.spa' : 'client.master'; @endphp
@extends($extends)
@section("content")
<div>
    <div class="banner-home overflow-hidden pt-lg-100 pt-md-90 pt-sm-80 pt-xs-70">
        <div class="container">
            {{-- <div class="row align-items-center"> --}}
                    <img src="{{asset("assets/img/banner/ssb.png")}}" alt="" width="100%">
                {{-- <div class="col-xl-6">
                    <div class="banner-home__content pb-lg-60 pb-md-50 pb-sm-45 pb-xs-40 wow fadeInLeft"
                        data-wow-delay=".5s">
                        <h6 class="sub-title color-black mb-20 mb-sm-15 mb-xs-10 d-inline-block">Welcome To
                            <span>Consulter</span> Consultancy
                        </h6>
                        <h1 class="title color-black fw-bold mb-20 mb-sm-15 mb-xs-10">Build Up Your Business Strategy
                        </h1>

                        <div class="description font-la color-black mb-45 mb-md-30 mb-sm-25 mb-xs-20">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore.</p>
                        </div>

                        <div class="theme-btn__wrapper d-flex flex-wrap">
                            <a href="blog.html" class="theme-btn fw-600 btn-red">Find Consultant <i
                                    class="far fa-chevron-double-right"></i></a>
                            <a href="about.html" class="theme-btn fw-600 btn-white-border">Read More <i
                                    class="far fa-chevron-double-right"></i></a>
                        </div>
                    </div>

                </div>

                <div class="col-xl-6">
                    <div class="banner-home__media">
                        <img src="assets/img/banner/banner-start.svg" class="img-fluid start" alt="">
                        <img src="assets/img/banner/banner-home.png" class="img-fluid" alt="">
                    </div>
                </div> --}}
            {{-- </div> --}}
        </div>
    </div>
    <!-- banner-home end -->

    <div class="our-company-financial overflow-hidden">
        <div class="overly">
            <div class="container"></div>
        </div>
        <!-- financial-area start -->
            {{-- <div class="financial pb-xs-80 pt-xs-80 pt-sm-100 pb-sm-100 pt-md-100 pb-md-100 pt-120 pb-120 overflow-hidden">
                <div class="container">
                    <div class="row mb-minus-30">
                        <div class="col-xl-4 col-md-6">
                            <div class="financial__item d-flex mb-30 wow fadeInUp" data-wow-delay=".3s"
                                style="background-image: url(assets/img/home/financial__item-bg.png)">
                                <div class="icon">
                                    <img src="assets/img/icon/growth.svg" alt="">
                                    <!-- <i class="fal fa-analytics"></i> -->
                                </div>

                                <div class="text">
                                    <h6 class="title color-pd_black mb-10 mb-xs-5">Business Strategy</h6>

                                    <div class="description font-la">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-md-6">
                            <div class="financial__item d-flex mb-30 wow fadeInUp" data-wow-delay=".5s"
                                style="background-image: url(assets/img/home/financial__item-bg.png)">
                                <div class="icon">
                                    <img src="assets/img/icon/planning-1.svg" alt="">
                                    <!-- <i class="fal fa-analytics"></i> -->
                                </div>

                                <div class="text">
                                    <h6 class="title color-pd_black mb-10 mb-xs-5">Financial Planning</h6>

                                    <div class="description font-la">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-md-6">
                            <div class="financial__item d-flex mb-30 wow fadeInUp" data-wow-delay=".7s"
                                style="background-image: url(assets/img/home/financial__item-bg.png)">
                                <div class="icon">
                                    <img src="assets/img/icon/international.svg" alt="">
                                    <!-- <i class="fal fa-analytics"></i> -->
                                </div>

                                <div class="text">
                                    <h6 class="title color-pd_black mb-10 mb-xs-5">International Business</h6>

                                    <div class="description font-la">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
        <!-- financial-area end -->

        <!-- our-company start -->
        <div class="our-company pb-xs-80 pb-100 overflow-hidden">
            <div class="container">
                <div class="row">

                    <div class="col-lg-5">
                    <div class="image-container">
                        <div class="large-image-wrapper">
                            <img src="{{asset("assets/img/about/our-company-2.png")}}" alt="Large Image" class="large-image" />
                        </div>
                        <img src="{{asset("assets/img/about/our-company-2.png")}}" alt="Small Image" class="small-image" />
                      </div>
                    </div>
                      <div class="col-lg-7">
                        <div class="our-company__content mt-md-50 mt-sm-40 mt-xs-35 wow fadeInUp"
                            data-wow-delay=".7s">
                             <span class="sub-title fw-500 color-red text-uppercase mb-sm-10 mb-xs-5 mb-20 d-block"><img
                                    src="{{asset("assets/img/home/line.svg")}}" class="img-fluid mr-10" alt=""> Về chúng
                                tôi</span>
                            <h2 class="title color-pd_black mb-20 mb-sm-15 mb-xs-10">Trường Kinh doanh và lãnh đạo</h2>

                            <div class="descriiption font-la mb-30 mb-md-25 mb-sm-20 mb-xs-15">
                                <p>Trường Kinh Doanh và Lãnh Đạo ( gọi tắt là "trường SSB" ) là nhằm hướng đến xây ựng
                                    các chương trình đào tạo đúng , chất lượng , chuẩn hoá cho doanh nghiệp Việt Nam và
                                    các nhà kinh doanh </p>
                            </div>
                            <div class="sign-box">
                                <div class="list-container">
                                    <ul class="list">
                                        <li>Đội ngũ giảng viên chuyên nghiệp</li>
                                        <li>Khóa học bổ ích</li>
                                        <li>Kiến thức liên tục cập nhật</li>
                                    </ul>
                                    <ul class="list">
                                        <li>Đăng ký nhanh gọn</li>
                                        <li>Áp dụng được ngay sau khóa học</li>
                                        <li>Giảng viên kèm trực tiếp</li>
                                    </ul>
                                </div>
                            </div>
                            <div>
                                <br>
                                <a href="services.html" class="theme-btn btn-sm btn-red">Xem thêm <i
                                        class="far fa-chevron-double-right"></i></a>
                            </div>

                            {{-- <div class="client-feedback d-flex flex-column flex-sm-row">
                            <div class="client-feedback__item client-feedback__item-two text-center">
                                <div class="client-feedback__item-header">
                                    <span class="color-red font-la fw-600 text-uppercase">Success Project</span>
                                </div>

                                <div class="client-feedback__item-body">
                                    <div class="number mb-10 mb-xs-5 color-pd_black fw-600">+<span
                                            class="counter">95</span>%</div>
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

                            <div class="client-feedback__item client-feedback__item-two text-center">
                                <div class="client-feedback__item-header">
                                    <span class="color-red font-la fw-600 text-uppercase">Customer Review</span>
                                </div>

                                <div class="client-feedback__item-body">
                                    <div class="number mb-10 mb-xs-5 color-pd_black fw-600">+<span
                                            class="counter">4.7</span></div>
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
                        </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- our-company end -->
    </div>


    <!-- planning-success end -->

    <!-- why-choose start -->
    <div
        class="why-choose why-choose__home pb-xs-80 pt-xs-80 pt-sm-100 pb-sm-100 pt-md-100 pb-md-100 pt-120 pb-120 overflow-hidden">
        <div class="container">
            <div class="row">
                <div class="why-choose__content wow fadeInUp" data-wow-delay=".3s">
                    <div class="">
                        <center>
                            <span class="sub-title d-block fw-500 color-red text-uppercase mb-sm-10 mb-xs-5 mb-15">
                                <img src="{{asset("assets/img/home/line.svg")}}" class="img-fluid mr-10" alt="">
                                Khoá học
                                <img src="{{asset("assets/img/home/line.svg")}}" class="img-fluid mr-10" alt="">
                            </span>
                            <h2 class="title color-pd_black">Khoá học của chúng tôi</h2>
                        </center>

                    </div>
                </div>

                {{-- <div class="col-lg-6">
                <div class="why-choose__content why-choose__content-home mt-md-25 mt-sm-20 mt-xs-20 wow fadeInUp"
                    data-wow-delay=".5s">
                    <div class="description font-la">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                            ullamco laboris nisi ut aliquip</p>
                    </div>

                    <a href="services-2.html" class="theme-btn btn-sm btn-red mt-30 mt-sm-25 mt-xs-20">View All
                        Services <i class="far fa-chevron-double-right"></i></a>
                </div>
            </div> --}}
            </div>
            <div class="card-container">
                @if(@isset($courses))
                    @foreach($courses as $course)
                        <div class="card">
                            <div class="card-outside">
                                <div class="card-icon d-flex justify-content-center align-items-center">
                                    <img
                                    src="{{ url('') }}/assets/img/thumbnails/{{ $course->thumbnail }}"
                                    />
                                </div>
                            </div>

                            <div class="card-title">{{$course->title}}</div>
                            <div class="card-content d-inline-block text-truncate" >
                                {{$course->description}}
                            </div>
                            <a href="#" class="card-button">Xem chi tiết</a>
                        </div>
                    @endforeach
                @else
                <div class="card">
                    <div class="card-outside">
                        <div class="card-icon">
                            <img src="icon1.png" alt="Marketing" />
                        </div>
                    </div>

                    <div class="card-title">CHUYÊN VIÊN LOGISTICS</div>
                    <div class="card-content">
                        Logistics là đội ngũ giải pháp cho chuỗi cung ứng và phát triển sản
                        phẩm
                    </div>
                    <a href="#" class="card-button">Xem chi tiết</a>
                </div>
                <div class="card">
                    <div class="card-outside">
                        <div class="card-icon">
                            <img src="icon1.png" alt="Marketing" />
                        </div>
                    </div>

                    <div class="card-title">CHUYÊN VIÊN LOGISTICS</div>
                    <div class="card-content">
                        Logistics là đội ngũ giải pháp cho chuỗi cung ứng và phát triển sản
                        phẩm.
                    </div>
                    <a href="#" class="card-button">Xem chi tiết</a>
                </div>
                <div class="card">
                    <div class="card-outside">
                        <div class="card-icon">
                            <img src="icon1.png" alt="Marketing" />
                        </div>
                    </div>

                    <div class="card-title">CHUYÊN VIÊN LOGISTICS</div>
                    <div class="card-content">
                        Logistics là đội ngũ giải pháp cho chuỗi cung ứng và phát triển sản
                        phẩm.
                    </div>
                    <a href="#" class="card-button">Xem chi tiết</a>
                </div>
                <div class="card">
                    <div class="card-outside">
                        <div class="card-icon">
                            <img src="icon1.png" alt="Marketing" />
                        </div>
                    </div>

                    <div class="card-title">CHUYÊN VIÊN LOGISTICS</div>
                    <div class="card-content">
                        Logistics là đội ngũ giải pháp cho chuỗi cung ứng và phát triển sản
                        phẩm.
                    </div>
                    <a href="#" class="card-button">Xem chi tiết</a>
                </div>
                <div class="card">
                    <div class="card-outside">
                        <div class="card-icon">
                            <img src="icon1.png" alt="Marketing" />
                        </div>
                    </div>

                    <div class="card-title">CHUYÊN VIÊN LOGISTICS</div>
                    <div class="card-content">
                        Logistics là đội ngũ giải pháp cho chuỗi cung ứng và phát triển sản
                        phẩm.
                    </div>
                    <a href="#" class="card-button">Xem chi tiết</a>
                </div>
                <div class="card">
                    <div class="card-outside">
                        <div class="card-icon">
                            <img src="icon1.png" alt="Marketing" />
                        </div>
                    </div>

                    <div class="card-title">CHUYÊN VIÊN LOGISTICS</div>
                    <div class="card-content">
                        Logistics là đội ngũ giải pháp cho chuỗi cung ứng và phát triển sản
                        phẩm.
                    </div>
                    <a href="#" class="card-button">Xem chi tiết</a>
                </div>
                @endif
            </div>
            {{-- <div class="row">
            <div class="col-12">
                <div class="why-choose__item-wrapper why-choose__item-two-wrapper d-grid justify-content-between mt-60 mt-md-50 mt-sm-40 mt-xs-30 wow fadeInUp"
                    data-wow-delay=".7s">
                    <div class="why-choose__item why-choose__item-two"
                        style="background-image: url(assets/img/home/why-choose__item-two-overly.png);">
                        <div class="icon mb-30 mb-lg-20 mb-md-10 mb-xs-5 color-red">
                            <i class="icon-consultation"></i>
                        </div>

                        <h6 class="title color-pd_black fw-600 mb-15 mb-xs-10">Business Consulting</h6>

                        <div class="description font-la mb-20 mb-sm-15 mb-xs-10">
                            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit sed quia
                                consequuntu.</p>
                        </div>

                        <a href="services-details.html" class="color-red d-block">Read More <i
                                class="far fa-chevron-double-right"></i></a>
                    </div>

                    <div class="why-choose__item why-choose__item-two"
                        style="background-image: url(assets/img/home/why-choose__item-two-overly.png);">
                        <div class="icon mb-30 mb-lg-20 mb-md-10 mb-xs-5 color-red">
                            <i class="icon-lawyer"></i>
                        </div>

                        <h6 class="title color-pd_black fw-600 mb-15 mb-xs-10">Lawyer Consulting</h6>

                        <div class="description font-la mb-20 mb-sm-15 mb-xs-10">
                            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit sed quia
                                consequuntu.</p>
                        </div>

                        <a href="services-details.html" class="color-red d-block">Read More <i
                                class="far fa-chevron-double-right"></i></a>
                    </div>

                    <div class="why-choose__item why-choose__item-two"
                        style="background-image: url(assets/img/home/why-choose__item-two-overly.png);">
                        <div class="icon mb-30 mb-lg-20 mb-md-10 mb-xs-5 color-red">
                            <i class="icon-financial"></i>
                        </div>

                        <h6 class="title color-pd_black fw-600 mb-15 mb-xs-10">Financial Consulting</h6>

                        <div class="description font-la mb-20 mb-sm-15 mb-xs-10">
                            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit sed quia
                                consequuntu.</p>
                        </div>

                        <a href="services-details.html" class="color-red d-block">Read More <i
                                class="far fa-chevron-double-right"></i></a>
                    </div>

                    <div class="why-choose__item why-choose__item-two"
                        style="background-image: url(assets/img/home/why-choose__item-two-overly.png);">
                        <div class="icon mb-30 mb-lg-20 mb-md-10 mb-xs-5 color-red">
                            <i class="icon-management"></i>
                        </div>

                        <h6 class="title -pd_black secondary-500 6b-15 mb-xs-10">IT Management</h6>

                        <div class="description font-la mb-20 mb-sm-15 mb-xs-10">
                            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit sed quia
                                consequuntu.</p>
                        </div>

                        <a href="services-details.html" class="color-red d-block">Read More <i
                                class="far fa-chevron-double-right"></i></a>
                    </div>
                </div>
            </div>
        </div> --}}
        </div>
    </div>
    <!-- why-choose end -->

    <!-- get-free end -->
    {{-- <div class="get-free get-free-home overflow-hidden">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="get-free__content-wrapper overflow-hidden"
                        style="background-image: url(assets/img/services/get-free-bg.png);">
                        <div class="get-free__content d-flex align-items-center justify-content-between">
                            <div class="get-free__content-text wow fadeInUp" data-wow-delay=".3s">
                                <h2 class="title mb-10 mb-xs-5 color-black">Get Free Quote</h2>

                                <div class="description color-black font-la fw-500">
                                    Perfect solution for your Company
                                </div>
                            </div>

                            <div class="get-free__content-form wow fadeInUp" data-wow-delay=".3s">
                                <form class="d-flex flex-column flex-lg-row">
                                    <div class="single-personal-info">
                                        <input type="text" placeholder="Your Name">
                                    </div>
                                    <div class="single-personal-info">
                                        <input type="email" placeholder="Your e-mail">
                                    </div>

                                    <button type="submit" class="theme-btn btn-sm">Get Quote <i
                                            class="far fa-chevron-double-right"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- get-free end -->

    <!-- work-process end -->
    {{-- <div class="work-process work-process-home bg-dark_red pb-xs-80 pb-sm-100 pb-md-100 pb-120 overflow-hidden">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="pricing__content mb-60 mb-sm-40 mb-xs-30 text-center wow fadeInUp"
                        data-wow-delay=".3s">
                        <span class="sub-title d-block fw-500 color-red text-uppercase mb-sm-10 mb-xs-5 mb-15"><img
                                src="assets/img/home/line.svg" class="img-fluid mr-10" alt=""> Our Work
                            Process</span>
                        <h2 class="title color-pd_black">How Our Services Work</h2>
                    </div>
                </div>
            </div>

            <div class="row mb-minus-30 last_no_bullet">
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="work-process__item work-process__item-two mb-30 text-center wow fadeInUp"
                        data-wow-delay=".3s">
                        <div class="icon-wrapper d-flex">
                            <div class="icon">
                                <i class="icon-research"></i>
                            </div>

                            <button class="theme-btn color-pd_black"
                                style="background-image: url(assets/img/home/theme-btn-overly-1.png)">Step - 1</button>
                        </div>

                        <div class="text">
                            <h6 class="title color-pd_black mb-15 mb-sm-10 mb-xs-5">Research Your Problem</h6>

                            <div class="description font-la">
                                <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="work-process__item work-process__item-two mb-30 text-center wow fadeInUp"
                        data-wow-delay=".5s">
                        <div class="icon-wrapper d-flex">
                            <div class="icon">
                                <i class="icon-worker-1"></i>
                            </div>

                            <button class="theme-btn color-pd_black"
                                style="background-image: url(assets/img/home/theme-btn-overly-1.png)">Step - 2</button>
                        </div>

                        <div class="text">
                            <h6 class="title color-pd_black mb-15 mb-sm-10 mb-xs-5">Identifying Problem</h6>

                            <div class="description font-la">
                                <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut</p>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="work-process__item work-process__item-two mb-30 text-center wow fadeInUp"
                        data-wow-delay=".7s">
                        <div class="icon-wrapper d-flex">
                            <div class="icon">
                                <i class="icon-outline"></i>
                            </div>

                            <button class="theme-btn color-pd_black"
                                style="background-image: url(assets/img/home/theme-btn-overly-1.png)">Step - 3</button>
                        </div>

                        <div class="text">
                            <h6 class="title color-pd_black mb-15 mb-sm-10 mb-xs-5">Solutions Your Problem</h6>

                            <div class="description font-la">
                                <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="work-process__item work-process__item-two mb-30 text-center wow fadeInUp"
                        data-wow-delay=".9s">
                        <div class="icon-wrapper d-flex">
                            <div class="icon">
                                <i class="icon-target-2"></i>
                            </div>

                            <button class="theme-btn color-pd_black"
                                style="background-image: url(assets/img/home/theme-btn-overly-1.png)">Step - 4</button>
                        </div>

                        <div class="text">
                            <h6 class="title color-pd_black mb-15 mb-sm-10 mb-xs-5">Success Your Business</h6>

                            <div class="description font-la">
                                <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- work-process end -->

    <!-- our-portfolio-home start -->
    {{-- <div
        class="our-portfolio-home pb-xs-80 pt-xs-80 pt-sm-100 pb-sm-100 pt-md-100 pb-md-100 pt-120 pb-120 overflow-hidden">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="our-portfolio-home__content text-center mb-60 mb-sm-50 mb-xs-40 wow fadeInUp"
                        data-wow-delay=".3s">
                        <span class="sub-title fw-500  text-uppercase mb-sm-10 mb-xs-5 mb-15 d-block color-red"><img
                                src="assets/img/home/line.svg" class="img-fluid mr-10" alt=""> Our
                            Portfolio</span>
                        <h2 class="title color-pd_black">Our Consulting Case Study</h2>
                    </div>
                </div>
            </div>

            <div class="row mb-minus-30">
                <div class="col-xl-4 col-md-6 col-12">
                    <div class="our-portfolio-home__item mb-30 wow fadeInUp" data-wow-delay=".3s">
                        <div class="featured-thumb">
                            <div class="media overflow-hidden">
                                <img src="assets/img/home/our-portfolio-home__item-1.png" class="img-fluid"
                                    alt="">
                            </div>
                        </div>

                        <div class="content d-flex flex-row">
                            <div class="left">
                                <div class="post-author mb-5 mb-xs-5 text-uppercase">
                                    <a href="blog-details.html">Business, Finance</a>
                                </div>

                                <h5 class="color-pd_black mb-15 mb-xs-10"><a href="blog-details.html">Business &
                                        Strategy</a></h5>
                                <div class="description font-la">
                                    <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut</p>
                                </div>
                            </div>

                            <div class="btn-link-share">
                                <a href="blog-details.html" class="theme-btn color-pd_black"
                                    style="background-image: url(assets/img/home/theme-btn-overly.png)">View Details <i
                                        class="icon-arrow-right-2"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-md-6 col-12">
                    <div class="our-portfolio-home__item mb-30 wow fadeInUp" data-wow-delay=".5s">
                        <div class="featured-thumb">
                            <div class="media overflow-hidden">
                                <img src="assets/img/home/our-portfolio-home__item-2.png" class="img-fluid"
                                    alt="">
                            </div>
                        </div>

                        <div class="content d-flex flex-row">
                            <div class="left">
                                <div class="post-author mb-5 mb-xs-5 text-uppercase">
                                    <a href="blog-details.html">Financial solution</a>
                                </div>

                                <h5 class="color-pd_black mb-15 mb-xs-10"><a href="blog-details.html">Financial
                                        Reporting</a></h5>
                                <div class="description font-la">
                                    <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut</p>
                                </div>
                            </div>

                            <div class="btn-link-share">
                                <a href="blog-details.html" class="theme-btn color-pd_black"
                                    style="background-image: url(assets/img/home/theme-btn-overly.png)">View Details <i
                                        class="icon-arrow-right-2"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-md-6 col-12">
                    <div class="our-portfolio-home__item mb-30 wow fadeInUp" data-wow-delay=".7s">
                        <div class="featured-thumb">
                            <div class="media overflow-hidden">
                                <img src="assets/img/home/our-portfolio-home__item-3.png" class="img-fluid"
                                    alt="">
                            </div>
                        </div>

                        <div class="content d-flex flex-row">
                            <div class="left">
                                <div class="post-author mb-5 mb-xs-5 text-uppercase">
                                    <a href="blog-details.html">Business, Consulting</a>
                                </div>

                                <h5 class="color-pd_black mb-15 mb-xs-10"><a href="blog-details.html">Business
                                        Consulting</a></h5>
                                <div class="description font-la">
                                    <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut</p>
                                </div>
                            </div>

                            <div class="btn-link-share">
                                <a href="blog-details.html" class="theme-btn color-pd_black"
                                    style="background-image: url(assets/img/home/theme-btn-overly.png)">View Details <i
                                        class="icon-arrow-right-2"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="our-portfolio-home__read-more text-center mt-50 mt-md-40 mt-sm-35 mt-xs-30 wow fadeInUp"
                        data-wow-delay=".3s">
                        <a href="blog.html" class="theme-btn  btn-border">View All Project <i
                                class="far fa-chevron-double-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- our-portfolio-home end -->

    <!-- our-team-home-1 start -->
    <div
        class="our-team our-team-home-1 bg-dark_red pb-xs-80 pt-xs-80 pt-sm-100 pb-sm-100 pt-md-100 pb-md-100 pt-120 pb-120 overflow-hidden">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="our-team__content mb-60 mb-md-50 mb-sm-40 mb-xs-30 text-center wow fadeInUp"
                        data-wow-delay=".3s">
                        <span class="sub-title fw-500 color-red text-uppercase mb-sm-10 mb-xs-5 mb-15 d-block"><img
                                src="{{asset("assets/img/home/line.svg")}}" class="img-fluid mr-10" alt=""> Great
                            team</span>
                        <h2 class="title color-d_black">Danh sách giảng viên</h2>
                    </div>
                </div>
            </div>

            <div class="row mb-minus-30">
                <div class="col-xxl-3 col-lg-4 col-md-6">
                    <div class="team-item team-item-three text-center mb-30 d-block overflow-hidden wow fadeInUp"
                        data-wow-delay=".3s">
                        <div class="media">
                            <img src="{{asset("assets/img/team/team-item-10.jpg")}}" class="img-fluid" alt="">

                            <div class="social-profile">
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="text d-flex align-items-center justify-content-center">
                            <div class="left">
                                <h5 class="title color-black">Stephen Larry</h5>
                                <span class="position color-red font-la fw-500">Product Manager</span>
                            </div>
                        </div>

                        <a href="team-details.html" class="theme-btn text-uppercase">View Details <i
                                class="far fa-chevron-double-right"></i></a>
                    </div>
                </div>
                <!-- team-item -->

                <div class="col-xxl-3 col-lg-4 col-md-6">
                    <div class="team-item team-item-three text-center mb-30 d-block overflow-hidden wow fadeInUp"
                        data-wow-delay=".5s">
                        <div class="media">
                            <img src="{{asset("assets/img/team/team-item-11.jpg")}}" class="img-fluid" alt="">

                            <div class="social-profile">
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="text d-flex align-items-center justify-content-center">
                            <div class="left">
                                <h5 class="title color-black">Nusrat Jahan</h5>
                                <span class="position color-red font-la fw-500">Assistent Manager, Finance</span>
                            </div>
                        </div>

                        <a href="team-details.html" class="theme-btn text-uppercase">View Details <i
                                class="far fa-chevron-double-right"></i></a>
                    </div>
                </div>
                <!-- team-item -->

                <div class="col-xxl-3 col-lg-4 col-md-6">
                    <div class="team-item team-item-three text-center mb-30 d-block overflow-hidden wow fadeInUp"
                        data-wow-delay=".7s">
                        <div class="media">
                            <img src="{{asset("assets/img/team/team-item-1.jpg")}}" class="img-fluid" alt="">

                            <div class="social-profile">
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="text d-flex align-items-center justify-content-center">
                            <div class="left">
                                <h5 class="title color-black">Richard Paul</h5>
                                <span class="position color-red font-la fw-500">Business Consulting</span>
                            </div>
                        </div>

                        <a href="team-details.html" class="theme-btn text-uppercase">View Details <i
                                class="far fa-chevron-double-right"></i></a>
                    </div>
                </div>
                <!-- team-item -->

                <div class="col-xxl-3 col-lg-4 col-md-6">
                    <div class="team-item team-item-three text-center mb-30 d-block overflow-hidden wow fadeInUp"
                        data-wow-delay=".9s">
                        <div class="media">
                            <img src="{{asset("assets/img/team/team-item-12.jpg")}}" class="img-fluid" alt="">

                            <div class="social-profile">
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="text d-flex align-items-center justify-content-center">
                            <div class="left">
                                <h5 class="title color-black">Elizabeth Linda</h5>
                                <span class="position color-red font-la fw-500">Consulter Agency</span>
                            </div>
                        </div>

                        <a href="team-details.html" class="theme-btn text-uppercase">View Ddetails <i
                                class="far fa-chevron-double-right"></i></a>
                    </div>
                </div>
                <!-- team-item -->
            </div>
        </div>
    </div>
    <!-- our-team-home-1 end -->

    <!-- testimonial start -->
    {{-- <div
        class="testimonial test pb-xs-80 pt-xs-80 pt-sm-100 pb-sm-100 pt-md-100 pb-md-100 pt-120 pb-120 overflow-hidden">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-9">
                    <div class="employee-friendly__content wow fadeInUp" data-wow-delay=".3s">
                        <span class="sub-title fw-500 color-red text-uppercase mb-sm-10 mb-xs-5 mb-15 d-block"><img
                                src="assets/img/home/line.svg" class="img-fluid mr-10" alt="">
                            testimonials</span>
                        <h2 class="title color-pd_black">What people say About Us</h2>
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="slider-controls slider-controls-two mt-xs-15 wow fadeInUp" data-wow-delay=".3s">
                        <div class="testimonial-slider-arrows d-flex align-content-center justify-content-sm-end">
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="testimonial-slider-home-1 mt-65 mt-md-50 mt-sm-40 mt-xs-30 wow fadeInUp"
                        data-wow-delay=".5s">
                        <div class="slider-item active">
                            <div class="testimonial__item testimonial-item-three">
                                <div
                                    class="testimonial__item-header d-flex justify-content-between align-items-center mb-30 mb-sm-25 mb-xs-20">
                                    <div class="left d-flex align-items-center">
                                        <div class="media overflow-hidden">
                                            <img src="assets/img/testimonial/testimonial-1.png" class="img-fluid"
                                                alt="">
                                        </div>

                                        <div class="meta">
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

                                    <div class="right">
                                        <i class="fal fa-quote-right"></i>
                                    </div>
                                </div>

                                <div class="description font-la mb-25">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua Ut enim ad minim veniam.</p>
                                </div>

                                <div class="testimonial__item-footer d-flex justify-content-between">
                                    <div class="socail-link">
                                        <span class="name">Bm Ashik <span>- Company Ceo</span></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="slider-item">
                            <div class="testimonial__item testimonial-item-three">
                                <div
                                    class="testimonial__item-header d-flex justify-content-between align-items-center mb-30 mb-sm-25 mb-xs-20">
                                    <div class="left d-flex align-items-center">
                                        <div class="media overflow-hidden">
                                            <img src="assets/img/testimonial/testimonial-4.png" class="img-fluid"
                                                alt="">
                                        </div>

                                        <div class="meta">
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

                                    <div class="right">
                                        <i class="fal fa-quote-right"></i>
                                    </div>
                                </div>

                                <div class="description font-la mb-25">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua Ut enim ad minim veniam.</p>
                                </div>

                                <div class="testimonial__item-footer d-flex justify-content-between">
                                    <div class="socail-link">
                                        <span class="name">Bm Ashik <span>- Company Ceo</span></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="slider-item">
                            <div class="testimonial__item testimonial-item-three">
                                <div
                                    class="testimonial__item-header d-flex justify-content-between align-items-center mb-30 mb-sm-25 mb-xs-20">
                                    <div class="left d-flex align-items-center">
                                        <div class="media overflow-hidden">
                                            <img src="assets/img/testimonial/testimonial-5.png" class="img-fluid"
                                                alt="">
                                        </div>

                                        <div class="meta">
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

                                    <div class="right">
                                        <i class="fal fa-quote-right"></i>
                                    </div>
                                </div>

                                <div class="description font-la mb-25">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua Ut enim ad minim veniam.</p>
                                </div>

                                <div class="testimonial__item-footer d-flex justify-content-between">
                                    <div class="socail-link">
                                        <span class="name">Bm Ashik <span>- Company Ceo</span></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="slider-item">
                            <div class="testimonial__item testimonial-item-three">
                                <div
                                    class="testimonial__item-header d-flex justify-content-between align-items-center mb-30 mb-sm-25 mb-xs-20">
                                    <div class="left d-flex align-items-center">
                                        <div class="media overflow-hidden">
                                            <img src="assets/img/testimonial/testimonial-1.png" class="img-fluid"
                                                alt="">
                                        </div>

                                        <div class="meta">
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

                                    <div class="right">
                                        <i class="fal fa-quote-right"></i>
                                    </div>
                                </div>

                                <div class="description font-la mb-25">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua Ut enim ad minim veniam.</p>
                                </div>

                                <div class="testimonial__item-footer d-flex justify-content-between">
                                    <div class="socail-link">
                                        <span class="name">Bm Ashik <span>- Company Ceo</span></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="slider-item">
                            <div class="testimonial__item testimonial-item-three">
                                <div
                                    class="testimonial__item-header d-flex justify-content-between align-items-center mb-30 mb-sm-25 mb-xs-20">
                                    <div class="left d-flex align-items-center">
                                        <div class="media overflow-hidden">
                                            <img src="assets/img/testimonial/testimonial-4.png" class="img-fluid"
                                                alt="">
                                        </div>

                                        <div class="meta">
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

                                    <div class="right">
                                        <i class="fal fa-quote-right"></i>
                                    </div>
                                </div>

                                <div class="description font-la mb-25">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua Ut enim ad minim veniam.</p>
                                </div>

                                <div class="testimonial__item-footer d-flex justify-content-between">
                                    <div class="socail-link">
                                        <span class="name">Bm Ashik <span>- Company Ceo</span></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="slider-item">
                            <div class="testimonial__item testimonial-item-three">
                                <div
                                    class="testimonial__item-header d-flex justify-content-between align-items-center mb-30 mb-sm-25 mb-xs-20">
                                    <div class="left d-flex align-items-center">
                                        <div class="media overflow-hidden">
                                            <img src="assets/img/testimonial/testimonial-5.png" class="img-fluid"
                                                alt="">
                                        </div>

                                        <div class="meta">
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

                                    <div class="right">
                                        <i class="fal fa-quote-right"></i>
                                    </div>
                                </div>

                                <div class="description font-la mb-25">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua Ut enim ad minim veniam.</p>
                                </div>

                                <div class="testimonial__item-footer d-flex justify-content-between">
                                    <div class="socail-link">
                                        <span class="name">Bm Ashik <span>- Company Ceo</span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- testimonial end -->

    <div class="can-help-overly-home overflow-hidden">
        <div class="can-help-overly">
            <div class="container"></div>
        </div>
        <!-- can-help start -->
        {{-- <div
        class="can-help can-help-home-1 pb-xs-80 pt-xs-80 pt-sm-100 pb-sm-100 pt-md-100 pb-md-100 pt-120 pb-120 overflow-hidden">
        <div class="can-help-background" style="background-image: url(assets/img/home/can-help-background.png)">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-7">
                    <div class="can-help__content  mb-sm-40 mb-xs-40 mb-md-45 mb-lg-50 wow fadeInUp"
                        data-wow-delay=".3s">
                        <h2 class="title color-black mb-sm-15 mb-xs-10 mb-20">Experience The Evolution Of Your
                            Business</h2>

                        <div class="description font-la mb-md-25 mb-sm-25 mb-xs-20 mb-lg-30 mb-40 color-black">
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                                suffered alteration in some form, by injected humour, or randomised words which
                                don't look</p>
                        </div>

                        <div class="can-help__content-btn-group d-flex flex-column flex-sm-row">
                            <a href="tel:+1235568824"
                                class="theme-btn d-flex flex-column flex-md-row align-items-md-center">
                                <div class="icon color-red">
                                    <i class="icon-call"></i>
                                    <!-- <img src="assets/img/icon/phone-1.svg" alt=""> -->
                                </div>
                                <div class="text">
                                    <span class="font-la mb-10 d-block fw-500 color-black">Call Us Everyday</span>
                                    <h5 class="fw-500 color-black">+123 556 8824</h5>
                                </div>
                            </a>

                            <a href="mailto:consulter@gmail.com"
                                class="theme-btn d-flex flex-column flex-md-row align-items-md-center">
                                <div class="icon color-red">
                                    <i class="icon-email-1"></i>
                                    <!-- <img src="assets/img/icon/phone-1.svg" alt=""> -->
                                </div>
                                <div class="text">
                                    <span class="font-la mb-10 d-block fw-500 color-black">Email Drop Us</span>
                                    <h5 class="fw-500 color-black">consulter@gmail.com</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-5">
                    <div class="contact-form pt-md-30 pt-sm-25 pt-xs-20 pb-md-40 pb-sm-35 pb-xs-30 pt-xl-30 pb-xl-50 pt-45 pr-xl-50 pl-md-40 pl-sm-30 pl-xs-25 pr-md-40 pr-sm-30 pr-xs-25 pl-xl-50 pr-85 pb-60 pl-85 wow fadeInUp"
                        data-wow-delay=".5s">
                        <div class="contact-form__header mb-sm-35 mb-xs-30 mb-40">
                            <h6 class="sub-title fw-500 color-red text-uppercase mb-15"><img
                                    src="assets/img/home/line.svg" class="img-fluid mr-10" alt=""> Get In
                                Touch</h6>
                            <h3 class="title color-d_black">Free Consultation</h3>
                        </div>

                        <form>
                            <div class="single-personal-info">
                                <input type="text" placeholder="Your Name">
                            </div>
                            <div class="single-personal-info">
                                <input type="email" placeholder="Your e-mail">
                            </div>
                            <div class="single-personal-info">
                                <input type="text" placeholder="Subject">
                            </div>
                            <div class="single-personal-info">
                                <textarea placeholder="Your Massage"></textarea>
                            </div>

                            <button type="submit" class="theme-btn btn-sm btn-red">Free Consultant <i
                                    class="far fa-chevron-double-right"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- can-help end -->

        <!-- blog-news start -->
        <div class="blog-news pb-xs-80 pb-sm-100 pb-md-100 pb-120 overflow-hidden">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12">
                        {{-- <div class="blog-news__content text-center wow fadeInUp" data-wow-delay=".3s">
                        <span
                            class="sub-title fw-500  text-uppercase mb-sm-10 mb-xs-5 mb-15 d-block color-red"><img
                                src="assets/img/home/line.svg" class="img-fluid mr-10" alt=""> Blog &
                            News</span>
                        <h2 class="title color-d_black">Consulter Latest Blog & News</h2>
                    </div> --}}
                        <div class="employee-friendly__content wow fadeInUp" data-wow-delay=".3s">
                            <span class="sub-title fw-500 color-red text-uppercase mb-sm-10 mb-xs-5 mb-15 d-block"><img
                                    src="{{asset("assets/img/home/line.svg")}}" class="img-fluid mr-10" alt="">
                                tin tức</span>
                            <h2 class="title color-pd_black">Cập nhật tin tức</h2>
                        </div>
                    </div>
                </div>

                <div class="blog-news__bottom mt-60 mt-sm-50 mt-xs-40">
                    <div class="row mb-minus-30">
                        @foreach($blogs as $blog)
                            <div class="col-xl-4 col-md-6 col-12">
                            <div class="blog-item blog-item-three mb-30 wow fadeInUp" data-wow-delay=".3s">
                                <div class="blog-featured-thumb mb-xs-30 mb-sm-30 mb-md-35 mb-lg-40 mb-50">
                                    <div class="media overflow-hidden">
                                        <img src="{{asset("assets/img/blog/$blog->avatar")}}" class="img-fluid" alt="">
                                    </div>
                                    <div class="date">
                                        <span>{{ $blog->created_at->translatedFormat('d') }}</span>
                                        <span>{{ $blog->created_at->translatedFormat('F') }}</span>
                                        <span>{{ $blog->created_at->translatedFormat('Y') }}</span>
                                    </div>
                                </div>

                                <div class="content pr-sm-25 pr-xs-15 pl-xs-15 pl-sm-25 pr-xs-15 pr-30 pb-30 pl-30">
                                    <div class="post-author mb-5">
                                        <a href="blog.html">{{$blog->User->name}}</a>
                                    </div>

                                    <h4><a href="blog.html">{{$blog->title}}</a></h4>
                                    <h6>
                                        <span><a href="blog.html">{{$blog->description}}</span>
                                    </h6>

                                    <div class="btn-link-share mt-xs-10 mt-sm-10 mt-15">
                                        <a href="{{ route('blog.show', ['slug' => $blog->slug]) }}" class="theme-btn btn-border">Đọc thêm <i
                                                class="fas fa-long-arrow-alt-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <!-- blog-news end -->
    </div>

</div>
@endsection

