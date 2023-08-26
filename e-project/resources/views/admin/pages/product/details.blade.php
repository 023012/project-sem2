@extends('admin.app')
@push('style')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
@endpush
@section('content')
    <main role="main" class="main-content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12">
                    <h2 class="mb-2 page-title">Danh sách sản phẩm</h2>
                    <div class="card shadow mb-4">
                        <div class="card-header">
                            <strong class="card-title">Thêm mới sản phẩm</strong>
                        </div>
                        <div class="card-body">
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
        $('#description').summernote({
            placeholder: 'Tên sản phẩm ' +
                ' Mô tả sản chi tiết của sản phẩm',
            tabsize: 2,
            height: 180
        });
    </script>
@endpush

