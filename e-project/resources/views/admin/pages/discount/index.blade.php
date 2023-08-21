@extends('admin.app')
@section('content')
    <main role="main" class="main-content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12">
                    <h2 class="mb-2 page-title">Thông tin giảm giá</h2>
                    <a href="{{ route('admin.discount.create') }}" class="btn mb-2 btn-outline-secondary"><span
                            class="fa-solid fa-plus fe-16 mr-2"></span>Thêm mới</a>
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
                                            <th data-field="id" >ID</th>
                                            <th data-field="name">Tên giảm giá</th>
                                            <th data-field="discount_percent">% giảm giá</th>
                                            <th data-field="active">Hoạt động</th>
                                            <th>Thao tác</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($discounts as $index => $discount)
                                            <tr>
                                                <td>{{ $index + 1 }}</td>
                                                <td>{{ $discount->id }}</td>
                                                <td>{{ $discount->name }}</td>
                                                <td>{{ $discount->discount_percent }}</td>
                                                <td>{{ $discount->active }}</td>
                                                <td>
                                                    <form method="POST"
                                                          action="{{ route('admin.discount.destroy', $discount->id) }}">
                                                        @csrf
                                                        @method('DELETE')
                                                        <a href="{{ route('admin.discount.edit', $discount->id) }}"
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
                                            <th data-field="id">ID</th>
                                            <th data-field="name">Tên mã giảm giá</th>
                                            <th data-field="discount_percent">% giảm giá</th>
                                            <th data-field="active">Hoạt động</th>
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
    </main>
@endsection
