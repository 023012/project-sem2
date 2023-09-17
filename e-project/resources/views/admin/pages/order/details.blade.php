@extends('admin.app')

@section('content')
    <main role="main" class="main-content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12">
                    <h2 class="h3 mb-4 page-title">Chi tiết đơn hàng: </h2>
                    <div class="row mt-5 align-items-center">
                        <div class="col">
                            <div class="row align-items-center">
                                <div class="col-md-7">
                                    <h4 class="mb-5">Mã đơn hàng: </h4>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col-md-7">
                                    <p class="small mb-3 text-muted">Tên khách hàng: </p>
                                    <p class="small mb-3 text-muted">Địa chỉ: </p>
                                    <p class="small mb-3 text-muted">Số điện thoại: </p>
                                    <p class="small mb-3 text-muted">Email: </p>
                                </div>
                                <div class="col">
                                    <p class="small mb-3 text-muted">Ngày đặt mua: </p>
                                    <p class="small mb-3 text-muted">Ngày giao hàng: </p>
                                    <p class="small mb-3 text-muted">Ngày nhận hàng: </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h6 class="mb-3">Danh sách đơn hàng</h6>
                    <table class="table table-borderless table-striped">
                        <thead>
                        <tr role="row">
                            <th>STT</th>
                            <th>Tên sản phẩm</th>
                            <th>Ảnh sản phẩm</th>
                            <th>Số lượng</th>
                            <th>Đơn giá</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="col">1</th>
                            <td>2020-12-26 01:32:21</td>
                            <td>$16.9</td>
                            <td>Paypal</td>
                            <td><span class="dot dot-lg bg-warning mr-2"></span>Due</td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-sm dropdown-toggle more-vertical" type="button"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="text-muted sr-only">Action</span>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <div class="mb-2">
                        <a href="{{ route('admin.order.index') }}" class="btn m-2 btn-outline-secondary"><span class="fe fe-log-out fe-16 mr-2"></span> Danh sách đơn hàng</a>
                        <form action="" method="POST">
                            <button type="button" class="btn m-2 btn-outline-success">Xác nhận <i class="fa-solid fa-check"></i></button>
                        </form>
                    </div>
                </div> <!-- /.col-12 -->
            </div> <!-- .row -->
        </div> <!-- .container-fluid -->
    </main> <!-- main -->
@endsection
