@extends('admin.app')
@section('content')
    <main role="main" class="main-content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12">
                    <h2 class="mb-2 page-title">Quản lí nhận xét sản phẩm</h2>
                    <div class="row my-4">
                        <!-- Small table -->
                        <div class="col-md-12">
                            <div class="card shadow">
                                <div class="card-body">
                                {{--              Notification                  --}}
                                @include('admin.partials.message')
                                <!-- table -->
                                    <table class="table datatables" id="tbl">
                                        <thead>
                                        <tr>
                                            <th data-field="stt" data-sortable="true">STT</th>
                                            <th data-field="id" data-sortable="true">ID</th>
                                            <th>Tài khoản</th>
                                            <th>Sản phẩm</th>
                                            <th>Nhận xét</th>
                                            <th>Đánh giá</th>
                                            <th>Thao tác</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($product_comments as $index => $ProductComments)
                                            <tr>
                                                <td>{{ $index + 1 }}</td>
                                                <td>{{ $ProductComments->id }}</td>
                                                <td>{{ $ProductComments->user_id }}</td>
                                                <td>{{ $ProductComments->product_id }}</td>
                                                <td>{{ $ProductComments->message }}</td>
                                                <td>{{ $ProductComments->rating }}</td>
                                                <td>
                                                    <form method="POST"
                                                          action="{{ route('admin.product-comments.destroy', $ProductComments->id) }}">
                                                        @csrf
                                                        @method('DELETE')
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
                                            <th data-field="id" data-sortable="true">ID</th>
                                            <th>Tài khoản</th>
                                            <th>Sản phẩm</th>
                                            <th>Nhận xét</th>
                                            <th>Đánh giá</th>
                                            <th>Thao tác</th>
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
    </main> <!-- main -->
@endsection


