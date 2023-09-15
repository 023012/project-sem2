@extends('admin.app')
@section('content')
<main role="main" class="main-content">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-title">Thêm mới bài viết</h1>
                    </div>
                    <div class="col-md-12">
                        <div class="card shadow mb-4">
                            <div class="card-header">
                                <strong class="card-title">Bài viết mới</strong>
                            </div>
                            <div class="card-body">
                                <form method="POST" action="store"
                                      class="form-inline">
                                    @csrf
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label class="my-1 mr-2">Write by</label>
                                            <input name="write_by" type="text" class="form-control mb-2 mr-sm-2"
                                                   placeholder="Tên danh mục">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="my-1 mr-2">Image</label>
                                            <input name="image" type="text" class="form-control mb-2 mr-sm-2"
                                                   placeholder="Tên danh mục">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="my-1 mr-2" >Title</label>
                                            <input name="title" type="text" class="form-control mb-2 mr-sm-2"
                                                   placeholder="Tên danh mục">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="my-1 mr-2">Content</label>
                                            <input name="content" type="text" class="form-control mb-2 mr-sm-2"
                                                   placeholder="Tên danh mục">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="my-1 mr-2">Tags</label>
                                            <input name="tag" type="text" class="form-control mb-2 mr-sm-2"
                                                   placeholder="Tên danh mục">
                                        </div>
                                        <button type="submit" class="btn btn-primary mb-2">Thêm</button>
                                        <a href="{{ route('admin.blogs.index') }}" class=" btn btn-secondary mb-2 ml-2">Hủy</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div> <!-- end section -->
            </div> <!-- .col-12 -->
        </div> <!-- .row -->
    </div> <!-- .container-fluid -->
</main> <!-- main -->
@endsection
