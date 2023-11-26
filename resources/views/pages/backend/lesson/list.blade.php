@extends('layouts.backend.backend')
@section('page_title')
    Danh sách bài giảng
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
            <div style="margin: 0 20px" class="alert alert-success">{{ session('success') }}</div>
        @endif
        @if (session('error'))
            <div style="margin: 0 20px" class="alert alert-danger">{{ session('error') }}</div>
        @endif

        <div class="d-flex align-items-center card-header">
            <h3 class="card-title">Danh sách bài giảng</h3>
            <div class="action-header">
                <a href={{ route('admin.course.lesson.add') }}> <button class="btn btn-primary">Thêm mới</button></a>
            </div>
        </div>

        <!-- /.card-header -->
        <div class="card-body">
            <h2 style="text-align: center;margin-bottom: 12px;font-weight: 500">Khóa học {{ $course->name }}</h2>
            <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                <div class="row">

                    <div class="col-sm-12 col-md-8">
                        <div id="example1_filter" class=" dataTables_filter">
                            <form action="{{ route('admin.course.lesson.find-lesson') }}" method="POST"
                                class="d-flex align-items-center">
                                @csrf
                                <label class="d-flex justify-content-center align-items-center">
                                    Search:
                                    <input name="search_key" style="margin: 0 8px" type="search"
                                        class="form-control form-control-sm" placeholder="" aria-controls="example1"
                                        value="{{ old('search_key') }}">

                                    {{-- <select name="category" style="margin: 0 8px" class="form-select form-control form-control-sm"
                                        aria-label="Default select example">
                                        <option value=0 {{ old('category') == 0 ? 'selected' : '' }}>Danh mục</option>
                                        @if ($categories)
                                            @foreach ($categories as $item)
                                                <option value={{ $item->id }}
                                                    {{ old('category') == $item->id ? 'selected' : '' }}>{{ $item->name }}
                                                </option>
                                            @endforeach
                                        @endif
                                    </select> --}}

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
                                    <th style="width: 20%" class="sorting" tabindex="0" aria-controls="example1"
                                        rowspan="1" colspan="1"
                                        aria-label="Browser: activate to sort column ascending">Tên bài giảng</th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                        colspan="1" aria-label="Platform(s): activate to sort column ascending"
                                        style="">Vị trí</th>
                                    <th style="width: 15%" class="sorting" tabindex="0" aria-controls="example1"
                                        rowspan="1" colspan="1"
                                        aria-label="Browser: activate to sort column ascending">Chi tiết</th>

                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                        colspan="1" aria-label="Platform(s): activate to sort column ascending"
                                        style="">Thời lượng</th>

                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                        colspan="1" aria-label="Engine version: activate to sort column ascending">
                                        Lượt xem</th>

                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                        colspan="1" aria-label="CSS grade: activate to sort column ascending"
                                        style="">Hành động</th>


                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($lessons as $lesson)
                                    <tr class=''>

                                        <td class="sorting_1 dtr-control" tabindex="0" style="">

                                            {{ $lesson->id }}
                                        </td>
                                        <td class="lesson-cell">
                                            <p class="lesson" style="font-weight: 600"> {{ $lesson->name }}
                                            <div class="list-video">
                                               @foreach ($lesson->videos as $item)
                                                   <div>
                                                    
                                                    <a href="">{{$item->name}}</a>
                                                   
                                                   </div>
                                               @endforeach
                                            </div>
                                            </p>

                                        </td>

                                        <td style="">
                                            {{ $lesson->position }}

                                        </td>
                                        <td>{{ $lesson->description }}</td>

                                        <td style="">{{ $lesson->durations }}</td>

                                        <td style="">{{ $lesson->views }}</td>

                                        <td>


                                            <a href='{{ route('admin.course.lesson.manage', ['lesson' => $lesson]) }}'><button
                                                    class="btn btn-info btn-sm">Quản lý</button></a>


                                            <a href='{{ route('admin.course.lesson.delete', ['lesson' => $lesson]) }}'>
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
                            {{ $lessons->firstItem() }} - {{ $lessons->lastItem() }} / {{ $lessons->total() }} bài giảng.
                        </div>
                    </div>
                    {!! $lessons->links() !!}
                </div>
            </div>
        </div>
        <!-- /.card-body -->
    </div>
    {{-- @foreach ($lessons as $lesson)
            {{ $lesson->name }}
        @endforeach
        {!! $lessons->links() !!} --}}
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

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function() {
        $('.lesson-name-cell').click(function() {
            const listVideo = $(this).find('.list-video');
            if (listVideo.is(':hidden')) {
                listVideo.css('display', 'block').animate({maxHeight: '300px'}, 300);
            } else {
                listVideo.animate({maxHeight: '0'}, 300, function() {
                    $(this).css('display', 'none');
                });
            }
        });
    });
</script>


