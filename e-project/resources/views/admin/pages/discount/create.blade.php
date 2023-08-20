@extends('admin.app')
@section('content')
    <main role="main" class="main-content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="page-title">Thêm discount mới</h1>
                        </div>
                        <div class="col-md-12">
                            <div class="card-deck">
                                <div class="card shadow mb-4">
                                    <div class="card-header">
                                        <strong class="card-title">Thêm giảm giá</strong>
                                    </div>
                                    <div class="card-body">
                                        <form method="POST" action="{{ route('admin.discount.store') }}">
                                            @csrf
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label>Tên mã giảm giá</label>
                                                    <input name="name" type="text" class="form-control"
                                                           placeholder="giảm giá">
                                                    <span>
                                                        @error('name')
                                                            <div class="alert alert-danger">{{ $message }}</div>
                                                        @enderror
                                                    </span>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>Số % giảm giá</label>
                                                    <input name="discount_percent" type="tel" class="form-control"
                                                           placeholder="% giảm giá ">
                                                    <span>
                                                        @error('discount_percent')
                                                            <div class="alert alert-danger">{{ $message }}</div>
                                                        @enderror
                                                    </span>
                                                </div>
                                            </div>
                                            <!-- <div class="form-group">
                                                <label>Active</label>
                                                <textarea name="active" type="text" class="form-control"
                                                          placeholder="Hoạt động"></textarea>
                                                <span>
                                                    @error('message')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </span>
                                            </div>
-->
                                            <button type="submit" class="btn btn-primary">Thêm</button>
                                            <a href="{{ route('admin.discount.index') }}" class="btn btn-secondary">Hủy</a>
                                        </form>
                                    </div>
                                </div>
                            </div> <!-- / .card-desk-->
                        </div><!-- end section -->
                    </div> <!-- .col-12 -->
                </div> <!-- .row -->
            </div> <!-- .container-fluid -->
        </div>
    </main> <!-- main -->
@endsection
