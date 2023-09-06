@extends('site.app')
@section('content')
    <!-- ...:::: Start Breadcrumb Section:::... -->
    <div class="breadcrumb-section breadcrumb-bg-color--golden">
        <div class="breadcrumb-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h3 class="breadcrumb-title">Sản phẩm</h3>
                        <div class="breadcrumb-nav breadcrumb-nav-color--black breadcrumb-nav-hover-color--golden">
                            <nav aria-label="breadcrumb">
                                <ul>
                                    <li><a href="{{ route('site.home') }}">Trang chủ</a></li>
                                    <li><a href="{{ route('site.shop') }}">Cửa hàng</a></li>
                                    <li class="active" aria-current="page">Chi tiết sản phẩm</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ...:::: End Breadcrumb Section:::... -->

    <!-- Start Product Details Section -->
    @foreach($productDetails as $product)
        <div class="product-details-section">
            <div class="container">

                <div class="row">
                    <div class="col-xl-7 col-lg-6">
                        <div
                            class="product-details-gallery-area product-details-gallery-area-vartical product-details-gallery-area-vartical-left"
                            data-aos="fade-up" data-aos-delay="0">
                            <!-- Start Large Image -->
                            <div class="product-large-image product-large-image-vartical swiper-container ml-5">
                                <div class="swiper-wrapper">
                                    <div class="product-image-large-image swiper-slide zoom-image-hover img-responsive">
                                        <img src="{{ asset('uploads/' . $product->thumbnail) }}"
                                             alt="Product Thumbnail" width="600px" height="400px">
                                    </div>
                                </div>
                            </div>
                            <!-- End Large Image -->
                            <!-- Start Thumbnail Image -->
                            <div class="product-image-thumb product-image-thumb-vartical swiper-container pos-relative">
                                <div class="swiper-wrapper">
                                    <div class="product-image-thumb-single swiper-slide">
                                        <img src="{{ asset('uploads/' . $product->thumbnail) }}"
                                             alt="Product Thumbnail" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <!-- End Thumbnail Image -->
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6">
                        <div class="product-details-content-area product-details--golden" data-aos="fade-up"
                             data-aos-delay="200">
                            <!-- Start  Product Details Text Area-->
                            <div class="product-details-text">
                                <h4 class="title">{{$product->name}}</h4>

                                <div class="d-flex align-items-center">
                                    <ul class="review-star">
                                        <li class="fill"><i class="ion-android-star"></i></li>
                                        <li class="fill"><i class="ion-android-star"></i></li>
                                        <li class="fill"><i class="ion-android-star"></i></li>
                                        <li class="fill"><i class="ion-android-star"></i></li>
                                        <li class="empty"><i class="ion-android-star"></i></li>
                                    </ul>
                                    <a href="#" class="customer-review ml-2">(Đánh giá)</a>
                                </div>
                                @php
                                    $price = $product->price;
                                    $discount_percent = $product->discount_percent;
                                    $price_sale = $price - (($price * $discount_percent) / 100 );
                                @endphp
                                <div class="tag">
                                    <span>{{ $product->discount }}</span>
                                </div>
                                <div class="price"><del>{{$price}}đ</del>  {{$price_sale}}đ
                                </div>
                            </div>
                            <!-- End  Product Details Text Area-->
                            <!-- Start Product Variable Area -->
                            <div class="product-details-variable">
                                <h4 class="title">
                                    {{ $product->status === 1 ? 'Còn hàng' : 'Hết hàng' }}
                                </h4>                        <!-- Product Variable Single Item -->
                                <div class="variable-single-item">
                                    <div class="product-stock"> <span class="product-stock-in"><i
                                                class="ion-checkmark-circled"></i></span> {{ $product->quantity }} trong
                                        kho
                                    </div>
                                </div>


                                <!-- Product Variable Single Item -->
                                <div class="d-flex align-items-center ">
                                    <div class="variable-single-item ">
                                        <span>Quantity</span>
                                        <div class="product-variable-quantity">
                                            <input min="1" max="{{ $product->quantity }}" value="1" type="number">
                                        </div>
                                    </div>

                                    <div class="product-add-to-cart-btn">
                                        <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" value="{{ $product->id }}" name="id">
                                            <input type="hidden" value="{{ $product->name }}" name="name">
                                            <input type="hidden" value="{{ $product->price }}" name="price">
                                            <input type="hidden" value="{{ $product->thumbnail }}"  name="thumbnail">
                                            <input type="hidden" value="{{ $product->quantity }}" name="stock_quantity">
                                            <input type="hidden" value="1" name="quantity">
                                            <button class="btn btn-block btn-lg btn-black-default-hover"> + Thêm vào giỏ</button>
                                        </form>
                                    </div>
                                </div>
                                <!-- Start  Product Details Meta Area-->
                                <div class="product-details-meta mb-20">
                                    <a href="wishlist.html" class="icon-space-right"><i class="icon-heart"></i>Add to
                                        wishlist</a>
                                    <a href="compare.html" class="icon-space-right"><i class="icon-refresh"></i>Compare</a>
                                </div>
                                <!-- End  Product Details Meta Area-->
                            </div>
                            <!-- End Product Variable Area -->

                            <!-- Start  Product Details Catagories Area-->
                            <div class="product-details-catagory mb-2">
                                <span class="title">Danh mục sản phẩm:</span>
                                <ul>
                                    <li><a href="#">{{ $product->category }}</a></li>
                                </ul>
                            </div>
                            <!-- End  Product Details Catagories Area-->

                            <!-- Start  Product Details Social Area-->
                            <div class="product-details-social">
                                <span class="title">Chia sẻ:</span>
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                            <!-- End  Product Details Social Area-->
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Start Product Content Tab Section -->
        <div class="product-details-content-tab-section section-top-gap-100">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="product-details-content-tab-wrapper" data-aos="fade-up" data-aos-delay="0">

                            <!-- Start Product Details Tab Button -->
                            <ul class="nav tablist product-details-content-tab-btn d-flex justify-content-center">
                                <li><a class="nav-link active" data-bs-toggle="tab" href="#description">
                                        Mô tả
                                    </a></li>
                                <li><a class="nav-link" data-bs-toggle="tab" href="#specification">
                                        Thông tin thêm
                                    </a></li>
                                <li><a class="nav-link" data-bs-toggle="tab" href="#review">
                                        Nhận xét
                                    </a></li>
                            </ul> <!-- End Product Details Tab Button -->

                            <!-- Start Product Details Tab Content -->
                            <div class="product-details-content-tab">
                                <div class="tab-content">
                                    <!-- Start Product Details Tab Content Singel -->
                                    <div class="tab-pane active show" id="description">
                                        <div class="single-tab-content-item">
                                            <p>{{$product->description}}</p>
                                        </div>
                                    </div> <!-- End Product Details Tab Content Singel -->
                                    <!-- Start Product Details Tab Content Singel -->
                                    <div class="tab-pane" id="specification">
                                        <div class="single-tab-content-item">
                                            <table class="table table-bordered mb-20">
                                                <tbody>
                                                <tr>
                                                    <th scope="row">Vật liệu</th>
                                                    <td>{{ $product->material }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Chiều cao</th>
                                                    <td>{{ $product->high }} <b>mm</b></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Chiều dài</th>
                                                    <td>{{ $product->length }}<b>mm</b></td>
                                                <tr>
                                                <tr>
                                                    <th scope="row">Chiều rộng</th>
                                                    <td>{{ $product->width }} <b>mm</b></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div> <!-- End Product Details Tab Content Singel -->
                                    <div class="tab-pane" id="review">
                                        <div class="single-tab-content-item">
                                            <!-- Start - Review Comment -->
                                            <ul class="comment">
                                                <!-- Start - Review Comment list-->
                                                <li class="comment-list">
                                                    <div class="comment-wrapper">
                                                        <div class="comment-img">
                                                            <img src="assets/images/user/image-1.png" alt="">
                                                        </div>
                                                        <div class="comment-content">
                                                            <div class="comment-content-top">
                                                                <div class="comment-content-left">
                                                                    <h6 class="comment-name">Kaedyn Fraser</h6>
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
                                                                <div class="comment-content-right">
                                                                    <a href="#"><i class="fa fa-reply"></i>Reply</a>
                                                                </div>
                                                            </div>

                                                            <div class="para-content">
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing
                                                                    elit.
                                                                    Tempora inventore dolorem a unde modi iste odio
                                                                    amet,
                                                                    fugit fuga aliquam, voluptatem maiores animi dolor
                                                                    nulla
                                                                    magnam ea! Dignissimos aspernatur cumque nam quod
                                                                    sint
                                                                    provident modi alias culpa, inventore deserunt
                                                                    accusantium amet earum soluta consequatur quasi eum
                                                                    eius
                                                                    laboriosam, maiores praesentium explicabo enim
                                                                    dolores
                                                                    quaerat! Voluptas ad ullam quia odio sint sunt.
                                                                    Ipsam
                                                                    officia, saepe repellat. </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Start - Review Comment Reply-->
                                                    <ul class="comment-reply">
                                                        <li class="comment-reply-list">
                                                            <div class="comment-wrapper">
                                                                <div class="comment-img">
                                                                    <img src="assets/images/user/image-2.png" alt="">
                                                                </div>
                                                                <div class="comment-content">
                                                                    <div class="comment-content-top">
                                                                        <div class="comment-content-left">
                                                                            <h6 class="comment-name">Oaklee Odom</h6>
                                                                        </div>
                                                                        <div class="comment-content-right">
                                                                            <a href="#"><i class="fa fa-reply"></i>Reply</a>
                                                                        </div>
                                                                    </div>

                                                                    <div class="para-content">
                                                                        <p>Lorem ipsum dolor sit amet, consectetur
                                                                            adipisicing elit. Tempora inventore dolorem
                                                                            a
                                                                            unde modi iste odio amet, fugit fuga
                                                                            aliquam,
                                                                            voluptatem maiores animi dolor nulla magnam
                                                                            ea!
                                                                            Dignissimos aspernatur cumque nam quod sint
                                                                            provident modi alias culpa, inventore
                                                                            deserunt
                                                                            accusantium amet earum soluta consequatur
                                                                            quasi
                                                                            eum eius laboriosam, maiores praesentium
                                                                            explicabo enim dolores quaerat! Voluptas ad
                                                                            ullam quia odio sint sunt. Ipsam officia,
                                                                            saepe
                                                                            repellat. </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul> <!-- End - Review Comment Reply-->
                                                </li> <!-- End - Review Comment list-->
                                                <!-- Start - Review Comment list-->
                                                <li class="comment-list">
                                                    <div class="comment-wrapper">
                                                        <div class="comment-img">
                                                            <img src="assets/images/user/image-3.png" alt="">
                                                        </div>
                                                        <div class="comment-content">
                                                            <div class="comment-content-top">
                                                                <div class="comment-content-left">
                                                                    <h6 class="comment-name">Jaydin Jones</h6>
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
                                                                <div class="comment-content-right">
                                                                    <a href="#"><i class="fa fa-reply"></i>Reply</a>
                                                                </div>
                                                            </div>

                                                            <div class="para-content">
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing
                                                                    elit.
                                                                    Tempora inventore dolorem a unde modi iste odio
                                                                    amet,
                                                                    fugit fuga aliquam, voluptatem maiores animi dolor
                                                                    nulla
                                                                    magnam ea! Dignissimos aspernatur cumque nam quod
                                                                    sint
                                                                    provident modi alias culpa, inventore deserunt
                                                                    accusantium amet earum soluta consequatur quasi eum
                                                                    eius
                                                                    laboriosam, maiores praesentium explicabo enim
                                                                    dolores
                                                                    quaerat! Voluptas ad ullam quia odio sint sunt.
                                                                    Ipsam
                                                                    officia, saepe repellat. </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li> <!-- End - Review Comment list-->
                                            </ul> <!-- End - Review Comment -->
                                            <div class="review-form">
                                                <div class="review-form-text-top">
                                                    <h5>ADD A REVIEW</h5>
                                                    <p>Your email address will not be published. Required fields are
                                                        marked
                                                        *</p>
                                                </div>

                                                <form action="#" method="post">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="default-form-box">
                                                                <label for="comment-name">Your name
                                                                    <span>*</span></label>
                                                                <input id="comment-name" type="text"
                                                                       placeholder="Enter your name" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="default-form-box">
                                                                <label for="comment-email">Your Email
                                                                    <span>*</span></label>
                                                                <input id="comment-email" type="email"
                                                                       placeholder="Enter your email" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="default-form-box">
                                                                <label for="comment-review-text">Your review
                                                                    <span>*</span></label>
                                                                <textarea id="comment-review-text"
                                                                          placeholder="Write a review"
                                                                          required></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <button class="btn btn-md btn-black-default-hover"
                                                                    type="submit">Submit
                                                            </button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div> <!-- End Product Details Tab Content Singel -->
                                    <!-- Start Product Details Tab Content Singel -->
                                </div>
                            </div> <!-- End Product Details Tab Content -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Product Content Tab Section -->
    @endforeach
    <!-- End Product Details Section -->

    <!-- Start Product Default Slider Section -->
    <div class="product-default-slider-section section-top-gap-100 section-fluid">
        <!-- Start Section Content Text Area -->
        <div class="section-title-wrapper" data-aos="fade-up" data-aos-delay="0">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-content-gap">
                            <div class="secton-content">
                                <h3 class="section-title">RELATED PRODUCTS</h3>
                                <p>Browse the collection of our related products.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Start Section Content Text Area -->
        <div class="product-wrapper" data-aos="fade-up" data-aos-delay="0">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="product-slider-default-1row default-slider-nav-arrow">
                            <!-- Slider main container -->
                            <div class="swiper-container product-default-slider-4grid-1row">
                                <!-- Additional required wrapper -->
                                <div class="swiper-wrapper">
                                    <!-- End Product Default Single Item -->
                                    <!-- Start Product Default Single Item -->
                                    <div class="product-default-single-item product-color--golden swiper-slide">
                                        <div class="image-box">
                                            <a href="product-details-default.html" class="image-link">
                                                <img src="assets/images/product/default/home-1/default-9.jpg" alt="">
                                                <img src="assets/images/product/default/home-1/default-10.jpg" alt="">
                                            </a>
                                            <div class="action-link">
                                                <div class="action-link-left">
                                                    <a href="#" data-bs-toggle="modal"
                                                       data-bs-target="#modalAddcart">Add to Cart</a>
                                                </div>
                                                <div class="action-link-right">
                                                    <a href="#" data-bs-toggle="modal"
                                                       data-bs-target="#modalQuickview"><i
                                                            class="icon-magnifier"></i></a>
                                                    <a href="wishlist.html"><i class="icon-heart"></i></a>
                                                    <a href="compare.html"><i class="icon-shuffle"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="content">
                                            <div class="content-left">
                                                <h6 class="title"><a href="product-details-default.html">Epicuri per
                                                        lobortis</a></h6>
                                                <ul class="review-star">
                                                    <li class="fill"><i class="ion-android-star"></i></li>
                                                    <li class="fill"><i class="ion-android-star"></i></li>
                                                    <li class="fill"><i class="ion-android-star"></i></li>
                                                    <li class="fill"><i class="ion-android-star"></i></li>
                                                    <li class="empty"><i class="ion-android-star"></i></li>
                                                </ul>
                                            </div>
                                            <div class="content-right">
                                                <span class="price">$68</span>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- End Product Default Single Item -->
                                    <!-- Start Product Default Single Item -->
                                    <div class="product-default-single-item product-color--golden swiper-slide">
                                        <div class="image-box">
                                            <a href="product-details-default.html" class="image-link">
                                                <img src="assets/images/product/default/home-1/default-11.jpg" alt="">
                                                <img src="assets/images/product/default/home-1/default-3.jpg" alt="">
                                            </a>
                                            <div class="action-link">
                                                <div class="action-link-left">
                                                    <a href="#" data-bs-toggle="modal"
                                                       data-bs-target="#modalAddcart">Add to Cart</a>
                                                </div>
                                                <div class="action-link-right">
                                                    <a href="#" data-bs-toggle="modal"
                                                       data-bs-target="#modalQuickview"><i
                                                            class="icon-magnifier"></i></a>
                                                    <a href="wishlist.html"><i class="icon-heart"></i></a>
                                                    <a href="compare.html"><i class="icon-shuffle"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="content">
                                            <div class="content-left">
                                                <h6 class="title"><a href="product-details-default.html">Kaoreet
                                                        lobortis sagit</a></h6>
                                                <ul class="review-star">
                                                    <li class="fill"><i class="ion-android-star"></i></li>
                                                    <li class="fill"><i class="ion-android-star"></i></li>
                                                    <li class="fill"><i class="ion-android-star"></i></li>
                                                    <li class="fill"><i class="ion-android-star"></i></li>
                                                    <li class="empty"><i class="ion-android-star"></i></li>
                                                </ul>
                                            </div>
                                            <div class="content-right">
                                                <span class="price">$95.00</span>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- End Product Default Single Item -->
                                    <!-- Start Product Default Single Item -->
                                    <div class="product-default-single-item product-color--golden swiper-slide">
                                        <div class="image-box">
                                            <a href="product-details-default.html" class="image-link">
                                                <img src="assets/images/product/default/home-1/default-5.jpg" alt="">
                                                <img src="assets/images/product/default/home-1/default-7.jpg" alt="">
                                            </a>
                                            <div class="action-link">
                                                <div class="action-link-left">
                                                    <a href="#" data-bs-toggle="modal"
                                                       data-bs-target="#modalAddcart">Add to Cart</a>
                                                </div>
                                                <div class="action-link-right">
                                                    <a href="#" data-bs-toggle="modal"
                                                       data-bs-target="#modalQuickview"><i
                                                            class="icon-magnifier"></i></a>
                                                    <a href="wishlist.html"><i class="icon-heart"></i></a>
                                                    <a href="compare.html"><i class="icon-shuffle"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="content">
                                            <div class="content-left">
                                                <h6 class="title"><a href="product-details-default.html">Condimentum
                                                        posuere</a></h6>
                                                <ul class="review-star">
                                                    <li class="fill"><i class="ion-android-star"></i></li>
                                                    <li class="fill"><i class="ion-android-star"></i></li>
                                                    <li class="fill"><i class="ion-android-star"></i></li>
                                                    <li class="fill"><i class="ion-android-star"></i></li>
                                                    <li class="empty"><i class="ion-android-star"></i></li>
                                                </ul>
                                            </div>
                                            <div class="content-right">
                                                <span class="price">$115.00</span>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- End Product Default Single Item -->
                                    <!-- Start Product Default Single Item -->
                                    <div class="product-default-single-item product-color--golden swiper-slide">
                                        <div class="image-box">
                                            <a href="product-details-default.html" class="image-link">
                                                <img src="assets/images/product/default/home-1/default-6.jpg" alt="">
                                                <img src="assets/images/product/default/home-1/default-9.jpg" alt="">
                                            </a>
                                            <div class="action-link">
                                                <div class="action-link-left">
                                                    <a href="#" data-bs-toggle="modal"
                                                       data-bs-target="#modalAddcart">Add to Cart</a>
                                                </div>
                                                <div class="action-link-right">
                                                    <a href="#" data-bs-toggle="modal"
                                                       data-bs-target="#modalQuickview"><i
                                                            class="icon-magnifier"></i></a>
                                                    <a href="wishlist.html"><i class="icon-heart"></i></a>
                                                    <a href="compare.html"><i class="icon-shuffle"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="content">
                                            <div class="content-left">
                                                <h6 class="title"><a href="product-details-default.html">Convallis quam
                                                        sit</a></h6>
                                                <ul class="review-star">
                                                    <li class="fill"><i class="ion-android-star"></i></li>
                                                    <li class="fill"><i class="ion-android-star"></i></li>
                                                    <li class="fill"><i class="ion-android-star"></i></li>
                                                    <li class="fill"><i class="ion-android-star"></i></li>
                                                    <li class="empty"><i class="ion-android-star"></i></li>
                                                </ul>
                                            </div>
                                            <div class="content-right">
                                                <span class="price">$75.00 - $85.00</span>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- End Product Default Single Item -->
                                    <!-- Start Product Default Single Item -->
                                    <div class="product-default-single-item product-color--golden swiper-slide">
                                        <div class="image-box">
                                            <a href="product-details-default.html" class="image-link">
                                                <img src="assets/images/product/default/home-1/default-1.jpg" alt="">
                                                <img src="assets/images/product/default/home-1/default-2.jpg" alt="">
                                            </a>
                                            <div class="tag">
                                                <span>sale</span>
                                            </div>
                                            <div class="action-link">
                                                <div class="action-link-left">
                                                    <a href="#" data-bs-toggle="modal"
                                                       data-bs-target="#modalAddcart">Add to Cart</a>
                                                </div>
                                                <div class="action-link-right">
                                                    <a href="#" data-bs-toggle="modal"
                                                       data-bs-target="#modalQuickview"><i
                                                            class="icon-magnifier"></i></a>
                                                    <a href="wishlist.html"><i class="icon-heart"></i></a>
                                                    <a href="compare.html"><i class="icon-shuffle"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="content">
                                            <div class="content-left">
                                                <h6 class="title"><a href="product-details-default.html">Aliquam
                                                        lobortis</a></h6>
                                                <ul class="review-star">
                                                    <li class="fill"><i class="ion-android-star"></i></li>
                                                    <li class="fill"><i class="ion-android-star"></i></li>
                                                    <li class="fill"><i class="ion-android-star"></i></li>
                                                    <li class="fill"><i class="ion-android-star"></i></li>
                                                    <li class="empty"><i class="ion-android-star"></i></li>
                                                </ul>
                                            </div>
                                            <div class="content-right">
                                                <span class="price">$75.00 - $85.00</span>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- End Product Default Single Item -->
                                    <!-- Start Product Default Single Item -->
                                    <div class="product-default-single-item product-color--golden swiper-slide">
                                        <div class="image-box">
                                            <a href="product-details-default.html" class="image-link">
                                                <img src="assets/images/product/default/home-1/default-3.jpg" alt="">
                                                <img src="assets/images/product/default/home-1/default-4.jpg" alt="">
                                            </a>
                                            <div class="tag">
                                                <span>sale</span>
                                            </div>
                                            <div class="action-link">
                                                <div class="action-link-left">
                                                    <a href="#" data-bs-toggle="modal"
                                                       data-bs-target="#modalAddcart">Add to Cart</a>
                                                </div>
                                                <div class="action-link-right">
                                                    <a href="#" data-bs-toggle="modal"
                                                       data-bs-target="#modalQuickview"><i
                                                            class="icon-magnifier"></i></a>
                                                    <a href="wishlist.html"><i class="icon-heart"></i></a>
                                                    <a href="compare.html"><i class="icon-shuffle"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="content">
                                            <div class="content-left">
                                                <h6 class="title"><a href="product-details-default.html">Condimentum
                                                        posuere</a></h6>
                                                <ul class="review-star">
                                                    <li class="fill"><i class="ion-android-star"></i></li>
                                                    <li class="fill"><i class="ion-android-star"></i></li>
                                                    <li class="fill"><i class="ion-android-star"></i></li>
                                                    <li class="fill"><i class="ion-android-star"></i></li>
                                                    <li class="empty"><i class="ion-android-star"></i></li>
                                                </ul>
                                            </div>
                                            <div class="content-right">
                                                <span class="price"><del>$89.00</del> $80.00</span>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- End Product Default Single Item -->
                                    <!-- Start Product Default Single Item -->
                                    <div class="product-default-single-item product-color--golden swiper-slide">
                                        <div class="image-box">
                                            <a href="product-details-default.html" class="image-link">
                                                <img src="{assets('/images/product/default/home-1/default-5.jpg')}"
                                                     alt="">
                                                <img src="{assets/images/product/default/home-1/default-6.jpg}" alt="">
                                            </a>
                                            <div class="tag">
                                                <span>sale</span>
                                            </div>
                                            <div class="action-link">
                                                <div class="action-link-left">
                                                    <a href="#" data-bs-toggle="modal"
                                                       data-bs-target="#modalAddcart">Add to Cart</a>
                                                </div>
                                                <div class="action-link-right">
                                                    <a href="#" data-bs-toggle="modal"
                                                       data-bs-target="#modalQuickview"><i
                                                            class="icon-magnifier"></i></a>
                                                    <a href="wishlist.html"><i class="icon-heart"></i></a>
                                                    <a href="compare.html"><i class="icon-shuffle"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="content">
                                            <div class="content-left">
                                                <h6 class="title"><a href="product-details-default.html">Cras neque
                                                        metus</a></h6>
                                                <ul class="review-star">
                                                    <li class="fill"><i class="ion-android-star"></i></li>
                                                    <li class="fill"><i class="ion-android-star"></i></li>
                                                    <li class="fill"><i class="ion-android-star"></i></li>
                                                    <li class="fill"><i class="ion-android-star"></i></li>
                                                    <li class="empty"><i class="ion-android-star"></i></li>
                                                </ul>
                                            </div>
                                            <div class="content-right">
                                                <span class="price"><del>$70.00</del> $60.00</span>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- End Product Default Single Item -->
                                    <!-- Start Product Default Single Item -->
                                    <div class="product-default-single-item product-color--golden swiper-slide">
                                        <div class="image-box">
                                            <a href="product-details-default.html" class="image-link">
                                                <img src="assets/images/product/default/home-1/default-7.jpg" alt="">
                                                <img src="assets/images/product/default/home-1/default-8.jpg" alt="">
                                            </a>
                                            <div class="action-link">
                                                <div class="action-link-left">
                                                    <a href="#" data-bs-toggle="modal"
                                                       data-bs-target="#modalAddcart">Add to Cart</a>
                                                </div>
                                                <div class="action-link-right">
                                                    <a href="#" data-bs-toggle="modal"
                                                       data-bs-target="#modalQuickview"><i
                                                            class="icon-magnifier"></i></a>
                                                    <a href="wishlist.html"><i class="icon-heart"></i></a>
                                                    <a href="compare.html"><i class="icon-shuffle"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="content">
                                            <div class="content-left">
                                                <h6 class="title"><a href="product-details-default.html">Donec eu libero
                                                        ac</a></h6>
                                                <ul class="review-star">
                                                    <li class="fill"><i class="ion-android-star"></i></li>
                                                    <li class="fill"><i class="ion-android-star"></i></li>
                                                    <li class="fill"><i class="ion-android-star"></i></li>
                                                    <li class="fill"><i class="ion-android-star"></i></li>
                                                    <li class="empty"><i class="ion-android-star"></i></li>
                                                </ul>
                                            </div>
                                            <div class="content-right">
                                                <span class="price">$74</span>
                                            </div>

                                        </div>
                                    </div> <!-- End Product Default Single Item -->
                                </div>
                            </div>
                            <!-- If we need navigation buttons -->
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Product Default Slider Section -->

    <!-- material-scrolltop button -->
    <button class="material-scrolltop" type="button"></button>

@endsection