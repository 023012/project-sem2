@extends('admin.app')
@section('content')
    <main role="main" class="main-content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12">
                    <h2 class="mb-2 page-title">Danh mục sản phẩm</h2>
                    <a href="{{ route('admin.category.create') }}" class="btn mb-2 btn-outline-secondary"><span
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
                                            <th>ID</th>
                                            <th>Tên danh mục</th>
                                            <th>Thao tác</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($categories as $index => $category)
                                            <tr>
                                                <td>{{ $index + 1 }}</td>
                                                <td>{{ $category->id }}</td>
                                                <td>{{ $category->name }}</td>
                                                <td>
                                                    <form method="POST"
                                                          action="{{ route('admin.category.destroy', $category->id) }}">
                                                        @csrf
                                                        @method('DELETE')
                                                        <a href="{{ route('admin.category.edit', $category->id) }}"
                                                           class="btn" onclick="handleEdit()"><span
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
                                            <th data-field="id" data-sortable="true">ID</th>
                                            <th>Tên danh mục</th>
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
        {{--        aria-hidden="true">--}}
    </main>
@endsection
