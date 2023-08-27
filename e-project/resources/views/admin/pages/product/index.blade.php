@extends('admin.app')
@section('content')
    <main role="main" class="main-content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12">
                    <h2 class="mb-2 page-title">Danh sách sản phẩm</h2>
                    <a href="{{ route('admin.products.create') }}" class="btn mb-2 btn-outline-secondary"><span
                            class="fa-solid fa-plus fe-16 mr-2"></span>Thêm mới</a>
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
                                            <th>ID</th>
                                            <th style="  width: 100px;">Ảnh</th>
                                            <th style=" width: 400px">Tên</th>
                                            <th style="  width: 100px;">Danh mục</th>
                                            {{--                                            <th style="  width: 100px;">Vật liệu</th>--}}
                                            {{--                                            <th style="  width: 100px;">Cao</th>--}}
                                            {{--                                            <th style="  width: 100px;">Rộng</th>--}}
                                            {{--                                            <th style="  width: 100px;">Dài</th>--}}
                                            <th style="  width: 100px;">Mã giảm giá</th>
                                            <th style="  width: 100px;">Đơn giá</th>
                                            <th style="  width: 100px;">SL</th>
                                            <th style="  width: 100px;">Trạng thái</th>
                                            <th style="  width: 100px;">Nổi bật</th>
                                            <th style="  width: 100px;">Active</th>
                                            <th style="  width: 100px;">Thao tác</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($products as $index => $product)
                                            <tr style="height: 100px">
                                                <td>{{ $index + 1 }}</td>
                                                <td>{{ $product->id }}</td>
                                                <td style="  width: 100px;">
                                                    <img src="{{ asset('uploads/' . $product->thumbnail) }}" alt="Product Thumbnail" width="80" height="80">
                                                </td>
                                                <td style=" width: 400px">{{ $product->name }}</td>
                                                <td style="  width: 100px;">{{ $product->category }}</td>
                                                {{--                                                <td style="  width: 100px;">{{ $product->material }}</td>--}}
                                                {{--                                                <td style="  width: 100px;">{{ $product->high }}</td>--}}
                                                {{--                                                <td style="  width: 100px;">{{ $product->width }}</td>--}}
                                                {{--                                                <td style="  width: 100px;">{{ $product->length }}</td>--}}
                                                <td style="  width: 100px;">{{ $product->discount }}</td>
                                                <td style="  width: 100px;">{{ $product->price }}</td>
                                                <td style="  width: 100px;">{{ $product->quantity }}</td>
                                                <td style="  width: 100px;">{{ $product->status }}</td>
                                                <td style="  width: 100px;">{{ $product->featured }}</td>
                                                <td style="  width: 100px;">{{ $product->active }}</td>
                                                <td style="  width: 100px;">
                                                    <form method="POST"
                                                          action="{{ route('admin.products.destroy', $product->id) }}">
                                                        @csrf
                                                        @method('DELETE')
                                                        <a href="{{ route('admin.products.show', $product->id) }}"
                                                           class="btn"><span class="fa-solid fa-circle-info"></span></a>
                                                        <a href="{{ route('admin.products.edit', $product->id) }}"
                                                           class="btn"><span
                                                                class="fa-solid fa-pen-to-square"></span></a>
                                                        <button type="submit" class="btn"><span
                                                                class="fa-solid fa-trash"></span></button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <th data-field="stt" data-sortable="true">STT</th>
                                            <th>ID</th>
                                            <th style="  width: 100px;">Ảnh</th>
                                            <th style=" width: 400px">Tên</th>
                                            <th style="  width: 100px;">Danh mục</th>
                                            {{--                                            <th style="  width: 100px;">Vật liệu</th>--}}
                                            {{--                                            <th style="  width: 100px;">Cao</th>--}}
                                            {{--                                            <th style="  width: 100px;">Rộng</th>--}}
                                            {{--                                            <th style="  width: 100px;">Dài</th>--}}
                                            <th style="  width: 100px;">Mã giảm giá</th>
                                            <th style="  width: 100px;">Đơn giá</th>
                                            <th style="  width: 100px;">SL</th>
                                            <th style="  width: 100px;">Trạng thái</th>
                                            <th style="  width: 100px;">Nổi bật</th>
                                            <th style="  width: 100px;">Active</th>
                                            <th style="  width: 100px;">Thao tác</th>
                                        </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div> <!-- simple table -->
                    </div> <!-- end section -->
                </div> <!-- .col-12 -->
            </div> <!-- .row -->
        </div> <!-- .container-fluid -->
        {{--        aria-hidden="true">--}}
    </main>
@endsection
