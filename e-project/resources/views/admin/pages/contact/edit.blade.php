@extends('admin.app')
@push('title')
Sửa thông tin liên lạc
@endpush
@section('content')
<main role="main" class="main-content">
  <div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-12">
        <div class="row">
          <div class="col-md-12">
            <h1 class="page-title">Sửa thông tin liên lạc</h1>
          </div>
          <div class="col-md-12">
            <div class="card-deck">
              <div class="card shadow mb-4">
                <div class="card-header">
                  <strong class="card-title">Sửa liên lạc</strong>
                </div>
                <div class="card-body">
                  <form method="POST" action="{{ route('admin.contact.update', $contact->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="inputEmail4">Tên thông tin liên lạc</label>
                        <input name="name" type="text" class="form-control" id="inputAdress" placeholder="tên liên lạc" value="{{ $contact->name }}">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="inputEmail4">Email</label>
                        <input name="email" type="email" class="form-control" id="inputEmail4" placeholder="Email" value="{{ $contact->email }}">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="inputAddress">Số điện thoại</label>
                        <input name="phone" type="text" class="form-control" id="inputAdress" placeholder="phone" value="{{ $contact->phone }}">
                      </div>
                      <div class="form-group">
                      <label for="inputAddress">Địa chỉ</label>
                      <input name="address" type="text" class="form-control" id="inputAddress" placeholder="địa chỉ" value="{{ $contact->address }}">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">content</label>
                        <input name="content" type="text" class="form-control" id="inputAdress" placeholder="content" value="{{ $contact->content }}">
                      </div>
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