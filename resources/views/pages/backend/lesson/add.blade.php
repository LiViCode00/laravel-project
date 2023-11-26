@extends('layouts.backend.backend')

@section('page_title')
    Thêm bài giảng
@endsection



@section('content')
    <div class="form-wrapper">
        @if (session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif
        <form action={{ route('admin.course.post-add') }} method="post" enctype="multipart/form-data">
            @csrf
            <h4 style="text-align: center;margin-bottom: 20px">Thông tin bài giảng</h4>
            <div class="form-row">
                <div class="form-group col-12 col-md-6">
                    <label for="">Tên bài giảng</label>
                    <input type="text" name="name" id="" class="form-control" value={{ old('name') }}>
                    @error('name')
                        <span style="color: red">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group col-12 col-md-6">
                    <label for="">Mô tả</label>

                    <textarea rows="8" type="text" name="detail" id="" class="form-control">{{ old('detail') }}</textarea>
                    @error('detail')
                        <span style="color: red">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group col-12 col-md-6">
                    <label for="">Tài liệu</label>
                    <br>

                    <input type="file" name="doc">
                    @error('doc')
                        <span style="color: red">{{ $message }}</span>
                    @enderror
                </div>
               <br>
                <div class="form-group col-12 col-md-6">
                    <label for="">Video bài giảng</label>
                   
                    <br>
                    <input type="file" name="videos[]" multiple accept="video/*">
                    @error('videos.*')
                        <span style="color: red">{{ $message }}</span>
                    @enderror
                </div>




                <button style="margin: 30px 6px;" class="btn btn-primary " type="submit">Thêm bài giảng</button>
            </div>
        </form>
    </div>
@endsection
