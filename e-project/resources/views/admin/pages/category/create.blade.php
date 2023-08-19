@extends('admin.app')
@section('content')
    <main role="main" class="main-content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="page-title">Thêm mới danh mục</h1>
                        </div>
                        <div class="col-md-12">
                            <div class="card shadow mb-4">
                                <div class="card-header">
                                    <strong class="card-title">Danh mục mới</strong>
                                </div>
                                <div class="card-body">
                                    <form method="POST" action="{{ route('admin.category.store') }}"
                                          class="form-inline">
                                        @csrf
                                        <label class="my-1 mr-2">Tên danh mục:</label>
                                        <input name="name" type="text" class="form-control mb-2 mr-sm-2"
                                               placeholder="Tên danh mục">
                                        <span>
                                            @error('name')
                                            <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </span>
                                        <button type="submit" class="btn btn-primary mb-2">Thêm</button>
                                        <a href="{{ route('admin.category.index') }}" class=" btn btn-secondary mb-2 ml-2">Hủy</a>
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
