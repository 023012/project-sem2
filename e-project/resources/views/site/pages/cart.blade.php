@extends('site.app')

@section('content')

    <!-- ...:::: Start Breadcrumb Section:::... -->
    <div class="breadcrumb-section breadcrumb-bg-color--golden">
        <div class="breadcrumb-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h3 class="breadcrumb-title">Giỏ hàng</h3>
                        <div class="breadcrumb-nav breadcrumb-nav-color--black breadcrumb-nav-hover-color--golden">
                            <nav aria-label="breadcrumb">
                                <ul>
                                    <li><a href="{{ route('site.home') }}">Trang chủ</a></li>
                                    <li><a href="{{ route('site.shop') }}">Cửa hàng</a></li>
                                    <li class="active" aria-current="page">Giỏ hàng</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ...:::: End Breadcrumb Section:::... -->

    <div class="cart-section">
        <!-- Start Cart Table -->
        <div class="cart-table-wrapper" data-aos="fade-up" data-aos-delay="0">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="table_desc">
                            <div class="table_page table-responsive">
                                <table>
                                    <!-- Start Cart Table Head -->
                                    <thead>
                                    <tr>
                                        <th class="product_thumb">Image</th>
                                        <th class="product_name">Product</th>
                                        <th class="product-price">Price</th>
                                        <th class="product_quantity">Quantity</th>
                                        <th class="product_total">Total</th>
                                        <th class="product_remove">Delete</th>
                                    </tr>
                                    </thead> <!-- End Cart Table Head -->
                                    <tbody>
                                    <!-- Start Cart Single Item-->
                                    @foreach($cartItems as $item)
                                        <tr>
                                            <td class="product_thumb">
                                                <a href="{{ route('site.product', $item->id) }}">
                                                    <img class="img-fluid"
                                                         src="{{ asset('/uploads/' . $item->attributes->thumbnail) }}"
                                                         alt="">
                                                </a>
                                            </td>
                                            <td class="product_name">
                                                <a href="{{ route('site.product', $item->id) }}">
                                                    {{ $item->name }}
                                                </a>
                                            </td>
                                            <td class="product-price">${{ $item->price }}</td>
                                            <td class="product_quantity">
                                                <label>Quantity</label>
                                                <input min="1" max="100" value="{{ $item->quantity }}" type="number">
                                            </td>
                                            <td class="product_total">{{ $item->price * $item->quantity }} vnđ</td>
                                            <td class="product_remove">
                                                <form action="{{ route('cart.remove') }}" method="POST">
                                                    @csrf
                                                    <input type="hidden" value="{{ $item->id }}" name="id">
                                                    <button>
                                                        <i class="fa fa-trash-o"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr> <!-- End Cart Single Item-->
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="cart_submit">
                                <form action="{{ route('cart.update') }}" method="POST">
                                    @csrf
                                    <button class="btn btn-md btn-golden" type="submit">Cập nhật</button>
                                </form>
                                <form action="{{ route('cart.clear') }}" method="POST">
                                    @csrf
                                    <button class="btn btn-md btn-pink">Xóa giỏ hàng</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- End Cart Table -->

        <!-- Start Coupon Section -->
        <div class="coupon_area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="coupon_code left" data-aos="fade-up" data-aos-delay="200">
                            <h3>Coupon</h3>
                            <div class="coupon_inner">
                                <p>Enter your coupon code if you have one.</p>
                                <input class="mb-2" placeholder="Coupon code" type="text">
                                <button type="submit" class="btn btn-md btn-golden">Apply coupon</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="coupon_code right" data-aos="fade-up" data-aos-delay="400">
                            <h3>Cart Totals</h3>
                            <div class="coupon_inner">
                                <div class="cart_subtotal">
                                    <p>Subtotal</p>
                                    <p class="cart_amount">{{ Cart::getTotal() }} đ</p>
                                </div>
                                <div class="cart_subtotal ">
                                    <p>Shipping</p>
                                    <p class="cart_amount"><span>Flat Rate:</span> đ</p>
                                </div>
                                <a href="#">Calculate shipping</a>

                                <div class="cart_subtotal">
                                    <p>Total</p>
                                    <p class="cart_amount"></p>
                                </div>
                                <div class="checkout_btn">
                                    <a href="{{ route('site.checkout') }}" class="btn btn-md btn-golden">Thanh toán</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- End Coupon Section -->
    </div> <!-- ...:::: End Cart Section:::... -->
@endsection
