@extends('layouts.backend.backend')
@section('page_title')
    Danh sách người dùng
@endsection

{{-- <html>
    <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
    <!-- DataTables -->
    <link rel="stylesheet" href="{{asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
</html> --}}

@section('content')
    <div class="card">
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        <div class="d-flex align-items-center card-header">
            <h3 class="card-title">Danh sách người dùng</h3>
            <a href={{ route('admin.user.add') }}> <button class="btn btn-primary">Thêm mới</button></a>
        </div>

        <!-- /.card-header -->
        <div class="card-body">
            <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                <div class="row">

                    <div class="col-sm-12 col-md-6">
                        <div id="example1_filter" class=" dataTables_filter">
                            <label class="d-flex justify-content-center align-items-center">
                                Search:
                                <input style="margin: 0 8px" type="search" class="form-control form-control-sm"
                                    placeholder="" aria-controls="example1">
                                <select style="margin: 0 8px" class="form-select form-control form-control-sm"
                                    aria-label="Default select example">
                                    <option value="0" selected>Tìm bằng tất cả</option>
                                    <option value="1">Tìm bằng Họ tên</option>
                                    <option value="2">Tìm bằng email</option>
                                    <option value="3">Tìm bằng Nhóm</option>
                                </select>
                                <button class="btn btn-primary btn-sm">Tìm </button>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <table id="example1" class="table table-bordered table-striped dataTable dtr-inline"
                            aria-describedby="example1_info">
                            <thead>

                                <tr>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                        colspan="1" aria-label="Checkbox">
                                        <input type="checkbox" id="selectAll">
                                    </th>
                                    <th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1"
                                        colspan="1" aria-label="Rendering engine: activate to sort column descending"
                                        aria-sort="ascending" style="">
                                        ID</th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                        colspan="1" aria-label="Browser: activate to sort column ascending">Họ tên</th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                        colspan="1" aria-label="Browser: activate to sort column ascending">Nhóm</th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                        colspan="1" aria-label="Platform(s): activate to sort column ascending"
                                        style="">Email</th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                        colspan="1" aria-label="Engine version: activate to sort column ascending">
                                        Created at</th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                        colspan="1" aria-label="CSS grade: activate to sort column ascending"
                                        style="">Updated at</th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                        colspan="1" aria-label="CSS grade: activate to sort column ascending"
                                        style="">Hành động</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($users as $user)
                                    <tr class=''>
                                        <td class="sorting_1 dtr-control" tabindex="0" style="">
                                            <input type="checkbox" class="userCheckbox" value="{{ $user->id }}">
                                        </td>

                                        <td class="sorting_1 dtr-control" tabindex="0" style="">

                                            {{ $user->id }}
                                        </td>
                                        <td class="">{{ $user->name }}</td>

                                        <td style="">
                                            {{ $user->group->name }}
                                        </td>
                                        <td>{{ $user->email }}</td>

                                        <td style="">{{ $user->created_at }}</td>
                                        <td style="">{{ $user->updated_at }}</td>
                                        <td>

                                            <a href={{ route('admin.user.profile', ['user' => $user]) }}><button
                                                    class="btn btn-primary btn-sm">Xem</button></a>
                                            <a href={{ route('admin.user.edit', ['user' => $user]) }}> <button
                                                    class="btn btn-info btn-sm">Sửa</button></a>
                                            <a href=""><button class="btn btn-danger btn-sm">Xóa</button></a>

                                        </td>
                                    </tr>
                                @endforeach



                            </tbody>

                        </table>
                    </div>
                </div>
                <div class="row">

                    <div class="col-sm-12 col-md-5">
                        <div class="dataTables_info" id="example1_info" role="status" aria-live="polite">Hiển thị 
                            {{ $users->firstItem() }} - {{ $users->lastItem() }} / {{ $users->total() }} người dùng.
                        </div>
                    </div>



                    {!! $users->links() !!}
                </div>
            </div>
        </div>
        <!-- /.card-body -->
    </div>
    {{-- @foreach ($users as $user)
            {{ $user->name }}
        @endforeach
        {!! $users->links() !!} --}}
@endsection
