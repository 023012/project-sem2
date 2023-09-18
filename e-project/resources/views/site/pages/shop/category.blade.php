@extends('site.app')
@section('content')
    <!-- ...:::: Start Breadcrumb Section:::... -->
    <div class="breadcrumb-section breadcrumb-bg-color--golden">
        <div class="breadcrumb-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h3 class="breadcrumb-title">Cửa hàng</h3>
                        <div class="breadcrumb-nav breadcrumb-nav-color--black breadcrumb-nav-hover-color--golden">
                            <nav aria-label="breadcrumb">
                                <ul>
                                    <li><a href="{{route('site.home')}}">Trang chủ</a></li>
                                    <li><a href="{{route('site.shop')}}">Cửa hàng</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- ...:::: End Breadcrumb Section:::... -->

    <!-- ...:::: Start Shop Section:::... -->
    <div class="shop-section">
        <div class="container">
            <div class="row flex-column-reverse flex-lg-row">
                <div class="col-lg-3">
                    <!-- Start Sidebar Area -->
                    @include('site.partials.shop.category')
                </div>
                <div class="col-lg-9">
                    <!-- Start Shop Product Sorting Section -->

                    <div class="shop-sort-section">
                        <div class="container">
                            <div class="row">
                                <!-- Start Sort Wrapper Box -->
                                <div
                                    class="sort-box d-flex justify-content-between align-items-md-center align-items-start flex-md-row flex-column"
                                    data-aos="fade-up" data-aos-delay="0">
                                    <!-- Start Sort tab Button -->
                                    <div class="sort-tablist d-flex align-items-center">
                                        <ul class="tablist nav sort-tab-btn">
                                            <li><a class="nav-link active" data-bs-toggle="tab"
                                                   href="#layout-3-grid"><img
                                                        src="{{asset('frontend/assets/images/icons/bkg_grid.png')}}"
                                                        alt=""></a></li>
                                            <li><a class="nav-link" data-bs-toggle="tab" href="#layout-list"><img
                                                        src="{{asset('frontend/assets/images/icons/bkg_list.png')}}"
                                                        alt=""></a></li>
                                            '
                                        </ul>

                                        <!-- Start Page Amount -->
                                        <div class="page-amount ml-2">
                                            <h5><span>{{$CategoryProduct}}: có <strong>{{ $productCount }}</strong> sản phẩm. </span>
                                            </h5>
                                        </div>  <!-- End Page Amount -->
                                    </div> <!-- End Sort tab Button -->

                                    <!-- Start Sort Select Option -->
                                    {{--                                    @include('site.partials.shop.sort-product')--}}
                                    <!-- End Sort Select Option -->


                                </div> <!-- Start Sort Wrapper Box -->
                            </div>
                        </div>
                    </div>
                    <!-- Start Tab Wrapper -->
                    <div class="sort-product-tab-wrapper">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="tab-content tab-animate-zoom">
                                        <!-- Start Grid View Product -->
                                        <div class="tab-pane active show sort-layout-single" id="layout-3-grid">
                                            <div class="row">
                                                @foreach ($productsList as $product)
                                                    @php
                                                        $price = $product->price;
                                                        $formatPrice=number_format($price,0,'','.');
                                                        $discount_percent = $product->discount_percent;
                                                        $price_sale = $price - (($price * $discount_percent) / 100 );
                                                        $formatPriceSale=number_format($price_sale,0,'','.');
                                                    @endphp
                                                    <div class="col-xl-4 col-sm-6 col-12">
                                                        <!-- Start Product Default Single Item -->

                                                        <div class="product-default-single-item product-color--golden"
                                                             data-aos="fade-up" data-aos-delay="0">
                                                            <div class="image-box">
                                                                <a href="{{ route('site.product',$product->id) }}"
                                                                   class="image-link">
                                                                    <img
                                                                        src="{{ asset('uploads/' . $product->thumbnail) }}"
                                                                        alt="Product Thumbnail" class="img-fluid">
                                                                </a>
                                                                <div class="tag">
                                                                    <span>{{ $product->discount }}</span>
                                                                </div>
                                                                <div class="action-link">
                                                                    <div class="action-link-left">
                                                                        <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                                                                            @csrf
                                                                            <input type="hidden" value="{{ $product->id }}" name="id">
                                                                            <input type="hidden" value="{{ $product->name }}" name="name">
                                                                            <input type="hidden" value="{{ $product->price }}" name="price">
                                                                            <input type="hidden" value="{{ $product->thumbnail }}"  name="thumbnail">
                                                                            <input type="hidden" value="{{ $product->quantity }}" name="stock_quantity">
                                                                            <input type="hidden" value="1" name="quantity">
                                                                            <button type="submit" class="btn btn-sm btn-golden">Mua ngay</button>
                                                                        </form>
                                                                    </div>
                                                                    <div class="action-link-right">
                                                                        <a href="#" data-bs-toggle="modal"
                                                                           data-bs-target="#modalQuickview"><i
                                                                                class="icon-magnifier"></i></a>
                                                                        <a href=""><i
                                                                                class="icon-heart"></i></a>
                                                                        <a href=""><i
                                                                                class="icon-shuffle"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="content">
                                                                <div class="content-left">
                                                                    <h6 class="title"><a
                                                                            href="{{ route('site.product', $product->id) }}">{{$product->name}}</a>
                                                                    </h6>
                                                                    <ul class="review-star">
                                                                        <li class="fill"><i
                                                                                class="ion-android-star"></i>
                                                                        </li>
                                                                        <li class="fill"><i
                                                                                class="ion-android-star"></i>
                                                                        </li>
                                                                        <li class="fill"><i
                                                                                class="ion-android-star"></i>
                                                                        </li>
                                                                        <li class="fill"><i
                                                                                class="ion-android-star"></i>
                                                                        </li>
                                                                        <li class="empty"><i
                                                                                class="ion-android-star"></i>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="content-right">
                                                                    <span class="price">
                                                                        <del>{{$formatPrice}}₫</del> {{$formatPriceSale}}₫</span>
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <!-- End Product Default Single Item -->

                                                    </div>
                                                @endforeach

                                            </div>
                                        </div> <!-- End Grid View Product -->
                                        <!-- Start List View Product -->
                                        <div class="tab-pane sort-layout-single" id="layout-list">
                                            <div class="row">
                                                <div class="col-12">
                                                    <!-- Start Product Defautlt Single -->
                                                    @foreach($productsList as $product)
                                                        @php
                                                            $price = $product->price;
                                                            $discount_percent = $product->discount_percent;
                                                            $price_sale = $price - (($price * $discount_percent) / 100 );
//                                                            $description=str_split($product->description,100);
                                                        @endphp
                                                        <div class="product-list-single product-color--golden">
                                                            <a href="{{ route('site.product', $product->id) }}"
                                                               class="product-list-img-link">
                                                                <img src="{{ asset('uploads/' . $product->thumbnail) }}"
                                                                     alt="Product Thumbnail" class="img-fluid" >
                                                                <img src="{{ asset('uploads/' . $product->thumbnail) }}"
                                                                     alt="Product Thumbnail" class="img-fluid" >
                                                            </a>
                                                            <div class="product-list-content">
                                                                <h5 class="product-list-link"><a
                                                                        href="{{ route('site.product', $product->id) }}">{{$product->name}}</a>
                                                                </h5>
                                                                <ul class="review-star">
                                                                    <li class="fill"><i class="ion-android-star"></i>
                                                                    </li>
                                                                    <li class="fill"><i class="ion-android-star"></i>
                                                                    </li>
                                                                    <li class="fill"><i class="ion-android-star"></i>
                                                                    </li>
                                                                    <li class="fill"><i class="ion-android-star"></i>
                                                                    </li>
                                                                    <li class="empty"><i class="ion-android-star"></i>
                                                                    </li>
                                                                </ul>
                                                                <span class="product-list-price"><del>{{number_format($price,0,'','.')}}₫</del>
                                                                {{number_format($price_sale,0,'','.')}} ₫</span>
                                                                <p>{!! htmlspecialchars_decode($product->description)!!}</p>
                                                                <div class="product-action-icon-link-list">
                                                                    <div class="action-link-left ">
                                                                        <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                                                                            @csrf
                                                                            <input type="hidden" value="{{ $product->id }}" name="id">
                                                                            <input type="hidden" value="{{ $product->name }}" name="name">
                                                                            <input type="hidden" value="{{ $product->price }}" name="price">
                                                                            <input type="hidden" value="{{ $product->thumbnail }}"  name="thumbnail">
                                                                            <input type="hidden" value="{{ $product->quantity }}" name="stock_quantity">
                                                                            <input type="hidden" value="1" name="quantity">
                                                                            <button type="submit" class="btn btn-sm btn-golden">Mua ngay</button>
                                                                        </form>
                                                                    </div>
                                                                    <a href="#" data-bs-toggle="modal"
                                                                       data-bs-target="#modalQuickview"
                                                                       class="btn btn-lg btn-black-default-hover"><i
                                                                            class="icon-magnifier"></i></a>
                                                                    <a href="{{route('site.wishlist')}}"
                                                                       class="btn btn-lg btn-black-default-hover"><i
                                                                            class="icon-heart"></i></a>
                                                                    <a href="{{ route('site.compare') }}"
                                                                       class="btn btn-lg btn-black-default-hover"><i
                                                                            class="icon-shuffle"></i></a>
                                                                </div>
                                                            </div>
                                                        </div> <!-- End Product Defautlt Single -->
                                                    @endforeach

                                                </div>
                                            </div>
                                        </div> <!-- End List View Product -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- End Tab Wrapper -->
s
                    <!-- Start Pagination -->
                    <div class="page-pagination text-center" data-aos="fade-up" data-aos-delay="0">
                        {{-- <ul>
                            <li><a class="active" href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#"><i class="ion-ios-skipforward"></i></a></li>
                        </ul> --}}
                       </div> <!-- End Pagination -->
                </div>
            </div>
        </div>
    </div> <!-- ...:::: End Shop Section:::... -->
@endsection
