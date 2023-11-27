@extends('layouts.backend.backend')
@section('page_title')
    Danh sách người dùng
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
            <h3 class="card-title">Danh sách người dùng</h3>

        </div>

        <!-- /.card-header -->
        <div class="card-body">
            <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                <div class="row">

                    <div class="col-sm-12 col-md-6">
                        <div id="example1_filter" class=" dataTables_filter">
                            <form action="{{ route('admin.user.find-user') }}" method="POST"
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
                                    <select name="group" style="margin: 0 4px"
                                        class="form-select form-control form-control-sm"
                                        aria-label="Default select example">
                                        <option value=0 {{ old('group') == 0 ? 'selected' : '' }}>Nhóm</option>
                                        @if ($groups)
                                            @foreach ($groups as $item)
                                                <option value={{ $item->id }}
                                                    {{ old('group') == $item->id ? 'selected' : '' }}>{{ $item->name }}
                                                </option>
                                            @endforeach
                                        @endif
                                    </select>
                                    <input name="search_key" style="margin: 0 4px" type="search"
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
                        <a href={{ route('admin.user.add') }}> <button
                                style="border: none;float: right;margin-bottom: 16px" class="btn-flat btn-lg btn-success"><i
                                    class="fa fa-plus" aria-hidden="true"></i></button></a>

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
                                    <th style="width: 10%" class="sorting" tabindex="0" aria-controls="example1"
                                        rowspan="1" colspan="1"
                                        aria-label="Browser: activate to sort column ascending">Hình ảnh</th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                        colspan="1" aria-label="Browser: activate to sort column ascending">Nhóm</th>
                                    <th style="width: 15%" class="sorting" tabindex="0" aria-controls="example1"
                                        rowspan="1" colspan="1"
                                        aria-label="Platform(s): activate to sort column ascending" style="">Email
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                        colspan="1" aria-label="CSS grade: activate to sort column ascending"
                                        style="">Status</th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                        colspan="1" aria-label="Engine version: activate to sort column ascending">
                                        Created at</th>
                                    
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                        colspan="1" aria-label="CSS grade: activate to sort column ascending"
                                        style="">Hành động</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr class=''>

                                        <td class="sorting_1 dtr-control" tabindex="0" style="">

                                            {{ $user->id }}
                                        </td>
                                        <td class="">{{ $user->name }}</td>
                                        <td class="">
                                            <img style="width: 100%" src="{{ asset('storage/' . $user->image_path) }}"
                                                alt="">
                                        </td>

                                        <td style="">
                                            {{ $user->group->name }}
                                        </td>
                                        <td>{{ $user->email }}</td>

                                        <td style=""></td>
                                        <td style="">{{ $user->created_at }}</td>
                                        <td>
                                            @if ($user->trashed())
                                                <a href=>


                                                    <a style="margin: 0 4px"
                                                        href='{{ route('admin.user.restore', $user->id) }}'>
                                                        <span style="border-radius: 2px" title="Restore" type='button'
                                                            class="btn btn-flat btn-sm btn-success">
                                                            <i class="fa fa-window-restore" aria-hidden="true"></i>
                                                        </span>
                                                    </a>

                                                    <a style="margin: 0 4px"
                                                        href='{{ route('admin.user.force-delete', $user->id) }}'>
                                                        <span style="border-radius: 2px" title="Force Delete"
                                                            type='button' class="btn btn-flat btn-sm btn-warning">
                                                            <i class="fas fa-trash-alt    "></i>
                                                        </span>
                                                    </a>

                                                </a>
                                            @else
                                                <a style="margin: 0 4px"
                                                    href='{{ route('admin.user.profile', ['user' => $user]) }}'>
                                                    <span style="border-radius: 2px" title="Link" type='button'
                                                        class="btn btn-flat btn-sm btn-info">
                                                        <i class="fas fa-external-link-alt    "></i>
                                                    </span>
                                                </a>

                                                <a style="margin: 0 4px"
                                                    href='{{ route('admin.user.edit', ['user' => $user]) }}'>
                                                    <span style="border-radius: 2px" title="Edit" type='button'
                                                        class="btn btn-flat btn-sm btn-primary">
                                                        <i class="fas fa-edit    "></i>
                                                    </span>
                                                </a>

                                                <a style="margin: 0 4px; border-radius: 4px"
                                                    href='{{ route('admin.user.delete', ['user' => $user]) }}'>
                                                    <span style="border-radius: 2px" title="Delete" type='button'
                                                        onclick="return confirmDelete() "
                                                        class="btn btn-flat btn-sm btn-danger">
                                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                                    </span></a>
                                                </a>
                                            @endif
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
