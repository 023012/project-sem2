@extends('admin.app')

@section('content')
<main role="main" class="main-content">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-12">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-title">Thêm mới tài khoản</h1>
                </div>
                <div class="col-md-12">
                  <div class="card shadow mb-4">
                    <div class="card-header">
                      <strong class="card-title">Tài khoản mới</strong>
                    </div>
                      <div class="card-deck">
                          <div class="card shadow mb-4">
                              <div class="card-body">
                                  <form method="POST" action="{{ route('admin.admin-manage.store') }}" class="form-group">
                                      @csrf
                                      <div class="form-row">
                                          <div class="form-group col-md-6">
                                              <label for="iAddress">Tên tài khoản</label>
                                              <input type="text" class="form-control" name="name" id="iAddress" placeholder="Tên tài khoản">
                                              @error('name')
                                              <div class="text-danger">{{$message}}</div>
                                              @enderror
                                          </div>

                                          <div class="form-group col-md-6">
                                              <label for="iEmail">Email</label>
                                              <input type="email" name="email" class="form-control" id="iEmail" placeholder="Email">
                                              @error('email')
                                              <div class="text-danger">{{$message}}</div>
                                              @enderror
                                          </div>
                                      </div>

                                      <div class="form-row">
                                          <div class="form-group col-md-6">
                                              <label for="inputAddress">Địa chỉ</label>
                                              <input type="text" name="address" class="form-control" id="inputAddress" placeholder="Địa chỉ">
                                              @error('address')
                                              <div class="text-danger">{{$message}}</div>
                                              @enderror
                                          </div>

                                          <div class="form-group col-md-6">
                                              <label for="iphone">Số điện thoại</label>
                                              <input type="tel" name="phone" class="form-control" id="iphone" placeholder="0372xxxxxx">
                                              @error('phone')
                                              <div class="text-danger">{{$message}}</div>
                                              @enderror
                                          </div>
                                      </div>
                                          <div class="form-group ">
                                              <label for="iPassword">Password</label>
                                              <input type="password" name="password" class="form-control" id="iPassword" placeholder="Password">
                                              @error('password')
                                              <div class="text-danger">{{$message}}</div>
                                              @enderror
                                          </div>

                                      <button type="submit" class="btn btn-primary">Tạo tài khoản</button>
                                  </form>
                              </div>
                          </div>

                      </div> <!-- / .card-desk-->
                </div>
              </div> <!-- end section -->
        </div> <!-- .col-12 -->
      </div> <!-- .row -->
    </div> <!-- .container-fluid -->
    </div>
  </main> <!-- main -->
@endsection
