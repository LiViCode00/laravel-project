@extends('layouts.backend.backend')
@section('page_title')
    Danh sách danh mục
@endsection


@section('content')
    <div class="card">
        @if (session('success'))
            <div style="margin: 0 20px" class="alert alert-success">{{ session('success') }}</div>
        @endif
        @if (session('error'))
            <div style="margin: 0 20px" class="alert alert-danger">{{ session('error') }}</div>
        @endif

        <div class="d-flex align-items-center card-header">
            <h3 class="card-title">Danh sách danh mục</h3>
            <div class="action-header">
                <a href='{{ route('admin.category.add') }}'> <button class="btn btn-primary">Thêm mới</button></a>
            </div>
        </div>

        <!-- /.card-header -->
        <div class="card-body">
            <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                <div class="row">

                    <div class="col-sm-12 col-md-8">
                        <div id="example1_filter" class=" dataTables_filter">

                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <table id="example1" class="table table-bordered table-striped dataTable dtr-inline"
                            aria-describedby="example1_info">
                            <thead>
                                <tr>
                                    <th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1"
                                        colspan="1" aria-label="Rendering engine: activate to sort column descending"
                                        aria-sort="ascending" style="">
                                        ID</th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                        colspan="1" aria-label="Browser: activate to sort column ascending">Tên danh mục
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                    colspan="1" aria-label="Browser: activate to sort column ascending">Tạo bởi</th>
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
                                @foreach ($categories as $category)
                                    <tr class=''>

                                        <td class="sorting_1 dtr-control" tabindex="0" style="">

                                            {{ $category->id }}
                                        </td>
                                        <td class="">{{ $category->name }}</td>
                                        <td>{{$category->admin->name}}</td>
                                        <td style="">{{ $category->created_at }}</td>
                                        <td style="">{{ $category->updated_at }}</td>
                                        <td>

                                            <a href='{{ route('admin.category.profile', ['category' => $category]) }}'><button
                                                    class="btn btn-primary btn-sm">Xem</button></a>
                                            <a href='{{ route('admin.category.edit', ['category' => $category]) }}'> <button
                                                    class="btn btn-info btn-sm">Sửa</button></a>
                                            <a href='{{ route('admin.category.delete', ['category' => $category]) }}'>
                                                <button onclick="return confirmDelete()"
                                                    class="btn btn-danger btn-sm">Xóa</button>
                                            </a>

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
                            {{ $categories->firstItem() }} - {{ $categories->lastItem() }} / {{ $categories->total() }}
                            người dùng.
                        </div>
                    </div>
                    {!! $categories->links() !!}
                </div>
            </div>
        </div>
        <!-- /.card-body -->
    </div>
    {{-- @foreach ($categories as $category)
            {{ $category->name }}
        @endforeach
        {!! $categories->links() !!} --}}
@endsection

<script>
    function confirmDelete() {

        var result = confirm("Bạn có chắc chắn muốn xóa không?");
        return result;
    }
</script>
