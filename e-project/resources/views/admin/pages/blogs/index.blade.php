@extends('admin.app')
@section('content')
    <main role="main" class="main-content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12">
                    <h2 class="mb-2 page-title">Danh sách bài viết</h2>
                    <a href="{{ route('admin.blogs.create') }}" class="btn mb-2 btn-outline-secondary">Thêm mới</a>
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
                                            <th scope="col" style="width: 400px;">Tiêu đề</th>
                                            <th scope="col" style="width: 200px;">Tác giả</th>
                                            <th scope="col" style="width: 200px;">Ngày viết</th>
                                            <th scope="col" style="width: 200px;">Ảnh</th>
                                            <th scope="col" style="width: 200px;">Tags</th>
                                            <th scope="col" style="width: 200px;">Thao tác</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($blogs as $index => $blog)
                                            <tr>
                                                <td>{{ $index + 1 }}</td>
                                                <td>{{ $blog->title }}</td>
                                                <td>{{ $blog->write_by }}</td>
                                                <td>{{ $blog->created_at }}</td>
                                                <td>
                                                    <img src="{{ asset('uploads/' . $blog->image) }}"
                                                         alt="Anh Bai Viet" width="100" height="100">
                                                </td>
                                                <td>{{ $blog->tag }}</td>
                                                <td>
                                                    <form method="POST"
                                                          action="{{ route('admin.blogs.destroy', $blog->id) }}">
                                                        @csrf
                                                        @method('DELETE')
{{--                                                        <a href="{{ route('admin.blogs.show', $blog->id) }}"--}}
{{--                                                           class="btn">--}}
{{--                                                            <span class="fa-solid fa-circle-info"></span></a>--}}
                                                        <a href="{{ route('admin.blogs.edit', $blog->id) }}"
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
                                            <th>Tiêu đề</th>
                                            <th>Tác giả</th>
                                            <th>Ngày viết</th>
                                            <th>Ảnh</th>
                                            <th>Tags</th>
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
