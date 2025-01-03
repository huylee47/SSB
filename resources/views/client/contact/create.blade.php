@php $extends = $isSPA ? 'client.layouts.spa' : 'client.master'; @endphp
@extends($extends)

@section("content")
    <!-- ========== Meta Tags ========== -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="dev_raj">
    <!-- ======== Page title ============ -->
    <title>CONSULTER - Business Consulting HTML Template</title>
    <!-- ===========  All Stylesheet ================= -->
    <script type="text/javascript" src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{asset("assets/css/vendors/sweetalert2/sweetalert2.all.min.js")}}"></script>
    <script src="{{asset("assets/js/views/contact/create.js")}}"></script>
    <link rel="stylesheet" href="{{asset("assets/css/views/contact/create.css")}}">

    <section class="page-banner pt-xs-60 pt-sm-80 overflow-hidden">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="page-banner__content mb-xs-10 mb-sm-15 mb-md-15 mb-20">
                        <div class="transparent-text">Liên hệ</div>
                        <div class="page-title">
                            <h1>Liên hệ <span>với chúng tôi</span></h1>
                        </div>
                    </div>

                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route("index")}}">Trang chủ</a></li>
                            <li data-spa class="breadcrumb-item active" aria-current="page">Liên hệ</li>
                        </ol>
                    </nav>
                </div>

                <div class="col-md-6">
                    <div class="page-banner__media mt-xs-30 mt-sm-40">
                        <img src="{{asset("assets/img/page-banner/page-banner-start.svg")}}" class="img-fluid start"
                             alt="">
                        <img src="{{asset("assets/img/page-banner/page-banner-1.jpg")}}" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- page-banner end -->

    <!-- contact-us start -->
    <section class="contact-us pb-xs-80 pt-xs-80 pt-sm-100 pb-sm-100 pt-md-100 pb-md-100 pt-120 pb-120 overflow-hidden">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="contact-us__content wow fadeInUp" data-wow-delay=".3s">
                        <h6 class="sub-title fw-500 color-primary text-uppercase mb-sm-15 mb-xs-10 mb-20"><img
                                src="{{asset("assets/img/team-details/badge-line.svg")}}" class="img-fluid mr-10"
                                alt=""> Liên hệ dễ dàng</h6>
                        <h2 class="title color-d_black mb-sm-15 mb-xs-10 mb-20">Khởi tạo liên kết</h2>

                        <div class="description font-la">
                            <p>Chúng tôi luôn sẵn sàng đáp ứng
                                và trả lời mọi thắc mắc. Bạn có thể liên hệ với chúng tôi qua điện thoại, email,
                                hoặc bằng cách điền vào mẫu liên hệ dưới đây.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="row contact-us__item-wrapper mt-xs-35 mt-sm-40 mt-md-45">
                        <div class="col-sm-6">
                            <div class="contact-us__item mb-40 wow fadeInUp" data-wow-delay=".3s">
                                <div
                                    class="contact-us__item-header mb-25 mb-md-20 mb-sm-15 mb-xs-10 d-flex align-items-center">
                                    <div class="icon mr-10 color-primary">
                                        <i class="fal fa-map-marker-alt"></i>
                                    </div>

                                    <h5 class="title color-d_black">Trụ sở chính</h5>
                                </div>

                                <div class="contact-us__item-body font-la">
                                    {{$config->address}}
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="contact-us__item mb-40 wow fadeInUp" data-wow-delay=".5s">
                                <div
                                    class="contact-us__item-header mb-25 mb-md-20 mb-sm-15 mb-xs-10 d-flex align-items-center">
                                    <div class="icon mr-10 color-primary">
                                        <i class="icon-home-location"></i>
                                    </div>

                                    <h5 class="title color-d_black">Chi nhánh</h5>
                                </div>

                                <div class="contact-us__item-body font-la">
                                    {{$config->address}}
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="contact-us__item mb-40 wow fadeInUp" data-wow-delay=".7s">
                                <div
                                    class="contact-us__item-header mb-25 mb-md-20 mb-sm-15 mb-xs-10 d-flex align-items-center">
                                    <div class="icon mr-10 color-primary">
                                        <i class="icon-phone"></i>
                                    </div>

                                    <h5 class="title color-d_black">Liên hệ miễn cước</h5>
                                </div>

                                <div class="contact-us__item-body font-la">
                                    <ul>
                                        <li><a href="tel:{{$config->hotline}}">{{$config->hotline}}</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="contact-us__item mb-40 wow fadeInUp" data-wow-delay=".9s">
                                <div
                                    class="contact-us__item-header mb-25 mb-md-20 mb-sm-15 mb-xs-10 d-flex align-items-center">
                                    <div class="icon mr-10 color-primary">
                                        <i class="icon-email"></i>
                                    </div>

                                    <h5 class="title color-d_black">Địa chỉ hòm thư</h5>
                                </div>

                                <div class="contact-us__item-body font-la">
                                    <ul>
                                        <li><a href="mailto:{{$config->email}}">{{$config->email}} </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <hr class="mt-md-45 mt-sm-30 mt-xs-30 mt-60">
                </div>
            </div>
        </div>
    </section>
    <!-- contact-us end -->

    <!-- contact-us form end -->
    <section class="contact-form  mb-xs-80 mb-sm-100 mb-md-100 mb-120 overflow-hidden">
        <div id="contact-map" class="mb-sm-30 mb-xs-25">
            <iframe
                src="{{$config->map}}"
                style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <!-- contact-map -->

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div
                        class="contact-form pt-md-30 pt-sm-25 pt-xs-20 pb-md-40 pb-sm-35 pb-xs-30 pt-xl-30 pb-xl-50 pt-45 pr-xl-50 pl-md-40 pl-sm-30 pl-xs-25 pr-md-40 pr-sm-30 pr-xs-25 pl-xl-50 pr-85 pb-60 pl-85 wow fadeInUp"
                        data-wow-delay=".3s">
                        <div class="contact-form__header mb-sm-35 mb-xs-30 mb-40">
                            <h6 class="sub-title fw-500 color-primary text-uppercase mb-15"><img
                                    src="{{asset("assets/img/team-details/badge-line.svg")}}" class="img-fluid mr-10"
                                    alt=""> Bạn cần trợ giúp?</h6>
                            <h3 class="title color-d_black">Liên hệ với chúng tôi</h3>
                        </div>

                        <form
                            id="contactForm"
                            method="post"
                            action="{{route("contact.store")}}"
                        >
                            @csrf
                            <div class="single-personal-info">
                                <input name="name" value="{{$contact->name}}" type="text" id="fname" placeholder="Họ và Tên"
                                       required>
                            </div>
                            <div class="single-personal-info">
                                <input name="email" value="{{$contact->email}}" type="email" id="email" placeholder="E-mail"
                                       required>
                            </div>
                            <div class="single-personal-info">
                                <input name="phone_number" value="{{$contact->phone_number}}" type="tel" placeholder="Số điện thoại"
                                       required>
                            </div>
                            <div class="single-personal-info">
                                <textarea name="message" placeholder="Tin nhắn" required> {{$contact->message}}</textarea>
                            </div>
                            <div class="text-start">
                                <button type="submit" class=" theme-btn btn-sm">Gửi tin nhắn<i
                                        class="far fa-chevron-double-right"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact-us form end -->

    <!-- cta start -->
   @include("client.commonCta")
   <!-- ====================================== -->
@stop




