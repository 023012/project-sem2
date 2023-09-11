@extends('site.app')
@section('content')
    <!-- ...:::: Start Breadcrumb Section:::... -->
    <div class="breadcrumb-section breadcrumb-bg-color--golden">
        <div class="breadcrumb-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h3 class="breadcrumb-title">ĐĂNG NHẬP</h3>
                        <div class="breadcrumb-nav breadcrumb-nav-color--black breadcrumb-nav-hover-color--golden">
                            <nav aria-label="breadcrumb">
                                <ul>
                                    <li><a href="index.html">Trang Chủ</a></li>
                                    <li><a href="shop-grid-sidebar-left.html">Cửa Hàng</a></li>
                                    <li class="active" aria-current="page">Đăng Nhập</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- ...:::: End Breadcrumb Section:::... -->

    <!-- ...:::: Start Customer Login Section :::... -->
    <div class="customer-login">
        <div class="container">
            <div class="row">
                <!--login area start-->
                <div class="col-lg-6 col-md-6">
                    <div class="account_form" data-aos="fade-up" data-aos-delay="0">
                        <h3>Đăng nhập</h3>
                        <form  action="{{ route('site.login.post') }}" method="POST">
                            @csrf
                            <div class="default-form-box">
                                <label>Email <span>*</span></label>
                                <input name="email" type="text" value="{{ old('email') }}" required>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="default-form-box">
                                <label>Mật khẩu <span>*</span></label>
                                <input name="password" type="password" required>
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="login_submit">
                                <button class="btn btn-md btn-black-default-hover mb-4" type="submit">Đăng nhập</button>
                                <a href="{{ route('site.register') }}">Đăng ký tài khoản</a>
                                <a href="#">Quên mật khẩu?</a>
                            </div>
                        </form>
                    </div>
                </div>
                <!--login area start-->

                <!--register area start-->
                <div class="col-lg-6 col-md-6">
                    <img class="img-fluid" src="{{ asset('frontend/assets/images/banner/banner-style-3-img-1.jpg') }}"/>
                </div>
                <!--register area end-->
            </div>
        </div>
    </div>
    <!-- ...:::: End Customer Login Section :::... -->
@endsection
