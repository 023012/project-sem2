@extends('admin.app')

@section('content')
    <main role="main" class="main-content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12">
                    <h2 class="h3 mb-4 page-title">Chi tiết đơn hàng: </h2>
                    @include('admin.partials.message')

                    @foreach($users as $user)

                        <div class="row mt-5 align-items-center">
                            <div class="col">
                                <div class="row align-items-center">
                                    <div class="col-md-7">
                                        <h4 class="mb-5">Mã đơn hàng: {{$user->order_number}}</h4>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-md-7">
                                        <p class="mb-3 text-muted">Tên khách hàng: {{$user->user_name}}</p>
                                        <p class="mb-3 text-muted">Địa chỉ: {{$user->address}}</p>
                                        <p class="mb-3 text-muted">Số điện thoại: {{$user->phone}}</p>
                                        <p class="mb-3 text-muted">Email: {{$user->email}}</p>
                                    </div>
                                    <div class="col">
                                        <p class="mb-3 text-muted">Ngày đặt mua: {{$user->created_at}}</p>
                                        <p class="mb-3 text-muted">Ngày giao hàng: </p>
                                        <p class="mb-3 text-muted">Ngày nhận hàng: </p>

                                        <div class="row">
                                            <div class="col-4">
                                                <form action="{{route('admin.order.update', $order->id)}}" method="post">
                                                    @csrf
                                                    @method('PUT')
                                                    <select name="status" id="validationSelect2"
                                                            class="form-control select2" onchange="this.form.submit()">
                                                        @foreach ($statusOptions as $key => $value)
                                                            <option value="{{ $key }}"
                                                                    @if ($key == old('status', $order->status))
                                                                    selected="selected"
                                                                @endif
                                                            >{{ $value }}</option>
                                                        @endforeach
                                                    </select>
                                                </form>
                                            </div>
                                            <div class="col">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div> <!-- /.col-12 -->
                        <div class="row mt-5">
                            <div class="col-12">
                                <h3 class="mb-3">Danh sách đơn hàng</h3>
                                <table class="table table-borderless table-striped">
                                    <thead>
                                    <tr role="row">
                                        <th>STT</th>
                                        <th>Tên sản phẩm</th>
                                        <th>Ảnh sản phẩm</th>
                                        <th>Số lượng</th>
                                        <th>Đơn giá</th>
                                        <th>Giá</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($orderDetail as $index => $item)

                                        <tr>
                                            <th scope="col">{{$index + 1}}</th>
                                            <td>{{$item->product_name}}</td>
                                            <td><img src="{{ asset('/uploads/' . $item->thumbnail) }}" alt=""
                                                     style="width: 100px;">
                                            </td>
                                            <td>{{$item->quantity}}</td>
                                            <td>{{ number_format($item->price, 0, '', '.')  }}</td>
                                            <td>{{ number_format(($item->price * $item->quantity), 0, '', '.')  }}</td>
                                            {{--                                <td>--}}
                                            {{--                                    <div class="dropdown">--}}
                                            {{--                                        <button class="btn btn-sm dropdown-toggle more-vertical" type="button"--}}
                                            {{--                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
                                            {{--                                            <span class="text-muted sr-only">Action</span>--}}
                                            {{--                                        </button>--}}
                                            {{--                                    </div>--}}
                                            {{--                                </td>--}}
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                <div>
                                    <div class="col"></div>
                                    <div class="col-6">
                                        <h4>Tổng giá tiền thanh toán: {{ number_format($totalPrice, 0, '', '.') }}
                                            đ</h4>
                                    </div>
                                </div>

                                <div class="mb-2">
                                    <a href="{{ route('admin.order.index') }}"
                                       class="btn m-2 btn-outline-secondary"><span
                                            class="fe fe-log-out fe-16 mr-2"></span> Danh sách đơn hàng</a>
                                </div>
                            </div>
                        </div>

                </div>
            </div> <!-- .row -->
        </div> <!-- .container-fluid -->
    </main> <!-- main -->
@endsection
@push('script')
    <script>
        function refreshPage() {
            location.reload();
        }
    </script>
@endpush
