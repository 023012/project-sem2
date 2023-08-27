@extends('admin.app')
@push('style')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
@endpush
@section('content')
    <main role="main" class="main-content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12">
                    <h2 class="mb-2 page-title">Chi tiết sản phẩm</h2>
                </div>
                @foreach($productDetails as $product)
                    <div class="col-md-12 mb-4">
                        <div class="card profile shadow">
                            <div class="card-body my-4">
                                <div class="row align-items-center">
                                    <div class="col-md-3 text-center mb-5">
                                        @if($product->thumbnail)
                                            <img src="{{ asset('uploads/' . $product->thumbnail) }}"
                                                 alt="Product Thumbnail" width="200" height="200">
                                        @endif
                                    </div>
                                    <div class="col">
                                        <div class="row align-items-center">
                                            <div class="col-md-7">
                                                <h3 class="mb-1">{{ $product->name }}</h3>
                                                <br>
                                            </div>
                                            <div class="col">

                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <div class="col-md-7">
                                                <p class="text-muted"><strong>Vật
                                                        liệu:</strong> {{ $product->material }}</p>
                                                <label><strong>Kích thước:</strong></label>
                                                <p class="small mb-0 text-muted"><strong>Chiều
                                                        dài: </strong> {{$product->length}} mm</p>
                                                <p class="small mb-0 text-muted"><strong>Chiều
                                                        rộng: </strong> {{$product->width}} mm</p>
                                                <p class="small mb-0 text-muted"><strong>Chiều
                                                        cao: </strong> {{$product->high}} mm</p>
                                            </div>
                                            <div class="col-md-5">
                                                <p class="text-muted"><strong>Thể loại sản
                                                        phẩm: </strong> {{ $product->category }}</p>
                                                <p class="text-muted"><strong>Mã giảm
                                                        giá: </strong> {{ $product->discount }}</p>
                                                <p class="text-muted"><strong>Số
                                                        lượng: </strong> {{ $product->quantity }} sản phẩm</p>
                                                <p class="text-muted"><strong>Đơn giá:</strong> {{ $product->price }}
                                                    vnđ</p>
                                            </div>
                                            <div class="col-md-12">
                                                <p class="text-muted"><strong>Trạng thái:</strong>
                                                    {{ $product->status ? 'còn hàng' : 'hết hàng' }}</p>
                                                <p class="text-muted"><strong>Nổi bật:</strong>
                                                    {{ $product->featured ? 'Nổi bật' : 'Không nổi bật'}}
                                                </p>
                                                <p class="text-muted"><strong>Kích hoạt:</strong>
                                                    {{ $product->active ? 'Có kích hoạt' : 'Không kích hoạt'}}
                                                </p>

                                            </div>
                                        </div>
                                        <div class="row align-items-center">
                                        </div>
                                    </div>
                                </div> <!-- / .row- -->
                            </div> <!-- / .card-body - -->
                        </div> <!-- / .card- -->
                    </div> <!-- / .col- -->
                    <div class="col-md-12 mb-4">
                        <div class="card shadow">
                            <div class="card-body">
                                <ul class="nav nav-tabs mb-3" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#desc"
                                           role="tab" aria-controls="home" aria-selected="true">Mô tả sản phẩm</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#productImages"
                                           role="tab" aria-controls="profile" aria-selected="false">Ảnh của sản phẩm</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact"
                                           role="tab" aria-controls="contact" aria-selected="false">Đánh giá</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="desc" role="tabpanel"
                                         aria-labelledby="home-tab">
                                        {!! htmlspecialchars_decode($product->description) !!}
                                    </div>
                                    <div class="tab-pane fade" id="productImages" role="tabpanel"
                                         aria-labelledby="profile-tab">
                                    </div>
                                    <div class="tab-pane fade" id="contact" role="tabpanel"
                                         aria-labelledby="contact-tab">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
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
