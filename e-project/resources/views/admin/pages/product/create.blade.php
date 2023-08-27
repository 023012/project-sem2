@extends('admin.app')
@push('style')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
@endpush
@section('content')
    <main role="main" class="main-content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12">
                    <h2 class="mb-2 page-title">Danh sách sản phẩm</h2>
                    <div class="card shadow mb-4">
                        <div class="card-header">
                            <strong class="card-title">Thêm mới sản phẩm</strong>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.products.store') }}" method="POST"
                                  enctype="multipart/form-data"
                                  class="needs-validation"
                                  novalidate>
                                @csrf
                                <div class="row">
                                    <div class="form-row">
                                        <div class="col-md-6 mb-3 p-3">
                                            <div class="form-group mb-3">
                                                <label><strong>Tên sản phẩm</strong></label>
                                                <input name="name" type="text" class="form-control"
                                                       placeholder="Tên sản phẩm"
                                                       required>
                                                <span>
                                                @error('name')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </span>
                                            </div>
                                            <div class="form-group mb-3">
                                                <label><strong>Vật liệu</strong></label>
                                                <input name="material" type="text" class="form-control"
                                                       placeholder="Vật liệu"
                                                       required>
                                                <span>
                                                @error('material')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </span>
                                            </div>
                                            <div class="form-group mb-3">
                                                <label><strong>Kích thước</strong></label>
                                                <div class="form-row">
                                                    <div class="col-md-4 mb-3">
                                                        <label><strong>Chiều dài</strong></label>
                                                        <input name="length" type="text" class="form-control"
                                                               placeholder="Chiều dài (mm)" required>
                                                        @error('length')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                    <div class="col-md-4 mb-3">
                                                        <label><strong>Chiều rộng</strong></label>
                                                        <input name="width" type="text" class="form-control"
                                                               placeholder="Chiều rộng (mm)" required>
                                                        @error('width')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                    <div class="col-md-4 mb-3">
                                                        <label><strong>Chiều cao</strong></label>
                                                        <input name="high" type="text" class="form-control"
                                                               placeholder="Chiều cao (mm)" required>
                                                        @error('high')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group form-row mb-3">
                                                <div class="col-md-6 mb-3">
                                                    <label><strong>Số lượng</strong></label>
                                                    <input name="quantity" type="number" class="form-control"
                                                           placeholder="100"
                                                           required>
                                                    <span>
                                                @error('quantity')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </span>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label><strong>Đơn giá</strong></label>
                                                    <input name="price" type="text" class="form-control"
                                                           placeholder="Giá sản phẩm"
                                                           required>
                                                    <span>
                                                @error('price')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </span>
                                                </div>
                                            </div>
                                            <div class="form-group form-row mb-3">
                                                <div class="col-md-6 mb-3">
                                                    <label><strong>Sản phẩm nổi bật</strong></label>
                                                    <div class="custom-control custom-radio">
                                                        <input name="featured" value="1" type="radio" id="is_featured"
                                                               class="custom-control-input">
                                                        <label class="custom-control-label" for="is_featured">Có nổi
                                                            bật</label>
                                                    </div>
                                                    <div class="custom-control custom-radio">
                                                        <input name="featured" value="0" type="radio" id="not_featured"
                                                               class="custom-control-input" checked>
                                                        <label class="custom-control-label" for="not_featured">Không nổi
                                                            bật</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label><strong>Trạng thái</strong></label>
                                                    <div class="custom-control custom-radio">
                                                        <input name="status" value="1" type="radio" id="con_hang"
                                                               class="custom-control-input">
                                                        <label class="custom-control-label" for="con_hang">Còn
                                                            hàng</label>
                                                    </div>
                                                    <div class="custom-control custom-radio">
                                                        <input name="status" value="0" type="radio" id="het_hang"
                                                               class="custom-control-input" checked>
                                                        <label class="custom-control-label" for="het_hang">Hết
                                                            hàng</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group mb-3">
                                                <label><strong>Hiển thị sản phẩm</strong></label>
                                                <p class="text-muted"><span> Sản phẩm được hiển thị hoặc sẽ ẩn đi phía người dùng.</span>
                                                </p>
                                                <div class="form-row">
                                                    <div class="col-md-6 mb-3">
                                                        <div class="custom-control custom-radio">
                                                            <input name="active" value="1" type="radio"
                                                                   class="custom-control-input" id="is_active" required>
                                                            <label class="custom-control-label" for="is_active">Kích
                                                                hoạt sản phẩm</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 mb-3">
                                                        <div class="custom-control custom-radio mb-3">
                                                            <input name="active" value="0" type="radio"
                                                                   class="custom-control-input" id="not_active"
                                                                   required>
                                                            <label class="custom-control-label" for="not_active">Không
                                                                kích hoạt sản phẩm</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3 p-3">
                                            <div class="form-groupmb-3">
                                                <div class="form-row">
                                                    <div class="col-md-6 mb-3">
                                                        <label><strong>Thể loại sản phẩm</strong></label>
                                                        <select name="category_id" class="form-control select2">
                                                            @foreach($categories as $category)
                                                                <option
                                                                    value="{{ $category->id }}">{{ $category->name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="col-md-6 mb-3">
                                                        <label><strong>Mã giảm giá</strong></label>
                                                        <select name="discount_id" class="form-control select2">
                                                            @foreach($discounts as $discount)
                                                                <option
                                                                    value="{{ $discount->id }}">{{ $discount->name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group mb-3">
                                                <label><strong>Ảnh sản phẩm</strong></label>
                                                <input name="file_upload" class="form-control-file" type="file"
                                                       id="upload">
                                            </div>
                                            <div class="form-group mb-3">
                                                <label><strong>Mô tả chi tiết</strong></label>
                                                <textarea name="description" class="form-control" id="description"
                                                          required="" rows="3"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-primary" type="submit">Lưu</button>
                                <a href="{{ route('admin.products.index') }}" class="btn btn-secondary ml-2">Hủy</a>
                            </form>
                        </div> <!-- /.card-body -->
                    </div> <!-- /.card -->
                </div> <!-- .col-12 -->
            </div> <!-- .row -->
        </div> <!-- .container-fluid -->
    </main>
@endsection
@push('script')
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>

    <script>
        $('#description').summernote({
            placeholder: 'Tên sản phẩm ' +
                ' Mô tả sản chi tiết của sản phẩm',
            tabsize: 2,
            height: 250
        });
    </script>
@endpush
