@extends('layouts.backend.backend')
@section('page_title')
    Danh sách đánh giá
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
            <h3 class="card-title">Danh sách đánh giá</h3>
            <div class="action-header">

            </div>
        </div>

        <!-- /.card-header -->
        <div class="card-body">
            <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                <div class="row">

                    <div class="col-sm-12 col-md-6">
                        <div id="example1_filter" class=" dataTables_filter">
                            <form action="{{ route('admin.review.find-review') }}" method="review"
                                class="d-flex align-items-center">
                                @csrf
                                <label class="d-flex justify-content-center align-items-center">


                                    <select name="orderBy" style="margin: 0 4px"
                                        class="form-select form-control form-control-sm"
                                        aria-label="Default select example">
                                        <option value=0 >Sắp xếp</option>
                                        <option value=1 >ID ASC</option>
                                        <option value=2 >ID DESC</option>
                                        <option value=3 >Name ASC</option>
                                        <option value=4 >Name DESC</option>

                                    </select>
                                    <select name="category" style="margin: 0 4px"
                                        class="form-select form-control form-control-sm"
                                        aria-label="Default select example">
                                        <option value=0 >Danh mục</option>
                                        <option value=1 >Khóa học</option>
                                        <option value=2 >Giảng viên</option>
                                        <option value=3 >Tin tức</option>
                                        <option value=4 >Bài học</option>
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

                 

                </div>
                <div class="row">
                    <div id="review_table" class="col-sm-12">
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
                                        aria-label="Browser: activate to sort column ascending">Đánh giá</th>

                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                        colspan="1" aria-label="Platform(s): activate to sort column ascending"
                                        style="">Người đăng</th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                        colspan="1" aria-label="Platform(s): activate to sort column ascending"
                                        style="">Khóa học</th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                        colspan="1" aria-label="Platform(s): activate to sort column ascending"
                                        style="">Sao</th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                        colspan="1" aria-label="Platform(s): activate to sort column ascending"
                                        style="">Date</th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                        colspan="1" aria-label="Platform(s): activate to sort column ascending"
                                        style="">Status</th>

                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                        colspan="1" aria-label="CSS grade: activate to sort column ascending"
                                        style="">Hành động</th>


                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($reviews as $review)
                                    <tr class=''>


                                        <td class="sorting_1 dtr-control" tabindex="0" style="">
                                            <span class="badge badge-success">

                                                {{ $review->id }}
                                            </span>
                                        </td>
                                        <td class="">{{ $review->comment }}</td>

                                        <td style="">
                                            <a href="">
                                                <p>{{ $review->student->name }}</p>
                                            </a>
                                        </td>
                                        <td> <a href="">
                                                <p>{{ $review->course->name }}</p>
                                            </a>
                                        </td>

                                        <td style="">
                                            {{$review->stars}}

                                        </td>
                                        <td style="">
                                            {{$review->created_at}}

                                        </td>
                                        <td>
                                            <span class="badge badge-success">ON</span>
                                        </td>

                                        <td style="width: 15%">

                                            <a style="margin: 0 4px"
                                                href='{{ route('admin.review.detail', ['review' => $review]) }}'>
                                                <span style="border-radius: 2px" title="Link" type='button'
                                                    class="btn btn-flat btn-sm btn-info">
                                                    <i class="fas fa-external-link-alt    "></i>
                                                </span>
                                            </a>

                                         

                                            <a style="margin: 0 4px; border-radius: 4px"
                                                href='{{ route('admin.review.delete', ['review' => $review]) }}'>
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
                            {{ $reviews->firstItem() }} - {{ $reviews->lastItem() }} / {{ $reviews->total() }} người
                            dùng.
                        </div>
                    </div>
                    {!! $reviews->links() !!}
                </div>
            </div>
        </div>
        <!-- /.card-body -->
    </div>
    {{-- @foreach ($reviews as $review)
            {{ $review->name }}
        @endforeach
        {!! $reviews->links() !!} --}}
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
