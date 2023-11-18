@extends('layouts.backend.backend')

@section('page_title')
    Thêm khóa học
@endsection



@section('content')
    <div class="form-wrapper">
        @if (session('error'))
           <div class="alert alert-danger">{{session('error')}}</div>
        @endif
        <form action={{ route('admin.course.post-add') }} method="post">
            @csrf
            <h4 style="text-align: center;margin-bottom: 20px">Thông tin khóa học</h4>
            <div class="form-row">
                <div class="form-group col-12 col-md-6">
                    <label for="">Tên khóa học</label>
                    <input type="text" name="name" id="" class="form-control" value={{ old('name') }}>
                    @error('name')
                        <span style="color: red">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group col-12 col-md-6">
                    <label for="">Danh mục</label>

                    <select class="form-select form-control" name="category" aria-label="Default select example">
                        <option value=0 {{ old('category') == 0 ? 'selected' : '' }}>Vui lòng chọn nhóm</option>
                        @if ($categories)
                            @foreach ($categories as $item)
                                <option value={{ $item->id }} {{ old('category') == $item->id ? 'selected' : '' }} >{{ $item->name }}</option>
                            @endforeach
                        @endif
                    </select>
                    @error('category')
                    <span style="color: red">{{ $message }}</span>
                @enderror

                </div>
                <div class="form-group col-12 col-md-6">
                    <label for="">Mật khẩu</label>
                    <input type="password" name="password" id="" class="form-control" value={{ old('password') }}>
                    @error('password')
                        <span style="color: red">{{ $message }}</span>
                    @enderror
                </div>
           
                <button style="margin: 30px 6px" class="btn btn-primary " type="submit">Thêm khóa học</button>
            </div>
        </form>
    </div>
@endsection
