@extends('site.app')
@section('content')
    <!-- ...:::: Start Breadcrumb Section:::... -->
    <div class="breadcrumb-section breadcrumb-bg-color--golden">
        <div class="breadcrumb-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h3 class="breadcrumb-title">Đăng ký</h3>
                        <div class="breadcrumb-nav breadcrumb-nav-color--black breadcrumb-nav-hover-color--golden">
                            <nav aria-label="breadcrumb">
                                <ul>
                                    <li><a href="{{ route('site.home') }}">Trang chủ</a></li>
                                    <li><a href="">Cửa hàng</a></li>
                                    <li class="active" aria-current="page">Đăng ký tài khoản</li>
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
                <!--register area start-->
                <div class="col-lg-6 col-md-6">
                    <div class="account_form register" data-aos="fade-up" data-aos-delay="200">
                        <h3>Đăng ký</h3>
                        <form action="{{ route('site.register.store') }}" method="POST">
                            @csrf
                            <div class="default-form-box">
                                <label>Email <span>*</span></label>
                                <input name="email" type="text" value="{{ old('email') }}" required>
                            </div>
                            <div class="default-form-box">
                                <label>Mật khẩu <span>*</span></label>
                                <input name="password" type="password" required>
                            </div>
                            <div class="login_submit">
                                <button class="btn btn-md btn-black-default-hover" type="submit">Đăng ký</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!--register area end-->
                <!--login area start-->
                <div class="col-lg-6 col-md-6">
                    <img class="img-fluid" src="{{ asset('frontend/assets/images/banner/banner-style-3-img-1.jpg') }}"/>
                </div>
                <!--login area start-->
            </div>
        </div>
    </div>
    <!-- ...:::: End Customer Login Section :::... -->
@endsection
