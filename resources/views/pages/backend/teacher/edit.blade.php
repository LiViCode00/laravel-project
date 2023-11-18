@extends('layouts.backend.backend')

@section('page_title')
    Cập nhật thông tin giáo viên
@endsection



@section('content')
    <div class="form-wrapper">
        @if (session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif
        <form action={{ route('admin.teacher.post-edit', $teacher) }} method="post" enctype="multipart/form-data">
            @csrf
            <h4 style="text-align: center;margin-bottom: 20px"> Cập nhật thông tin giáo viên</h4>
            <div class="form-row">
                <div class="form-group col-12 col-md-6">
                    <label for="">Họ tên</label>
                    <input type="text" name="name" id="" class="form-control" value='{{ $teacher->name ?? old('name') }}'>
                    @error('name')
                        <span style="color: red">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group col-12 col-md-6">
                    <label for="">Email</label>
                    <input readonly type="text" name="email" id="" class="form-control"
                        value='{{ $teacher->email ?? old('email') }}'>
                    @error('email')
                        <span style="color: red">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group col-12 col-md-6">
                    <label for="">Password</label>
                    <input readonly type="password" name="password" id="" class="form-control"
                        value=''>
                    @error('password')
                        <span style="color: red">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group col-12 col-md-6">
                    <label for="">Mô tả</label>
                    <textarea rows="5" type="textarea" name="description" id="" class="form-control"
                    
                        value=''>{{ $teacher->description ?? old('description') }}</textarea>

                    @error('description')
                        <span style="color: red">{{ $message }}</span>
                    @enderror

                </div>
               
                <div class="form-group col-12 col-md-6">
                    <label for="">Hình ảnh</label>
                    <br>

                    <input style="margin-top: 4px" type="file" name="image" accept="image/*">
                    @error('image')
                        <span style="color: red">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group col-12 col-md-6">
                    <label for="">Kinh nghiệm</label>
                    <input type="text" name="exp" id="" class="form-control" value='{{ $teacher->exp ?? old('exp') }}'>

                    @error('exp')
                        <span style="color: red">{{ $message }}</span>
                    @enderror

                </div>
                <button style="margin: 30px 6px" class="btn btn-primary " type="submit">Cập nhật</button>
            </div>
        </form>
    </div>
@endsection
