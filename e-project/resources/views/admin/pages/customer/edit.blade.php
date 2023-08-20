@extends('admin.app')
@push('title')
Sửa khách hàng
@endpush
@section('content')
<main role="main" class="main-content">
  <div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-12">
        <div class="row">
          <div class="col-md-12">
            <h1 class="page-title">Sửa thông tin khác hàng</h1>
          </div>
          <div class="col-md-12">
            <div class="card-deck">
              <div class="card shadow mb-4">
                <div class="card-header">
                  <strong class="card-title">Sửa khách hàng</strong>
                </div>
                <div class="card-body">
                  <form method="POST" action="{{ route('admin.user.update', $user->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="inputEmail4">Tên khách hàng</label>
                        <input name="name" type="text" class="form-control" id="inputAdress" placeholder="khách hàng" value="{{ $user->name }}">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="inputEmail4">Email</label>
                        <input name="email" type="email" class="form-control" id="inputEmail4" placeholder="Email" value="{{ $user->email }}">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="inputPassword4">Password</label>
                        <input name="password" type="password" class="form-control" id="inputPassword4" placeholder="Password" value="{{ $user->password }}">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="inputAddress">Số điện thoại</label>
                        <input name="phone" type="text" class="form-control" id="inputAdress" placeholder="phone" value="{{ $user->phone }}">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputAddress">Địa chỉ</label>
                      <input name="address" type="text" class="form-control" id="inputAddress" placeholder="địa chỉ" value="{{ $user->address }}">
                    </div>
                    <button type="submit" class="btn btn-primary">Edit</button>
                  </form>
                </div>
              </div>
            </div> <!-- / .card-desk-->
          </div>
        </div> <!-- .row -->
      </div> <!-- .container-fluid -->
    </div>
</main> <!-- main -->
@endsection