@extends('admin.app')
@push('title')
Thêm khách hàng
@endpush
@section('content')
<main role="main" class="main-content">
  <div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-12">
        <div class="row">
          <div class="col-md-12">
            <h1 class="page-title">Thêm khách hàng mới</h1>
          </div>
          <div class="col-md-12">
            <div class="card-deck">
              <div class="card shadow mb-4">
                <div class="card-header">
                  <strong class="card-title">Thêm khách hàng</strong>
                </div>
                <div class="card-body">
                  <form method="POST" action="{{ route('admin.user.store') }}">
                    @csrf
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="inputEmail4">Tên khách hàng</label>
                        <input name="name" type="text" class="form-control" id="inputAdress" placeholder="khách hàng">
                        <span>
                          @if ($errors->has("name"))
                          {{ $error->first('name') }}
                          @endif
                        </span>
                      </div>
                      <div class="form-group col-md-6">
                        <label for="inputEmail4">Email</label>
                        <input name="email" type="email" class="form-control" id="inputEmail4" placeholder="Email">
                        <span>
                          @if ($errors->has("email"))
                          {{ $error->first('email') }}
                          @endif
                        </span>
                      </div>
                      <div class="form-group col-md-6">
                        <label for="inputPassword4">Password</label>
                        <input name="password" type="password" class="form-control" id="inputPassword4" placeholder="Password">
                        <span>
                          @if ($errors->has("password"))
                          {{ $error->first('password') }}
                          @endif
                        </span>
                      </div>
                      <div class="form-group col-md-6">
                        <label for="inputAddress">Số điện thoại</label>
                        <input name="phone" type="text" class="form-control" id="inputAdress" placeholder="phone">
                        <span>
                          @if($errors->any('phone'))
                          {{ $errors->first('phone') }}
                          @endif
                        </span>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputAddress">Địa chỉ</label>
                      <input name="address" type="text" class="form-control" id="inputAddress" placeholder="địa chỉ">
                      <span>
                        @if ($errors->has("address"))
                        {{ $error->first('address') }}
                        @endif
                      </span>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
                </div>
              </div>
            </div> <!-- / .card-desk-->
          </div>

          <div class="card shadow mb-4">
            <div class="card-header">
            </div>
          </div> <!-- end section -->
        </div> <!-- .col-12 -->
      </div> <!-- .row -->
    </div> <!-- .container-fluid -->
  </div>
</main> <!-- main -->
@endsection