@extends('site.app')
@section('content')
    <!-- ...:::: Start Breadcrumb Section:::... -->
    <div class="breadcrumb-section breadcrumb-bg-color--golden">
        <div class="breadcrumb-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h3 class="breadcrumb-title">My Account</h3>
                        <div class="breadcrumb-nav breadcrumb-nav-color--black breadcrumb-nav-hover-color--golden">
                            <nav aria-label="breadcrumb">
                                <ul>
                                    <li><a href="{{ route('site.home') }}">Home</a></li>
                                    <li><a href="{{ route('site.shop') }}">Shop</a></li>
                                    <li class="active" aria-current="page">My Account</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- ...:::: End Breadcrumb Section:::... -->

    <!-- ...:::: Start Account Dashboard Section:::... -->
    <div class="account-dashboard">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-3 col-lg-3">
                    <!-- Nav tabs -->
                    <div class="dashboard_tab_button" data-aos="fade-up" data-aos-delay="0">
                        <ul role="tablist" class="nav flex-column dashboard-list">
                            <li><a href="#account-details" data-bs-toggle="tab"
                                    class="nav-link btn btn-block btn-md btn-black-default-hover active">Hồ sơ</a>
                            </li>
                            <li> <a href="#orders" data-bs-toggle="tab"
                                    class="nav-link btn btn-block btn-md btn-black-default-hover">Đơn hàng</a></li>
                            <li><a href="{{ route('site.logout') }}"
                                    class="nav-link btn btn-block btn-md btn-black-default-hover">Đăng xuất</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-12 col-md-9 col-lg-9">
                    <!-- Tab panes -->
                    <div class="tab-content dashboard_content" data-aos="fade-up" data-aos-delay="200">

                        <div class="tab-pane fade show active" id="account-details">
                            <h3>Account details </h3>
                            <div class="login">
                                <div class="login_form_container">
                                    <div class="account_login_form">
                                        <form action="#">
                                            <div class="default-form-box mb-20">
                                                <label>Họ và tên</label>
                                                <input type="text" name="name" value="{{ Auth::user()->name  }}">
                                            </div>
                                            <div class="default-form-box mb-20">
                                                <label>Email</label>
                                                <input type="text" name="email" value="{{ Auth::user()->email }}">
                                            </div>
                                            <div class="default-form-box mb-20">
                                                <label>Số điện thoại</label>
                                                <input type="text" name="phone" value="{{ Auth::user()->phone }}">
                                            </div>
                                            <div class="default-form-box mb-20">
                                                <label>Địa chỉ</label>
                                                <input type="text" name="address" value="{{ Auth::user()->address }}">
                                            </div>
                                            <div class="save_button mt-3">
                                                <button class="btn btn-md btn-black-default-hover"
                                                        type="submit">Save</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="orders">
                            <h4>Orders</h4>
                            <div class="table_page table-responsive">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Order</th>
                                            <th>Date</th>
                                            <th>Status</th>
                                            <th>Total</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>May 10, 2018</td>
                                            <td><span class="success">Completed</span></td>
                                            <td>$25.00 for 1 item </td>
                                            <td><a href="{{ route('site.cart') }}" class="view">view</a></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>May 10, 2018</td>
                                            <td>Processing</td>
                                            <td>$17.00 for 1 item </td>
                                            <td><a href="{{ route('site.cart') }}" class="view">view</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- ...:::: End Account Dashboard Section:::... -->
@endsection
