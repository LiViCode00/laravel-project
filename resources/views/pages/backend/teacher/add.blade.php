@extends('layouts.backend.backend')

@section('page_title')
    Thêm giáo viên
@endsection



@section('content')
    <div class="form-wrapper">
        @if (session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif
        <form action={{ route('admin.teacher.post-add') }} method="post" enctype="multipart/form-data">
            @csrf
            <h4 style="text-align: center;margin-bottom: 20px">Thông tin giáo viên</h4>
            <div class="form-row">
                <div class="form-group col-12 col-md-6">
                    <label for="">Họ tên</label>
                    <input type="text" name="name" id="" class="form-control" value='{{ old('name') }}'>
                    @error('name')
                        <span style="color: red">{{ $message }}</span>
                    @enderror
                </div>
                
                <div class="form-group col-12 col-md-6">
                    <label for="">Mô tả</label>
                    <input type="text" name="description" id="" class="form-control"
                        value='{{ old('description') }}'>
                    @error('description')
                        <span style="color: red">{{ $message }}</span>
                    @enderror
                </div>
              
                <div class="form-group col-12 col-md-6">
                    <label for="">Hình ảnh</label>
                    <br>

                    <input type="file" name="image" accept="image/*">
                    @error('image')
                        <span style="color: red">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group col-12 col-md-6">
                    <label for="">Kinh nghiệm</label>
                    <input type="text" name="exp" id="" class="form-control" value='{{ old('exp') }}'>

                    @error('exp')
                        <span style="color: red">{{ $message }}</span>
                    @enderror

                </div>
                <button style="margin: 30px 6px" class="btn btn-primary " type="submit">Thêm giáo viên</button>
            </div>
        </form>
    </div>
@endsection
