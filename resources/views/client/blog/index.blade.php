@extends('client.master')
@section("content")
<section class="page-banner pt-xs-60 pt-sm-80 overflow-hidden">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="page-banner__content mb-xs-10 mb-sm-15 mb-md-15 mb-20">
                    <div class="transparent-text">Tin tức</div>
                    <div class="page-title">
                        <h1>Cập nhật tin tức nhanh chóng & <span>tiện lợi</span></h1>
                    </div>
                </div>

                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Trang chủ</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Tin tức</li>
                    </ol>
                </nav>
            </div>

            <div class="col-md-6">
                <div class="page-banner__media mt-xs-30 mt-sm-40">
                    <img src="assets/img/page-banner/page-banner-start.svg" class="img-fluid start" alt="">
                    <img src="assets/img/page-banner/page-banner.jpg" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<section class="blog pb-xs-80 pt-xs-80 pt-sm-100 pb-sm-100 pt-md-100 pb-md-100 pt-120 pb-115 overflow-hidden">
    <div class="container">
        <div class="row mb-minus-30">
            @foreach($blogs as $blog)
            <div class="col-xl-4 col-md-6 col-12">
            <div class="blog-item blog-item-three mb-30 wow fadeInUp" data-wow-delay=".3s">
                <div class="blog-featured-thumb mb-xs-30 mb-sm-30 mb-md-35 mb-lg-40 mb-50">
                    <div class="media overflow-hidden">
                        <img src="assets/img/blog/{{$blog->avatar}}" class="img-fluid" alt="">
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
</section>
@endsection