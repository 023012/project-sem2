@extends('admin.app')
@push('title')
Thêm thông tin liên lạc
@endpush
@section('content')
<main role="main" class="main-content">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-title">Thêm liên lạc mới</h1>
                    </div>
                    <div class="col-md-12">
                        <div class="card-deck">
                            <div class="card shadow mb-4">
                                <div class="card-header">
                                    <strong class="card-title">Thêm thông tin liên lạc</strong>
                                </div>
                                <div class="card-body">
                                    <form method="POST" action="{{ route('admin.contact.store') }}">
                                        @csrf
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label>Tên khách hàng</label>
                                                <input name="name" type="text" class="form-control" placeholder="Khách hàng">
                                                <span>
                                                    @if ($errors->has("name"))
                                                    {{ $error->first('name') }}
                                                    @endif
                                                </span>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Số điện thoại</label>
                                                <input name="phone" type="text" class="form-control" placeholder="+(84) 978xxx">
                                                <span>
                                                    @if($errors->any('phone'))
                                                    {{ $errors->first('phone') }}
                                                    @endif
                                                </span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input name="email" type="email" class="form-control" placeholder="Email">
                                            <span>
                                                @if ($errors->has("email"))
                                                {{ $error->first('email') }}
                                                @endif
                                            </span>
                                        </div>
                                        <div class="form-group">
                                            <label>Message</label>
                                            <textarea name="message" type="text" class="form-control" placeholder="Nội dung liên hệ"></textarea>
                                            <span>
                                                @if ($errors->has("messages"))
                                                {{ $error->first('message') }}
                                                @endif
                                            </span>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Submit</button>
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