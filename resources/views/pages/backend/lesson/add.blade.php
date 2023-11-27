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
            <div class="form-row form-add">
                <div class="form-group col-12 ">
                    <label for="">Tên bài giảng</label>
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-pencil-alt"></i></span>
                        <input type="text" name="name" id="" class="form-control" value={{ old('name') }}>
                    </div>
                    @error('name')
                        <span style="color: red">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group col-12 ">
                    <label for="">Mô tả</label>
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-pencil-alt"></i></span>
                        <textarea rows="8" type="text" name="detail" id="lesson-decripsion" class="form-control">{{ old('detail') }}</textarea>
                    </div>
                    @error('detail')
                        <span style="color: red">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group col-12 ">
                    <label for="">Tài liệu</label>
                    <br>

                    <input type="file" name="doc">
                    @error('doc')
                        <span style="color: red">{{ $message }}</span>
                    @enderror
                </div>
                <br>
                <div class="form-group col-12 ">
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

<script>
      ClassicEditor
            .create(document.querySelector('#lesson-decripsion'))
            .catch(error => {
                console.error(error);
            });
</script>
