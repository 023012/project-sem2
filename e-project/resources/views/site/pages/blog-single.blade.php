@extends('site.app')
@section('content')
    <!-- ...:::: Start Breadcrumb Section:::... -->
    <div class="breadcrumb-section breadcrumb-bg-color--golden">
        <div class="breadcrumb-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h3 class="breadcrumb-title">Bài viết cá nhân</h3>
                        <div class="breadcrumb-nav breadcrumb-nav-color--black breadcrumb-nav-hover-color--golden">
                            <nav aria-label="breadcrumb">
                                <ul>
                                    <li><a href="{{route('site.home')}}">Trang chủ</a></li>
                                    <li><a href="{{route('site.blogs')}}">Tất cả bài viết</a></li>
                                    <li class="active" aria-current="page">Bài viết cá nhân</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- ...:::: End Breadcrumb Section:::... -->

    <!-- ...:::: Start Blog Single Section:::... -->
    <div class="blog-section">
        <div class="container">
            <!-- Start Blog Single Content Area -->
            <div class="blog-single-wrapper">
                <div class="blog-single-img" data-aos="fade-up" data-aos-delay="0">
                    {{--                            <img class="img-fluid" src="{{$blogDetails->image}}" alt="">--}}
                </div>
                <ul class="post-meta" data-aos="fade-up" data-aos-delay="200">
                    <li>POSTED BY : <a href="#" class="author">{{$blogDetails->write_by}}</a></li>
                    <li>ON : <a href="#" class="date">{{$blogDetails->created_at}}</a></li>
                </ul>
                <h4 class="post-title" data-aos="fade-up" data-aos-delay="400">{{$blogDetails->title}}</h4>
                <div class="para-content" data-aos="fade-up" data-aos-delay="600">
                    <p>
                        {!! htmlspecialchars_decode($blogDetails->content) !!}
                    </p>
                </div>
                <div class="para-tags" data-aos="fade-up" data-aos-delay="0">
                    <span>Tags: {{$blogDetails->tag}}</span>
                </div>
            </div> <!-- End Blog Single Content Area -->
        </div>
    </div>
    </div> <!-- ...:::: End Blog Single Section:::... -->

@endsection
