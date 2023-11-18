@extends('layouts.backend.backend')
@section('page_title')
    Danh sách giáo viên
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
            <h3 class="card-title">Danh sách giáo viên</h3>
            <div class="action-header">
                <a href={{ route('admin.teacher.add') }}> <button class="btn btn-primary">Thêm mới</button></a>
            </div>
        </div>

        <!-- /.card-header -->
        <div class="card-body">
            <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                <div class="row">

                    <div class="col-sm-12 col-md-8">
                        <div id="example1_filter" class=" dataTables_filter">
                            <form action="{{ route('admin.teacher.find-teacher') }}" method="POST"
                                class="d-flex align-items-center">
                                @csrf
                                <label class="d-flex justify-content-center align-items-center">
                                    Search:
                                    <input name="search_key" style="margin: 0 8px" type="search"
                                        class="form-control form-control-sm" placeholder="" aria-controls="example1"
                                        value="{{ old('search_key') }}">
                                </label>
                                <button type="submit" style="margin: 0 8px" class="btn btn-primary btn-sm">Tìm </button>
                            </form>
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
                                        colspan="1" aria-label="Browser: activate to sort column ascending">Họ tên</th>
                                    <th style="width: 15%" class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                        colspan="1" aria-label="Browser: activate to sort column ascending">Hình ảnh</th>
                                   
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                        colspan="1" aria-label="Browser: activate to sort column ascending">Kinh nghiệm
                                    </th>
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
                                @foreach ($teachers as $teacher)
                                    <tr class=''>

                                        <td class="sorting_1 dtr-control" tabindex="0" style="">

                                            {{ $teacher->id }}
                                        </td>
                                        <td class="">{{ $teacher->name }}</td>

                                        <td >
                                            <img style="width: 100%" src="{{ asset('storage/'.$teacher->image_path) }}" alt="">
                                        </td>
                                        
                                        <td>{{ $teacher->exp }}</td>

                                        <td style="">{{ $teacher->created_at }}</td>
                                        <td style="">{{ $teacher->updated_at }}</td>
                                        <td>
                                            <a href='{{ route('admin.teacher.profile', ['teacher' => $teacher]) }}'><button
                                                    class="btn btn-primary btn-sm">Xem</button></a>
                                            <a href='{{ route('admin.teacher.edit', ['teacher' => $teacher]) }}'> <button
                                                    class="btn btn-info btn-sm">Sửa</button></a>

                                            <a href='{{ route('admin.teacher.delete', ['teacher' => $teacher]) }}'>
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
                            {{ $teachers->firstItem() }} - {{ $teachers->lastItem() }} / {{ $teachers->total() }} giáo
                            viên.
                        </div>
                    </div>
                    {!! $teachers->links() !!}
                </div>
            </div>
        </div>
        <!-- /.card-body -->
    </div>
    {{-- @foreach ($teachers as $teacher)
            {{ $teacher->name }}
        @endforeach
        {!! $teachers->links() !!} --}}
@endsection

<script>
    function confirmDelete() {

        var result = confirm("Bạn có chắc chắn muốn xóa không?");
        return result;
    }

    function confirmRestore() {

        var result = confirm("Bạn có chắc chắn muốn khôi phục không?");
        return result;
    }
</script>
