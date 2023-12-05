@extends('layouts.clients.client')
@section('title')
    Viết bài post
@endsection

@section('content')
        <form action="{{ route('store-post') }}" method="POST">
            <div class="container">
                <div class="row mt-100">
                    <div class="col-lg-12">
                        <div class="mb-2">Chọn thể loại <span style="color: red;">(*) </span>:</div>
                        <select name="category_id" class="form-select" aria-label="Default select example">
                            <option selected>Chọn thể loại phù hợp với bài viết</option>
                            @foreach($categories as $cate)
                            <option value="{{$cate->id}}">{{$cate->name}}</option>
                            @endforeach
                        </select>
                    </div>  
                </div>
                <div class="row mt-5">
                    <div class="col-lg-12">
                        <div class="mb-2">Title <span style="color: red;">(*) </span>:</div>
                        <input class="form-title" type="text" placeholder="Nhập title" aria-label="default input example">
                    </div>

                </div>
                <div class="row mt-5">
                    <div class="col-lg-12">
                        <div class="mb-2">Nội dung <span style="color: red;">(*) </span>:</div>
                        <textarea id="editor">
                            Viết bài post ở đây 
                        </textarea>

                          <!-- Thêm trường ẩn cho title -->
                        <input type="hidden" name="title" id="postTitle" value="">

                        <!-- Thêm trường ẩn cho image_paths -->
                        <input type="hidden" name="image_paths" id="postImagePaths" value="">

                        <div style="float: right;"><button type="submit" class="btn-phu mt-5" style=" border: 1px solod">Đăng bài</button></div>
                                
                    </div>
                </div>
            </div>
       </form>


        <script>
            var editor = CKEDITOR.replace( 'editor' );
         </script>

@endsection