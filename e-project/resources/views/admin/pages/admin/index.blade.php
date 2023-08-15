@extends('admin.app')
@push('styles')
    <link rel="stylesheet" href="{{ asset('backend/css/dataTables.bootstrap4.css') }}">
@endpush
@push('title')
    Quản lí tài khoản
@endpush

@section('content')
    <main role="main" class="main-content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12">
                    <h2 class="mb-2 page-title">Tài khoản </h2>
                    <a href="{{ route('admin.admin-manage.create') }}" class="btn mb-2 btn-outline-secondary"><span
                            class="fa-solid fa-plus fe-16 mr-2"></span>Thêm mới</a>
                    <div class="row my-4">
                        <!-- Small table -->
                        <div class="col-md-12">
                            <div class="card shadow">
                                <div class="card-body">
                                    <!-- table -->
                                    <table class="table datatables" id="tbl">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Tên thành viên</th>
                                                <th>Email</th>
                                                <th>Thao tác</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($admins as $admin)
                                                <tr>
                                                    <td>{{ $admin->id }}</td>
                                                    <td>{{ $admin->name }}</td>
                                                    <td>{{ $admin->email }}</td>
                                                    <td>
                                                        <form method="POST" action="{{ route('admin-manage.destroy', $admin->id) }}">
                                                            @csrf
                                                            @method('DELETE')
                                                            <a href="{{ route('admin.admin-manage.edit', $admin->id) }}" class="btn" onclick="handleEdit()" >
                                                                <span class="fa-solid fa-pen-to-square"></span>
                                                            </a>
                                                            <button type="submit" class="btn"><span
                                                                    class="fa-solid fa-trash"></span></button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>#</th>
                                                <th>Tên thành viên</th>
                                                <th>Email</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div> <!-- simple table -->
                    </div> <!-- end section -->
                </div> <!-- .col-12 -->
            </div> <!-- .row -->
        </div> <!-- .container-fluid -->
{{--        aria-hidden="true">--}}
    </main>
@endsection

@push('scripts')
    <script src="{{ asset('backend/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('backend/js/dataTables.bootstrap4.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#tbl').DataTable();
        });
        $('#tbl').DataTable({
            autoWidth: true,
            "lengthMenu": [
                [16, 32, 64, -1],
                [16, 32, 64, "All"]
            ]
        });

    </script>

@endpush
