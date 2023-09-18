@extends('site.app')
@section('content')

    <!-- ...:::: Start Breadcrumb Section:::... -->
    <div class="breadcrumb-section breadcrumb-bg-color--golden">
        <div class="breadcrumb-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h3 class="breadcrumb-title">Tất Cả Bài Viết</h3>
                        <div class="breadcrumb-nav breadcrumb-nav-color--black breadcrumb-nav-hover-color--golden">
                            <nav aria-label="breadcrumb">
                                <ul>
                                    <li><a href="{{route('site.home')}}">Trang Chủ</a></li>
                                    <li><a href="{{route('site.blogs')}}">Bài Viết</a></li>
                                    <li class="active" aria-current="page">Tất Cả Bài Viết</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- ...:::: End Breadcrumb Section:::... -->

    <!-- ...:::: Start Blog List Section:::... -->
    <div class="blog-section">
            <div class="container">
                <div class="blog-wrapper">
                    <div class="tab-pane active show sort-layout-single" id="layout-3-grid">
                        <div class="row">
                            @foreach ($blogs as $blog)
                                <div class="col-xl-4 col-sm-6 col-12">
                                    <!-- Start Product Default Single Item -->
                                    <div class="product-default-single-item product-color--golden"
                                         data-aos="fade-up" data-aos-delay="0">
                                        <div class="image-box" style="height:250px ">
                                            <a href="{{route('site.blog-single', $blog->id)}}"
                                               class="image-link">
                                                <img src="{{ asset('uploads/' . $blog->image) }}"
                                                     alt="Product Thumbnail" class="img-fluid" width="50px" height="50px">
                                            </a>
                                        </div>

                                        <div style="display: flex; font-size: 5px;">
                                            <ul class="post-meta" style="display: flex; margin:0px; padding: 0px;font-size: 9px; text-decoration:none">
                                                <li>POSTED BY : <a href="#" class="author">{{$blog->write_by}}</a></li>
                                                <li>ON : <a href="#" class="date">{{$blog->created_at}}</a></li>
                                            </ul>
                                        </div>
                                        <div style="text-align: center">
                                            <h5 class="title"><b><a
                                                        href="{{route('site.blog-single', $blog->id)}}">{{$blog->title}}</a></b>
                                            </h5>

                                            <a href="{{route('site.blog-single', $blog->id)}}" class="read-more-btn icon-space-left">Read More <span class="icon"><i
                                                        class="ion-ios-arrow-thin-right"></i></span></a>
                                        </div>


                                    </div>
                                    <!-- End Product Default Single Item -->

                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div> <!-- ...:::: End Blog List Section:::... -->

@endsection
