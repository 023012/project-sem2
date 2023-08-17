@extends('admin.app')
@push('styles')
<link rel="stylesheet" href="{{ asset('backend/css/dataTables.bootstrap4.css') }}">
@endpush
@push('title')
Thông tin Liên lạc
@endpush

@section('content')
<main role="main" class="main-content">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2 class="mb-2 page-title">Thông tin liên lạc</h2>
                <a href="{{ route('admin.contact.create') }}" class="btn mb-2 btn-outline-secondary"><span class="fa-solid fa-plus fe-16 mr-2"></span>Thêm mới</a>
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
                                            <th>Số điện thoại</th>
                                            <th>Message</th>
                                            <th>Thao tác</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($contacts as $contact)
                                        <tr>
                                            <td>{{ $contact->id }}</td>
                                            <td>{{ $contact->name }}</td>
                                            <td>{{ $contact->email }}</td>
                                            <td>{{ $contact->phone }}</td>
                                            <td>{{ $contact->message }}</td>
                                            <td>
                                                <form method="POST" action="{{ route('admin.contact.destroy', $contact->id) }}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <a href="{{ route('admin.contact.edit', $contact->id) }}" class="btn"><span class="fa-solid fa-pen-to-square"></span></a>
                                                    <button type="submit" class="btn"><span class="fa-solid fa-trash"></span></button>
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th data-field="id" data-sortable="true">ID</th>
                                            <th data-field="name" data-sortable="true">Họ & Tên</th>
                                            <th data-field="email" data-sortable="true">Email</th>
                                            <th data-field="phone" data-sortable="true">phone</th>
                                            <th>content</th>
                                            <th>Thao tác</th>
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
