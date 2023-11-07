@extends('layouts.backend.backend')
@section('page_title')
    Thông tin cá nhân
@endsection


@section('content_title')
    Thông tin cá nhân
@endsection

@section('content')
    <section class="bg-light">
        <div class="container">


            <div class="row">

                <div class="col-lg-12 col-md-12 col-sm-12">
                    <!-- Row -->
                    @if (session('notice'))
                        <div class="notice alert alert-success alert-dismissible fade show">
                            <strong>{{ session('notice') }}</strong>
                        </div>
                    @endif
                    <div class="row wrapper-profile">
                        <div class="col-lg-12 col-md-12 col-sm-12">

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="dashboard_container">
                                        <div class="dashboard_container_header">
                                            <div class="dashboard_fl_1">
                                                <h4>Thông tin cá nhân</h4>
                                            </div>
                                        </div>
                                        <div class="dashboard_container_body p-4">

                                            <!-- Basic info -->
                                            <form action={{ route('admin.edit-profile',['admin' => Auth::guard('admin')->user()]) }}
                                                method="POST">
                                                @csrf
                                                <div class="submit-section">
                                                    <div class="form-row">
                                                        <div class="form-group col-md-12 ">
                                                            <label>Họ tên</label>
                                                            <input type="text" name="name" class="form-control"
                                                                value='{{Auth::guard('admin')->user()->name }}'>

                                                            @error('name')
                                                                <span style="color: red">{{ $message }}</span>
                                                            @enderror
                                                        </div>

                                                        <div class="form-group col-md-12 ">
                                                            <label>Email</label>
                                                            <input type="text" name="email" class="form-control"
                                                                value='{{Auth::guard('admin')->user()->email }}' readonly>
                                                        </div>

                                                        <div class="form-group col-md-12 ">
                                                            <label>Mật khẩu mới</label>
                                                            <input type="password" name="password" class="form-control">
                                                            @error('password')
                                                                <span style="color: red">{{ $message }}</span>
                                                            @enderror
                                                        </div>


                                                        <div class="form-group col-md-12">
                                                            <button class="btn btn-theme" type="submit">Cập nhật</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                            <!-- Basic info -->



                                        </div>

                                    </div>
                                </div>

                                
                            </div>

                        </div>


                        <!-- Basic info -->



                    </div>
                </div>
                <!-- /Row -->

            </div>
            <!-- Sidebar -->
        </div>
        </div>
    </section>
@endsection
