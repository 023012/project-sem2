@extends('admin.app')
@section('content')
    <main role="main" class="main-content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12">
                    <h2 class="mb-2 page-title">Danh sách đơn hàng</h2>
                    <a href="" class="btn mb-4 btn-outline-secondary">Thêm mới</a>
                    <div class="row ml-4 mb-4 items-align-center">
                        <div class="col-md">
                            <ul class="nav nav-pills justify-content-start">
                                <li class="nav-item">
                                    <a class="nav-link active bg-transparent pr-2 pl-0 text-primary" href="#">Tổng số<span class="badge badge-pill bg-primary text-white ml-2">164</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-muted px-2" href="#">Chưa xử lý<span class="badge badge-pill bg-white border text-muted ml-2">64</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-muted px-2" href="#">Đang xử lý<span class="badge badge-pill bg-white border text-muted ml-2">48</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-muted px-2" href="#">Đã hoàn thành <span class="badge badge-pill bg-white border text-muted ml-2">52</span></a>
                                </li>
                            </ul>
                        </div>

                    </div>

                    <div class="row my-4">
                        <!-- Small table -->
                        <div class="col-md-12">
                            <div class="card shadow">
                                <div class="card-body" style="overflow: auto">
                                {{--              Notification                  --}}
                                @include('admin.partials.message')
                                <!-- table -->
                                    <table class="table datatables" id="tbl" style=" overflow-x: scroll; width: auto;">
                                        <thead>
                                        <tr>
                                            <th data-field="stt" data-sortable="true">STT</th>
                                            <th>Mã đơn hàng</th>
                                            <th>Ngày mua</th>
                                            <th>Khách hàng</th>
                                            <th>Sđt</th>
                                            <th>Địa chỉ GH</th>
                                            <th>Tổng tiền</th>
                                            <th>PT thanh toán</th>
                                            <th>Trạng thái</th>
                                            <th>Thao tác</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($orders as $index => $order)
                                            <tr>
                                                <td>{{ $index + 1 }}</td>
                                                <td>{{$order->order_number}}</td>
                                                <td>{{$order->created_at}}</td>
                                                <td>{{$order->name}}</td>
                                                <td>{{$order->phone}}</td>
                                                <td>{{$order->address}}</td>

                                                <td>{{ number_format($order->total_price, 0, '', '.') }} đ</td>
                                                <td>{{$order->payment_method}}</td>
                                                <td>
                                                    @if($order->status == 'pending')
                                                        <span class="badge badge-warning mr-2">Chưa xử lý</span>
                                                    @elseif($order->status == 'processing')
                                                        <span class="badge badge-primary mr-2">Đang xử lý</span>
                                                    @elseif($order->status == 'completed')
                                                        <span class="badge badge-success mr-2">Đã hoàn thành</span>
                                                    @elseif($order->status == 'decline')
                                                        <span class="badge badge-danger mr-2">Chưa hoàn thành</span>
                                                    @endif
{{--                                                    <form action="{{route('admin.order.update',$order->id)}}" method="post">--}}
{{--                                                        @csrf--}}
{{--                                                        @method('PUT')--}}
{{--                                                        <select name="status" class="form-control select2 w-100" onchange="this.form.submit()">--}}
{{--                                                            @foreach ($statusOptions as $key => $value)--}}
{{--                                                                <option value="{{ $key }}"--}}
{{--                                                                        @if ($key == old('status', $order->status))--}}
{{--                                                                        selected="selected"--}}
{{--                                                                    @endif--}}
{{--                                                                >{{ $value }}</option>--}}
{{--                                                            @endforeach--}}
{{--                                                        </select>--}}
{{--                                                    </form>--}}
                                                </td>

                                                <td>
                                                    <form method="POST"
                                                          action="">
                                                        @csrf
                                                        @method('DELETE')
                                                        <a href="{{ route('admin.order.show', $order->id) }}"
                                                           class="btn">
                                                            <span class="fa-solid fa-circle-info"></span></a>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <th data-field="stt" data-sortable="true">STT</th>
                                            <th>Mã đơn hàng</th>
                                            <th>Ngày mua</th>
                                            <th>Khách hàng</th>
                                            <th>Sđt</th>
                                            <th>Địa chỉ GH</th>
                                            <th>Tổng tiền</th>
                                            <th>PT thanh toán</th>
                                            <th>Trạng thái</th>
                                            <th>Thao tác</th>
                                        </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div> <!-- simple table -->
                    </div>

                </div> <!-- .col-12 -->
            </div> <!-- .row -->
        </div> <!-- .container-fluid -->
        {{--        aria-hidden="true">--}}
    </main>
@endsection
