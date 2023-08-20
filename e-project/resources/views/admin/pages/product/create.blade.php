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
                            <strong class="card-title">Advanced Validation</strong>
                        </div>
                        <div class="card-body">
                            <form class="needs-validation" novalidate>
                                <div class="form-row">
                                    <div class="col-md-6 mb-3">
                                        <label>Tên sản phẩm</label>
                                        <input name="name" type="text" class="form-control" value="Mark" required>
                                        <span>
                                            @error('name')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </span>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label>Last name</label>
                                        <input type="text" class="form-control" value="Otto" required>
                                        <div class="valid-feedback"> Looks good!</div>
                                    </div>
                                </div> <!-- /.form-row -->
                                <div class="form-row">
                                    <div class="col-md-8 mb-3">
                                        <label for="exampleInputEmail2">Email address</label>
                                        <input type="email" class="form-control" id="exampleInputEmail2"
                                               aria-describedby="emailHelp1" required>
                                        <div class="invalid-feedback"> Please use a valid email</div>
                                        <small id="emailHelp1" class="form-text text-muted">We'll never share your email
                                            with anyone else.</small>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="custom-phone">US Telephone</label>
                                        <input class="form-control input-phoneus" id="custom-phone" maxlength="14"
                                               required>
                                        <div class="invalid-feedback"> Please enter a correct phone</div>
                                    </div>
                                </div> <!-- /.form-row -->
                                <div class="form-group mb-3">
                                    <label for="address-wpalaceholder">Address</label>
                                    <input type="text" id="address-wpalaceholder" class="form-control"
                                           placeholder="Enter your address">
                                    <div class="valid-feedback"> Looks good!</div>
                                    <div class="invalid-feedback"> Badd address</div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-6 mb-3">
                                        <label for="validationCustom33">City</label>
                                        <input type="text" class="form-control" id="validationCustom33" required>
                                        <div class="invalid-feedback"> Please provide a valid city.</div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="validationSelect2">State</label>
                                        <select class="form-control select2" id="validationSelect2" required>
                                            <option value="">Select state</option>
                                            <optgroup label="Mountain Time Zone">
                                                <option value="AZ">Arizona</option>
                                                <option value="CO">Colorado</option>
                                                <option value="ID">Idaho</option>
                                                <option value="MT">Montana</option>
                                                <option value="NE">Nebraska</option>
                                                <option value="NM">New Mexico</option>
                                                <option value="ND">North Dakota</option>
                                                <option value="UT">Utah</option>
                                                <option value="WY">Wyoming</option>
                                            </optgroup>
                                            <optgroup label="Central Time Zone">
                                                <option value="AL">Alabama</option>
                                                <option value="AR">Arkansas</option>
                                                <option value="IL">Illinois</option>
                                                <option value="IA">Iowa</option>
                                                <option value="KS">Kansas</option>
                                                <option value="KY">Kentucky</option>
                                                <option value="LA">Louisiana</option>
                                                <option value="MN">Minnesota</option>
                                                <option value="MS">Mississippi</option>
                                                <option value="MO">Missouri</option>
                                                <option value="OK">Oklahoma</option>
                                                <option value="SD">South Dakota</option>
                                                <option value="TX">Texas</option>
                                                <option value="TN">Tennessee</option>
                                                <option value="WI">Wisconsin</option>
                                            </optgroup>
                                        </select>
                                        <div class="invalid-feedback"> Please select a valid state.</div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="custom-zip">Zip code</label>
                                        <input class="form-control input-zip" id="custom-zip" autocomplete="off"
                                               maxlength="9" required>
                                        <div class="invalid-feedback"> Please provide a valid zip.</div>
                                    </div>
                                </div>
                                <div class="form-row mb-3">
                                    <div class="col-md-4 mx-auto mb-3">
                                        <p class="mb-3">Trạng thái</p>
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" class="custom-control-input"
                                                   required>
                                            <label class="custom-control-label" for="customSwitch1">Yes</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mx-auto mb-3">
                                        <p class="mb-3">Nổi bật</p>
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" class="custom-control-input" id="is_featured">
                                            <label class="custom-control-label" for="is_featured"></label>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mx-auto mb-3">
                                        <p class="mb-3">Active</p>
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" class="custom-control-input" id="is_active">
                                            <label class="custom-control-label" for="is_active"></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <label>Mô tả</label>
                                    <textarea name="description" class="form-control" id="description"
                                              placeholder="Take a note here" required="" rows="3"></textarea>
                                    <div class="invalid-feedback"> Please enter a message in the textarea.</div>
                                </div>
                                <button class="btn btn-primary" type="submit">Submit form</button>
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
            placeholder: 'Hello Bootstrap 4',
            tabsize: 2,
            height: 100
        });
    </script>
@endpush
