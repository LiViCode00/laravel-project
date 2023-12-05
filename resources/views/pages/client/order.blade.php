@php
    use Carbon\Carbon;
@endphp

@extends('layouts.clients.client')
@section('title')
    Chi tiết khóa học
@endsection

@section('content')
<section>
     <form action="{{ route('cart', ['student_id' => Auth::guard('student')->user()->id)]) }}">
        <div class="container mt-100">
          <table id="cart" class="table table-hover table-condensed">
                    <thead>
                    <tr>
                      <th style="width:50%; font-size: 20px;">Khóa học</th>
                      <th style="width:10%">Giá</th>
                      <th style="width:8%">Số lượng</th>
                      <th style="width:22%" class="text-center">Số tiền</th>
                      <th style="width:10%"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td data-th="Product">
                        <div class="row my-4">
                          <div class="col-sm-3 hidden-xs d-flex justify-content-center align-items-center"><img src="/{{$course->image_path}}" alt="img_course" class="img-responsive"/></div>
                          <div class="col-sm-9">
                            <h4 class="nomargin">{{$course->name}}</h4>
                            <p class="course-ctn">{{$course->detail}}</p>
                          </div>
                        </div>
                      </td>
                      <td data-th="Price "><p class="my-4"> <div class="price">
                                        <span><del style="color: gray;">{{number_format($course->price, 0, '', '.') }} đ </del> 
                                        {{number_format($course->sale_price, 0, '', '.')}} đ</span>
                                    </div></p></td>
                      <td data-th="Quantity my-4">
                        <input type="number" class="form-control text-center my-4" value="1">
                      </td>
                      <td data-th="Subtotal" class="text-center my-4"><p class="my-4"><span style="color: red;">{{number_format($course->sale_price, 0, '', '.')}} đ</span></p></td>
                      <td class="actions" data-th="">
                        <button class="btn btn-info btn-sm"><i class="fa fa-refresh"></i></button>
                        <button class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></button>								
                      </td>
                    </tr>
                  </tbody>
                  <tfoot>
                    <tr>
                      <td><a href="#" class="btn btn-warning p-3"><i class="fa fa-angle-left pr-3"></i>Tiếp tục xem khóa học</a></td>
                      <td colspan="2" class="hidden-xs"></td>
                      <td class="hidden-xs text-center pt-4"><b >Total: {{number_format($course->sale_price, 0, '', '.')}} đ</b></td>
                      <td><a href="#" class="btn btn-success btn-block p-3 ">Mua khóa học <i class="fa fa-angle-right"></i></a></td>
                    </tr>
                  </tfoot>
            </table>
        </div>
     </form>     

</section>
@endsection