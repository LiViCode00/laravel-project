@extends('layouts.backend.backend')

@section('page_title')
    Thêm người dùng
@endsection



@section('content')
    <div class="form-wrapper">
        @if (session('error'))
           <div class="alert alert-danger">{{session('error')}}</div>
        @endif
        <form action={{ route('admin.user.post-add') }} method="post">
            @csrf
            <h4 style="text-align: center;margin-bottom: 20px">Thông tin người dùng</h4>
            <div class="form-row">
                <div class="form-group col-12 col-md-6">
                    <label for="">Họ tên</label>
                    <input type="text" name="name" id="" class="form-control" value={{ old('name') }}>
                    @error('name')
                        <span style="color: red">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group col-12 col-md-6">
                    <label for="">Email</label>
                    <input type="text" name="email" id="" class="form-control" value={{ old('email') }}>
                    @error('email')
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
                <div class="form-group col-12 col-md-6">
                    <label for="">Nhóm</label>

                    <select class="form-select form-control" name="group" aria-label="Default select example">
                        <option value=0 {{ old('group') == 0 ? 'selected' : '' }}>Vui lòng chọn nhóm</option>
                        @if ($groups)
                            @foreach ($groups as $item)
                                <option value={{ $item->id }} {{ old('group') == $item->id ? 'selected' : '' }} >{{ $item->name }}</option>
                            @endforeach
                        @endif
                    </select>
                    @error('group')
                    <span style="color: red">{{ $message }}</span>
                @enderror

                </div>
                <button style="margin: 30px 6px" class="btn btn-primary " type="submit">Thêm người dùng</button>
            </div>
        </form>
    </div>
@endsection
