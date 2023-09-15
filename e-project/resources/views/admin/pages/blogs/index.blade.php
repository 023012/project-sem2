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
                                        <th>ID</th>
                                        <th style="  width: 250px;">Tác giả</th>
                                        <th style="  width: 250px;">Image</th>
                                        <th style="  width: 100px;">Title</th>
                                        <th style="  width: 100px;">content</th>
                                        <th style="  width: 100px;">Tags</th>
                                        <th style="  width: 50px;">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($blogs as $index => $blog)
                                        <tr style="height: 100px">
                                            <td>{{ $index + 1 }}</td>
                                            <td>{{ $blog->id }}</td>
                                            <td style=" width: 250px">{{ $blog->write_by }}</td>
                                            <td style="  width: 250px;">
                                                <img src="{{ asset('uploads/' . $blog->image) }}"
                                                     alt="Anh Bai Viet" width="100" height="100">
                                            </td>
                                            <td style=" width: 100px">{{ $blog->title }}</td>
                                            <td style="  width: 100px;">{{ $blog->content }}</td>
                                            <td style="  width: 300px;">{{ $blog->tag }}</td>
                                            <td style="  width: 50px;">
                                                <form method="POST"
                                                      action="{{ route('admin.blogs.destroy', $blog->id) }}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <a href="{{ route('admin.products.show', $blog->id) }}"
                                                       class="btn">
                                                        <span class="fa-solid fa-circle-info"></span></a>
                                                    <a href="{{ route('admin.products.edit', $blog->id) }}"
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
                                        <th style="  width: 250px;">Tác giả</th>
                                        <th style="  width: 250px;">Image</th>
                                        <th style="  width: 100px;">Title</th>
                                        <th style="  width: 100px;">content</th>
                                        <th style="  width: 100px;">Tags</th>
                                        <th style="  width: 50px;">Action</th>
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
