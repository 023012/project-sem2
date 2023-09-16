@extends('admin.app')
@push('style')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
@endpush
@section('content')
    <main role="main" class="main-content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12">
                    <h2 class="mb-2 page-title">Chi tiết bài viết</h2>
                </div>
                
                <div class="col-lg-9">
                    <!-- Start Blog Single Content Area -->
                    <div class="blog-single-wrapper">
                        <div class="blog-single-img" data-aos="fade-up" data-aos-delay="0">
                            <img class="img-fluid" src="{{$blogDetails->image}}" alt="">
                        </div>
                        <ul class="post-meta" data-aos="fade-up" data-aos-delay="200">
                            <li>POSTED BY : <a href="#" class="author">{{$blogDetails->write_by}}</a></li>
                            <li>ON : <a href="#" class="date">{{$blogDetails->created_at}}</a></li>
                        </ul>
                        <h4 class="post-title" data-aos="fade-up" data-aos-delay="400">{{$blogDetails->title}}</h4>
                        <div class="para-content" data-aos="fade-up" data-aos-delay="600">
                            <p>
                                {{$blogDetails->content}}
                            </p>
                        </div>
                        <div class="para-tags" data-aos="fade-up" data-aos-delay="0">
                            <span>Tags: {{$blogDetails->tag}}</span>
                        </div>
                    </div> <!-- End Blog Single Content Area -->
                    </div>
                </div>
           
            </div> <!-- .row -->
        </div> <!-- .container-fluid -->
    </main>
@endsection
@push('script')
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>

    <script>
        $('#description').summernote({
            placeholder: 'Tên sản phẩm ' +
                ' Mô tả sản chi tiết của sản phẩm',
            tabsize: 2,
            height: 250
        });
    </script>
@endpush
