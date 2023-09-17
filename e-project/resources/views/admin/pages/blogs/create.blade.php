@extends('admin.app')
@push('style')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
@endpush
@section('content')
    <main role="main" class="main-content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12">
                    <h2 class="mb-2 page-title">Danh sách bài viết</h2>
                    <div class="card shadow mb-4">
                        <div class="card-header">
                            <strong class="card-title">Thêm mới bài viết</strong>
                        </div>

                        <div class="card-body">
                            <form action="{{ route('admin.blogs.store') }}" method="POST" enctype="multipart/form-data"
                                class="needs-validation" novalidate>
                                @csrf
                                <div class="">
                                    <div class="form-row">
                                        <div class="col-md-6 mb-3 p-3">
                                            <div class="form-group mb-3">
                                                <label><strong>Tác Giả</strong></label>
                                                <input name="write_by" type="text" class="form-control"
                                                    placeholder="Tác Giả" required>
                                            </div>
                                            <div class="form-group mb-3">
                                                <label><strong>Chủ đề</strong></label>
                                                <input name="title" type="text" class="form-control"
                                                    placeholder="Chủ Đề" required>
                                            </div>
                                            <div class="form-group mb-3">
                                                <label><strong>Tags</strong></label>
                                                <input name="tag" type="text" class="form-control" placeholder="Tags"
                                                    required>
                                            </div>
                                            <div class="form-group mb-3">
                                                <label><strong>Ảnh sản phẩm</strong></label>
                                                <input name="file_upload" class="form-control-file" type="file"
                                                    id="upload">
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3 p-3">
                                            <div class="form-group mb-3">
                                                <label><strong>Nội dung</strong></label>
                                                <textarea name="content" class="form-control" id="content" required="" rows="3"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-primary" type="submit">Lưu</button>
                                <a href="{{ route('admin.blogs.index') }}" class="btn btn-secondary ml-2">Hủy</a>
                            </form>
                        </div> <!-- /.card-body -->
                    </div> <!-- /.card -->
                </div> <!-- .col-12 -->
            </div> <!-- .row -->
        </div> <!-- .container-fluid -->
    </main>
@endsection
@push('script')
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>

    <script>
        $('#content').summernote({
            placeholder: 'Tên sản phẩm ' +
                ' Mô tả sản chi tiết của sản phẩm',
            tabsize: 2,
            height: 250
        });
    </script>
@endpush
