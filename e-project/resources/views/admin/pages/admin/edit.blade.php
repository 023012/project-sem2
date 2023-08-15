@extends('admin.app')
@push('title')
    Sửa thành viên
@endpush
@section('content')
<main role="main" class="main-content">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-12">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-title">Sửa thành viên</h1>
                </div>
                <div class="col-md-12">
                  <div class="card shadow mb-4">
                    <div class="card-header">
                      <strong class="card-title">Sửa thành viên</strong>
                    </div>
                    <div class="card-body">
                      <form method="POST" action="{{ route('admin.admin-manage.update', $admin->id) }}" class="form-group">
                        @csrf
                        @method('PUT')
                        <label class="my-1 mr-2" >Tên thành viên</label>
                        <input name="name" type="text" class="form-control mb-2 mr-sm-2" placeholder="Tên thành viên" value="{{ $admin->name }}">
                          @error('name')
                          <div class="text-danger">{{ $message }}</div>
                          @enderror
                          <label class="my-1 mr-2" >Email</label>
                        <input name="email" type="email" class="form-control mb-2 mr-sm-2" placeholder="Email" value="{{ $admin->email }}">
                          @error('email')
                          <div class="text-danger">{{ $message }}</div>
                          @enderror
                          <label class="my-1 mr-2" >Địa chỉ</label>
                        <input name="address" type="text" class="form-control mb-2 mr-sm-2" placeholder="Địa chỉ" value="{{ $admin->address }}">
                          @error('address')
                          <div class="text-danger">{{ $message }}</div>
                          @enderror
                          <label class="my-1 mr-2" >Số điện thoại</label>
                        <input name="phone" type="tel" class="form-control mb-2 mr-sm-2" placeholder="Số điện thoại" value="{{ $admin->phone }}">
                          @error('phone')
                          <div class="text-danger">{{ $message }}</div>
                          @enderror
                          <label class="my-1 mr-2" >Mật khẩu</label>
                        <input name="password" type="password" class="form-control mb-2 mr-sm-2" placeholder="Mật khẩu" value="{{ $admin->password }}">
                          @error('password')
                          <div class="text-danger">{{ $message }}</div>
                          @enderror
                        <button type="submit" class="btn btn-primary mb-2">Submit</button>
                      </form>
                    </div>
                  </div>
                </div>
              </div> <!-- end section -->
        </div> <!-- .col-12 -->
      </div> <!-- .row -->
    </div> <!-- .container-fluid -->
    </div>
  </main> <!-- main -->
@endsection
