@extends('admin.app')
@section('content')
    <main role="main" class="main-content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="page-title">Sửa thông tin giảm giá</h1>
                        </div>
                        <div class="col-md-12">
                            <div class="card-deck">
                                <div class="card shadow mb-4">
                                    <div class="card-header">
                                        <strong class="card-title">Sửa mã giảm giá</strong>
                                    </div>
                                    <div class="card-body">
                                        <form method="POST" action="{{ route('admin.discount.update', $discount->id) }}">
                                            @csrf
                                            @method('PUT')
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label>Tên giảm giá</label>
                                                    <input name="name" type="text" class="form-control"
                                                           placeholder="tên giảm giá" value="{{ $discount->name }}">
                                                    <span>
                                                        @error('name')
                                                            <div class="alert alert-danger">{{ $message }}</div>
                                                        @enderror
                                                    </span>
                                                </div>

                                                <div class="form-group col-md-6">
                                                    <label>% giảm giá</label>
                                                    <input name="discount_percent" type="text" class="form-control"
                                                           placeholder="%" value="{{ $discount->discount_percent }}">
                                                    <span>
                                                        @error('discount_percent')
                                                            <div class="alert alert-danger">{{ $message }}</div>
                                                        @enderror
                                                    </span>
                                                </div>
                                            </div>
                                            <!-- 
                                                <div class="form-group">
                                                <label>active</label>
                                                <input name="active" type="email" class="form-control"
                                                       placeholder="Hoạt động" value="{{ $discount->active }}"/>
                                                <span>
                                                    @error('active')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </span>
                                            </div>
                                            -->
                                            <button type="submit" class="btn btn-primary">Lưu</button>
                                            <a href="{{ route('admin.discount.index') }}" class=" btn btn-secondary">Hủy</a>
                                        </form>
                                    </div>
                                </div>
                            </div> <!-- / .card-desk-->
                        </div>
                    </div> <!-- .row -->
                </div> <!-- .container-fluid -->
            </div>
        </div>
    </main> <!-- main -->
@endsection
