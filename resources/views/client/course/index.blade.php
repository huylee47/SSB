@extends('client.master')
@section('content')
    <section class="page-banner pt-xs-60 pt-sm-80 overflow-hidden">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="page-banner__content mb-xs-10 mb-sm-15 mb-md-15 mb-20">
                        <div class="transparent-text">Khoá học</div>
                        <div class="page-title">
                            <h1>Khoá học <span></span></h1>
                        </div>
                    </div>

                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('index') }}">Trang chủ</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Khoá học</li>
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
    <!-- page-banner end -->

    <!-- team-area start -->
    <section class="blog pb-xs-80 pt-xs-80 pt-sm-100 pb-sm-100 pt-md-100 pb-md-100 pt-120 pb-120 overflow-hidden">
        <div class="container">
            <div class="row" data-sticky_parent>
                <div class="col-xl-8" data-sticky_column>
                    @foreach ($courses as $course)
                        <div class="blog-item blog-standard mb-xs-30 mb-sm-35 mb-md-40 mb-50">
                            <div class="blog-featured-thumb mb-xs-30 mb-sm-30 mb-md-35 mb-lg-40 mb-40">
                                <div class="media overflow-hidden">
                                    <img src="{{ url('') }}/assets/img/thumbnails/{{ $course->thumbnail }}"
                                        class="img-fluid" alt="">
                                </div>
                            </div>

                            <div
                                class="content pr-sm-25 pr-xs-15 pl-xs-15 pl-sm-25 pr-xs-15 pr-30 pl-30 pb-xs-25 pb-sm-30 pb-40">
                                <div class="post-meta mb-10">
                                    {{-- <a href="{{route('course.show',['slug'=>$course->slug])}}"><i class="icon-category"></i>Business, Consulting</a> --}}
                                    <a href="{{route('course.show',['slug'=>$course->slug])}}"><i class="fal fa-clock"></i>27 jun, 2023</a>
                                    {{-- <a href="{{route('course.show',['slug'=>$course->slug])}}"><img src="assets/img/icon/messages-1.svg" alt="">02 Comments</a> --}}
                                </div>

                                <h3><a href="{{route('course.show',['slug'=>$course->slug])}}">{{ $course->title }}</a></h3>

                                <p>{{ $course->description }}</p>

                                <div class="btn-link-share mt-xs-10 mt-sm-10 mt-md-15 mt-25">
                                    <a href="{{route('course.show',['slug'=>$course->slug])}}" class="theme-btn btn-border btn-fill">Chi tiết <i
                                            class="fas fa-long-arrow-alt-right"></i></a>
                                </div>
                            </div>
                        </div>
                    @endforeach


                    {{ $courses->links('client.components.pagination') }}




                    {{-- <div class="page-nav-wrap text-center">
                    <ul>
                        <!-- <li class="arrow left"><a href="#"><i class="far fa-chevron-double-left"></i></a></li> -->
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li class="arrow right"><a href="#"><i class="far fa-chevron-double-right"></i></a></li>
                    </ul>
                </div> --}}
                    <!-- /page-nav-wrap -->
                </div>

                <div class="col-xl-4">
                    <div class="main-sidebar" data-sticky_column>
                        <div class="single-sidebar-widget mb-40 pt-30 pr-30 pb-40 pl-30 pl-xs-20 pr-xs-20">
                            <h4 class="wid-title mb-30 mb-xs-20 color-d_black text-capitalize">Tìm kiếm khoá học</h4>

                            <div class="search_widget">
                                <form action="#">
                                    <input type="text" placeholder="Nhập từ khoá">
                                    <button type="submit"><i class="fal fa-search"></i></button>
                                </form>
                            </div>
                        </div>

                        {{-- <div class="single-sidebar-widget mb-40 pt-30 pr-30 pb-40 pl-30 pl-xs-20 pr-xs-20">
                        <h4 class="wid-title mb-30 mb-xs-20 color-d_black text-capitalize">Our provide</h4>

                        <div class="widget_categories">
                            <ul>
                                <li><a href="#">Business Consulting <i class="fas fa-long-arrow-alt-right"></i></a></li>
                                <li><a href="#">Business Solutions <i class="fas fa-long-arrow-alt-right"></i></a></li>
                                <li><a href="#">Investment Planning <i class="fas fa-long-arrow-alt-right"></i></a></li>
                                <li><a href="#">Strategy & Research <i class="fas fa-long-arrow-alt-right"></i></a></li>
                                <li><a href="#">Tax Management <i class="fas fa-long-arrow-alt-right"></i></a></li>
                            </ul>
                        </div>
                    </div> --}}

                        {{-- <div class="single-sidebar-widget mb-40 pt-30 pr-30 pb-40 pl-30 pl-xs-20 pr-xs-20">
                        <h4 class="wid-title mb-30 mb-xs-20 color-d_black text-capitalize">Resent Post</h4>

                        <div class="resent-posts">
                            <div class="single-post-item mb-20">
                                <div class="thumb overflow-hidden">
                                    <img src="assets/img/blog/blog-2.jpg" class="img-fluid" alt="">
                                </div>

                                <div class="post-content">
                                    <a href="{{route('course.show',['slug'=>$course->slug])}}" class="post-date d-block mb-10 text-uppercase">
                                        <i class="far fa-clock"></i>12 jun, 2022
                                    </a>
                                    <h6><a href="{{route('course.show',['slug'=>$course->slug])}}">Saving Time Achieving Success in Business</a></h6>
                                </div>
                            </div>

                            <div class="single-post-item mb-20">
                                <div class="thumb overflow-hidden">
                                    <img src="assets/img/blog/blog-6.jpg" class="img-fluid" alt="">
                                </div>

                                <div class="post-content">
                                    <a href="{{route('course.show',['slug'=>$course->slug])}}" class="post-date d-block mb-10 text-uppercase">
                                        <i class="far fa-clock"></i>25 Feb, 2023
                                    </a>
                                    <h6><a href="{{route('course.show',['slug'=>$course->slug])}}">Finances and Accounting are One of the Hardest</a></h6>
                                </div>
                            </div>

                            <a href="blog-standard.html" class="theme-btn d-block"><i class="far fa-sync-alt"></i>Tìm hiểu thêm</a>
                        </div>
                    </div> --}}

                        {{-- <div class="single-sidebar-widget widget__tags mb-40 pt-30 pr-30 pb-40 pl-30 pl-xs-20 pr-xs-20">
                        <h4 class="wid-title mb-30 mb-xs-20 color-d_black text-capitalize">Popular Tags</h4>

                        <div class="tags">
                            <ul>
                                <li><a href="#">Business</a></li>
                                <li><a href="#">Finance</a></li>
                                <li><a href="#">Solution</a></li>
                                <li><a href="#">Research</a></li>
                                <li><a href="#">Technology</a></li>
                                <li><a href="#">Growth</a></li>
                                <li><a href="#">Strategy</a></li>
                                <li><a href="#">Services</a></li>
                                <li><a href="#">Planning</a></li>
                            </ul>
                        </div>
                    </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
