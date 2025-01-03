@extends('client.master')
@section('content')
    <section class="blog pb-xs-80 pt-xs-80 pt-sm-100 pb-sm-100 pt-md-100 pb-md-100 pt-120 pb-120 overflow-hidden">
        <div class="container">
            <div class="row" data-sticky_parent>
                <div class="col-xl-8" data-sticky_column>
                    <div class="blog-item blog-standard blog-post-details">
                        <div class="blog-featured-thumb mb-xs-30 mb-sm-30 mb-md-35 mb-lg-40 mb-40">
                            <div class="media overflow-hidden">
                                <img src="{{ url('') }}/assets/img/blog/{{ $blog->avatar }}" class="img-fluid"
                                    alt="">

                            </div>
                        </div>
                        <div
                            class="content pr-sm-25 pr-xs-15 pl-xs-15 pl-sm-25 pr-xs-15 pr-30 pl-30 pb-xs-25 pb-sm-30 pb-40">
                            <div class="post-meta mb-10">
                                <a href="{{ route('blog.show', ['slug' => $blog->slug]) }}"><i class="icon-user"></i>Tác giả
                                    :
                                    {{ $blog->User->name }} </a>
                                {{-- <a href="{{ route('blog.show',['slug'=>$blog->slug])}}"><i class="icon-category"></i>Business, Consulting</a> --}}
                                <a href="{{ route('blog.show', ['slug' => $blog->slug]) }}"><i
                                        class="fal fa-clock"></i>{{ $blog->created_at->translatedFormat('l, d F Y') }}
                                </a>
                                {{-- <a href="{{ route('blog.show',['slug'=>$blog->slug])}}"><img src="assets/img/icon/messages-1.svg" alt="">02 Comments</a> --}}
                            </div>
                            <h3>{{ $blog->title }}</h3>
                            <span> {!! htmlspecialchars_decode($blog->content) !!}</span>
                            <div
                                class="tag-share_wrapper d-flex align-center justify-content-between flex-wrap mb-sm-40 mb-xs-30 mb-60">
                                <div class="tags">
                                    <ul>
                                        <li><a href="#">Business</a></li>
                                        <li><a href="#">Finance</a></li>
                                        <li><a href="#">Solution</a></li>
                                    </ul>
                                </div>

                                <div class="social-profile">
                                    <ul>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                </div>
                            </div>

                            <!-- comments section wrap start -->
                            {{-- <div class="comments-section-wrap overflow-hidden">
                            <h4>02 <span>Comments</span></h4>

                            <ul class="comments-item-list">
                                <li>
                                    <div class="author-img">
                                        <img src="assets/img/blog-details/auhor-1.jpg" alt="">
                                    </div>

                                    <div class="author-info-comment">
                                        <div class="info mb-10">
                                            <h5><a href="#">Md Ashikul Islam</a></h5>
                                            <span>January 22, 2023 at 7:30pm</span>
                                        </div>

                                        <div class="comment-text">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                                ex ea commodo consequat Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                            <a href="#">Reply</a>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="author-img">
                                        <img src="assets/img/blog-details/auhor-2.jpg" alt="">
                                    </div>

                                    <div class="author-info-comment">
                                        <div class="info mb-10">
                                            <h5><a href="#">Md jhon Islam</a></h5>
                                            <span>January 22, 2023 at 7:30pm</span>
                                        </div>

                                        <div class="comment-text">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                                            <a href="#">Reply</a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="comment-form-wrap">
                            <h4>Leave a Reply</h4>

                            <form action="#" class="comment-form">
                                <div class="single-form-input">
                                    <textarea placeholder="Your comment"></textarea>
                                </div>
                                <div class="input__wrapper w-100 d-flex flex-column flex-sm-row">
                                    <div class="single-form-input">
                                        <input type="text" placeholder="Your name">
                                    </div>
                                    <div class="single-form-input">
                                        <input type="email" placeholder="Your e-mail">
                                    </div>
                                </div>
                                <div class="single-form-input">
                                    <input type="text" placeholder="Your topic">
                                </div>

                                <button class="theme-btn submit-btn" type="submit">Post Comment</button>
                            </form>
                        </div> --}}
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    {{--        <div class="single-sidebar-widget mb-40 pt-30 pr-30 pb-40 pl-30 pl-xs-20 pr-xs-20">
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

                    <div class="single-sidebar-widget mb-40 pt-30 pr-30 pb-40 pl-30 pl-xs-20 pr-xs-20">
                        <h4 class="wid-title mb-30 mb-xs-20 color-d_black text-capitalize">Tin tức gần đây</h4>
                        <div class="resent-posts">
                            @foreach ($recentBlogs as $recentBlog)
                                <div class="single-post-item mb-20">
                                    <div class="thumb overflow-hidden">
                                        <img src="{{ url('') }}/assets/img/blog/{{ $recentBlog->avatar }}"
                                            class="img-fluid" alt="">
                                    </div>

                                    <div class="post-content">
                                        <a href="{{ route('blog.show', ['slug' => $recentBlog->slug]) }}"
                                            class="post-date d-block mb-10 text-uppercase">
                                            <i
                                                class="far fa-clock"></i>{{ $blog->created_at->translatedFormat('l, d F Y') }}
                                        </a>
                                        <h6><a
                                                href="{{ route('blog.show', ['slug' => $recentBlog->slug]) }}">{{ $recentBlog->title }}</a>
                                        </h6>
                                    </div>
                                </div>
                            @endforeach

                            <a href="{{route('blog.index')}}" class="theme-btn d-block"><i class="far fa-sync-alt"></i>More Post</a>
                        </div>
                    </div>

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
