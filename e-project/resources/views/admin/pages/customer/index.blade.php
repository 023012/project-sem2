@extends('admin.app')
@push('styles')
    <link rel="stylesheet" href="{{ asset('backend/css/dataTables.bootstrap4.css') }}">
@endpush
@push('title')
    Thông tin Khách Hàng
@endpush

@section('content')
    <main role="main" class="main-content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12">
                    <h2 class="mb-2 page-title">Thông tin khách hàng</h2>
                    <a href="{{ route('admin.user.create') }}" class="btn mb-2 btn-outline-secondary"><span
                            class="fa-solid fa-plus fe-16 mr-2"></span>Thêm mới</a>
                    <div class="row my-4">
                        <!-- Small table -->
                        <div class="col-md-12">
                            <div class="card shadow">
                                <div class="card-body">
                                     @if(session('mess'))
                                    <div class="alert alert-access">
                                         {{session('mess')}}
                                    </div>
                                    @endif
                                    <!-- table -->
                                    <table class="table datatables" id="tbl">
                                        <thead>
                                             <tr>
                                                <th data-field="id" data-sortable="true">ID</th>
                                                <th data-field="name">Họ & Tên</th>
                                                <th data-field="email">Email</th>
                                                <th>Địa chỉ</th>
                                                <th>Số điện thoại</th>
                                                <th>Thao tác</th>
                                             </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($users as $user)
                                                <tr>
                                                    <td>{{ $user->id }}</td>
                                                    <td>{{ $user->name }}</td>
                                                    <td>{{ $user->email }}</td>
                                                    <td>{{ $user->address }}</td>
                                                    <td>{{ $user->phone }}</td>
                                                    <td>
                                                        <form method="POST" action="{{ route('admin.user.destroy', $user->id) }}">
                                                            @csrf
                                                            @method('DELETE')
                                                            <a href="{{ route('admin.user.edit', $user->id) }}" class="btn" onclick="handleEdit()"><span
                                                                    class="fa-solid fa-pen-to-square"></span></a>
                                                            <button type="submit" class="btn"><span
                                                                    class="fa-solid fa-trash"></span></button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th data-field="id" data-sortable="true">ID</th>
                                                <th data-field="name"  data-sortable="true">Họ & Tên</th>
                                                <th data-field="email" data-sortable="true">Email</th>
                                                <th>Địa chỉ</th>
                                                <th>Số điện thoại</th>
                                                <th>Sửa</th>
                                                <th>Xóa</th>
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
    </main>
@endsection

@push('scripts')
    <script src="{{ asset('backend/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('backend/js/dataTables.bootstrap4.min.js') }}"></script>
    <script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
@endpush
