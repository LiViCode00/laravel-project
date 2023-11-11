@extends('layouts.backend.backend')

@section('page_title')
    Cập nhật thông tin danh mục
@endsection



@section('content')
    <div class="form-wrapper">
        @if (session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif
        <form action={{ route('admin.category.post-edit', ['category' => $category]) }} method="post">
            @csrf
            <h4 style="text-align: center;margin-bottom: 20px">Thông tin danh mục </h4>
            <div class="form-row">
                <div class="form-group col-12 col-md-6">
                    <label for="">Tên danh mục</label>
                    <input type="text" name="name" id="" class="form-control"
                        value='{{ $category->name ? $category->name : old('name') }}'>
                    @error('name')
                        <span style="color: red">{{ $message }}</span>
                    @enderror
                </div>
               
               
            </div>
            <button style="margin: 30px 6px" class="btn btn-primary " type="submit">Cập nhật danh mục</button>
        </form>
    </div>
@endsection
