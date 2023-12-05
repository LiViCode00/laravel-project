@extends('layouts.backend.backend')
@section('page_title')
    Danh sách bài viết
@endsection

{{-- <html>
    <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
    <!-- DataTables -->
    <link rel="stylesheet" href="{{asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
</html> --}}
<html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

</html>

@section('content')
    <div class="card">
        @if (session('success'))
            <div style="margin: 0 20px" class="alert alert-success">{{ session('success') }}</div>
        @endif
        @if (session('error'))
            <div style="margin: 0 20px" class="alert alert-danger">{{ session('error') }}</div>
        @endif

        <div class="d-flex align-items-center card-header">
            <h3 class="card-title">Danh sách bài viết</h3>
            <div class="action-header">

            </div>
        </div>

        <!-- /.card-header -->
        <div class="card-body">
            <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                <div class="row">

                    <div class="col-sm-12 col-md-6">
                        <div id="example1_filter" class=" dataTables_filter">
                            <form action="{{ route('admin.post.find-post') }}" method="POST"
                                class="d-flex align-items-center">
                                @csrf
                                <label class="d-flex justify-content-center align-items-center">


                                    <select name="orderBy" style="margin: 0 4px"
                                        class="form-select form-control form-control-sm"
                                        aria-label="Default select example">
                                        <option value=0 {{ old('orderBy') == 0 ? 'selected' : '' }}>Sắp xếp</option>
                                        <option value=1 {{ old('orderBy') == 0 ? 'selected' : '' }}>ID ASC</option>
                                        <option value=2 {{ old('orderBy') == 0 ? 'selected' : '' }}>ID DESC</option>
                                        <option value=3 {{ old('orderBy') == 0 ? 'selected' : '' }}>Name ASC</option>
                                        <option value=4 {{ old('orderBy') == 0 ? 'selected' : '' }}>Name DESC</option>

                                    </select>
                                    <select name="category" style="margin: 0 4px"
                                        class="form-select form-control form-control-sm"
                                        aria-label="Default select example">
                                        <option value=0 {{ old('category') == 0 ? 'selected' : '' }}>Danh mục</option>
                                        @if ($categories)
                                            @foreach ($categories as $item)
                                                <option value={{ $item->id }}
                                                    {{ old('category') == $item->id ? 'selected' : '' }}>
                                                    {{ $item->name }}
                                                </option>
                                            @endforeach
                                        @endif
                                    </select>
                                    <input style="margin: 0 4px" name="search_key" type="search"
                                        class="form-control form-control-sm" placeholder="Search key"
                                        aria-controls="example1" value="{{ old('search_key') }}">

                                </label>

                                <button title="Search" type="submit" class="btn btn-flat btn-info"
                                    style="border-radius: 4px;margin: 0 4px">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                </button>
                            </form>
                        </div>
                    </div>

                    <div class="col-12 col-md-6">
                        <a href={{ route('admin.user.post.write') }}> <button
                                style="border: none;float: right;margin-bottom: 16px" class="btn-flat btn-lg btn-success"><i
                                    class="fa fa-plus" aria-hidden="true"></i></button>
                        </a>

                    </div>



                </div>
                <div class="row">
                    <div id="post_table" class="col-sm-12">
                        <table id="example1" class="table table-bordered table-striped dataTable dtr-inline"
                            aria-describedby="example1_info">
                            <thead>
                                <tr>

                                    <th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1"
                                        colspan="1" aria-label="Rendering engine: activate to sort column descending"
                                        aria-sort="ascending" style="">
                                        ID</th>
                                    <th style="width: 20%" class="sorting" tabindex="0" aria-controls="example1"
                                        rowspan="1" colspan="1"
                                        aria-label="Browser: activate to sort column ascending">Tên bài viết</th>

                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                        colspan="1" aria-label="Platform(s): activate to sort column ascending"
                                        style="">Người đăng</th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                        colspan="1" aria-label="Platform(s): activate to sort column ascending"
                                        style="">Danh mục</th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                        colspan="1" aria-label="Platform(s): activate to sort column ascending"
                                        style="">Lượt xem</th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                        colspan="1" aria-label="Platform(s): activate to sort column ascending"
                                        style="">Status</th>

                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                        colspan="1" aria-label="CSS grade: activate to sort column ascending"
                                        style="">Hành động</th>


                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($posts as $post)
                                    <tr class=''>


                                        <td class="sorting_1 dtr-control" tabindex="0" style="">
                                            <span class="badge badge-success">

                                                {{ $post->id }}
                                            </span>
                                        </td>
                                        <td class="">{{ $post->title }}</td>

                                        <td style="">
                                            <a href="">
                                                <p>{{ $post->user->name }}</p>
                                            </a>


                                        </td>
                                        <td> <a href="">
                                                <p>{{ $post->category->name }}</p>
                                            </a>
                                        </td>

                                        <td style="">
                                            60

                                        </td>
                                        <td>
                                            <span class="badge badge-success">ON</span>
                                        </td>

                                        <td style="width: 15%">

                                            <a style="margin: 0 4px"
                                                href='{{ route('admin.post.detail', ['post' => $post]) }}'>
                                                <span style="border-radius: 2px" title="Link" type='button'
                                                    class="btn btn-flat btn-sm btn-info">
                                                    <i class="fas fa-external-link-alt    "></i>
                                                </span>
                                            </a>

                                            <a style="margin: 0 4px"
                                                href='{{ route('admin.post.edit', ['post' => $post]) }}'>
                                                <span style="border-radius: 2px" title="Edit" type='button'
                                                    class="btn btn-flat btn-sm btn-primary">
                                                    <i class="fas fa-edit    "></i>
                                                </span>
                                            </a>

                                            <a style="margin: 0 4px; border-radius: 4px"
                                                href='{{ route('admin.post.delete', ['post' => $post]) }}'>
                                                <span style="border-radius: 2px" title="Delete" type='button'
                                                    onclick="return confirmDelete() "
                                                    class="btn btn-flat btn-sm btn-danger">
                                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                                </span></a>
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
                            {{ $posts->firstItem() }} - {{ $posts->lastItem() }} / {{ $posts->total() }} người
                            dùng.
                        </div>
                    </div>
                    {!! $posts->links() !!}
                </div>
            </div>
        </div>
        <!-- /.card-body -->
    </div>
    {{-- @foreach ($posts as $post)
            {{ $post->name }}
        @endforeach
        {!! $posts->links() !!} --}}
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
