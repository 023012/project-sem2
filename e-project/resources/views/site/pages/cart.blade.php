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
                                            <td class="product-price">{{ number_format($item->price, 0, '', '.')  }}
                                                vnđ
                                            </td>
                                            <td class="product_quantity">
                                                <form action="{{ route('cart.update') }}" method="POST">
                                                    @csrf
                                                    <input type="hidden" name="id" value="{{ $item->id }}">
                                                    <input min="1" max="{{ $item->attributes->stock_quantity }}" value="{{ $item->quantity }}" type="number"
                                                           name="quantity">
                                                    <button type="submit"><i class="fa-regular fa-pen-to-square"></i>
                                                    </button>
                                                </form>
                                            </td>
                                            <td class="product_total">{{ number_format($item->price * $item->quantity, 0, '', '.') }}
                                                vnđ
                                            </td>
                                            <td class="product_remove">
                                                <form action="{{ route('cart.remove') }}" method="POST">
                                                    @csrf
                                                    <input type="hidden" value="{{ $item->id }}" name="id">
                                                    <button type="submit">
                                                        <i class="fa-regular fa-trash-can"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr> <!-- End Cart Single Item-->
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="cart_submit">
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

        <!-- ...:::: Start Checkout Section:::... -->
        <div class="checkout-section mt-10">
            <div class="container">
                <!-- Start User Details Checkout Form -->
                <div class="checkout_form" data-aos="fade-up" data-aos-delay="400">
                    <form action="{{ route('site.checkout.post') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <h3>Chi tiết thanh toán</h3>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="default-form-box">
                                            <label>Họ và tên <span>*</span></label>
                                            <input type="text" name="name" value="{{ Auth::user()->name }}">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="default-form-box">
                                            <label for="country">Địa chỉ <span>*</span></label>
                                            <input type="text" name="address" value="{{ Auth::user()->address }}">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="default-form-box">
                                            <label>Số điện thoại<span>*</span></label>
                                            <input type="text" name="phone" value="{{ Auth::user()->phone }}">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="default-form-box">
                                            <label> Email <span>*</span></label>
                                            <input type="text" name="email" value="{{ Auth::user()->email }}">
                                        </div>
                                    </div>
                                    <div class="col-12 mt-3">
                                        <div class="order-notes default-form-box">
                                            <label for="order_note">Ghi chú</label>
                                            <textarea id="order_note" name="notes" placeholder="Ghi chú"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <h3>Đơn hàng của bạn</h3>
                                <div class="order_table table-responsive">
                                    <table>
                                        <thead>
                                        <tr>
                                            <th>Sản phẩm</th>
                                            <th>Total</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($cartItems as $item)
                                            <tr>
                                                <td> {{ $item->name }} <strong> × {{ $item->quantity }} sản phẩm</strong></td>
                                                <td> {{ number_format($item->price * $item->quantity, 0, '', '.') }} vnđ</td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <th>Tổng số tiền</th>
                                            <td>{{ number_format(Cart::getTotal(), 0, '', '.') }} vnđ</td>
                                        </tr>
                                        <tr>
                                            <th>Phí giao hàng</th>
                                            <td><strong>Miễn phí</strong></td>
                                        </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                <div class="payment_method">
                                    <div class="panel-default">
                                        <label class="checkbox-default" for="currencyCod" data-bs-toggle="collapse"
                                               data-bs-target="#methodCod">
                                            <input type="checkbox" id="currencyCod" name="payment_method" value="COD">
                                            <span>COD</span>
                                        </label>

                                        <div id="methodCod" class="collapse" data-parent="#methodCod">
                                            <div class="card-body1">
                                                <p>Please send a check to Store Name, Store Street, Store Town, Store
                                                    State / County, Store Postcode.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel-default">
                                        <label class="checkbox-default" for="currencyPaypal" data-bs-toggle="collapse"
                                               data-bs-target="#methodPaypal">
                                            <input type="checkbox" id="currencyPaypal" name="payment_method" value="PayPal">
                                            <span>PayPal</span>
                                        </label>
                                        <div id="methodPaypal" class="collapse " data-parent="#methodPaypal">
                                            <div class="card-body1">
                                                <p>Pay via PayPal; you can pay with your credit card if you don’t have a
                                                    PayPal account.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="order_button pt-3">
                                        <button class="btn btn-md btn-black-default-hover" type="submit">Đặt mua</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- Start User Details Checkout Form -->
            </div>
        </div>
        <!-- ...:::: End Checkout Section:::... -->
    </div> <!-- ...:::: End Cart Section:::... -->
@endsection
