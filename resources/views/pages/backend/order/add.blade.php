@extends('layouts.backend.backend')

@section('page_title')
    Tạo đơn hàng mới
@endsection

<meta name="csrf-token" content="{{ csrf_token() }}">

@section('content')
    <div style="overflow: auto" class="form-wrapper">
        @if (session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif
        <form>


            <h4 style="text-align: center;margin-bottom: 20px"> Tạo đơn hàng mới</h4>
            <div class="form-row form-add">

                <div class="form-group col-12 ">
                    <label for="">Học viên</label>
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-pencil-alt"></i></span>

                        <select id="student" class="form-select form-control" name="student"
                            aria-label="Default select example">
                            <option value=0 {{ old('student') == 0 ? 'selected' : '' }}>Vui lòng chọn học viên</option>
                            @if ($students)
                                @foreach ($students as $item)
                                    <option value={{ $item->id }} {{ old('student') == $item->id ? 'selected' : '' }}>
                                        {{ $item->email }}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                    @error('student')
                        <span style="color: red">{{ $message }}</span>
                    @enderror

                </div>

                <div class="form-group col-12 ">
                    <label for="">Họ tên</label>

                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-pencil-alt"></i></span>
                        <input readonly type="text" name="name" id="name" class="form-control"
                            value='{{ old('name') }}'>

                    </div>

                    @error('name')
                        <span style="color: red">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group col-12 ">
                    <label for="">Email</label>
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-pencil-alt"></i></span>
                        <input readonly type="text" name="email" id="email" class="form-control"
                            value='{{ old('email') }}'>
                    </div>
                    @error('email')
                        <span style="color: red">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group col-12 ">
                    <label for="">Địa chỉ</label>

                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-pencil-alt"></i></span>
                        <input readonly type="text" name="address" id="address" class="form-control"
                            value='{{ old('address') }}'>

                    </div>

                    @error('address')
                        <span style="color: red">{{ $message }}</span>
                    @enderror
                </div>




                <input type="hidden" name="_token" value="hCoCbHx4UwAwxIAGrmvthVyGla4DND93Ofrtwdm1"> <input type="hidden"
                    name="order_id" value="O-1qkBx-AkkTm">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card collapsed-card">
                            <div class="table-responsive">
                                <table id="myTable" class="table table-hover box-body text-wrap table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Tên khóa học</th>

                                            <th class="product_price">Giá</th>
                                            <th class="product_qty">Số lượng</th>
                                            <th class="product_total">Tổng tiền</th>
                                            <th>Action</th>


                                        </tr>
                                    </thead>
                                    <tbody>

                                        {{-- @foreach ($order->details as $item)
                                                <tr>

                                                    <td>

                                                        {{ App\Models\Course::find($item->course_id)->name }}
                                                    </td>

                                                    <td class="product_price"><a href="#"
                                                            class="edit-item-detail editable editable-click"
                                                            data-value="32.00" data-name="price" data-type="text"
                                                            min="0"
                                                            data-pk="9aaec53a-b00e-4b80-b3d7-05939575b830"
                                                            data-url="https://demo.s-cart.org/sc_admin/order/edit_item"
                                                            data-title="Price">32.00</a></td>
                                                    <td class="product_qty">x <a href="#"
                                                            class="edit-item-detail editable editable-click"
                                                            data-value="1" data-name="qty" data-type="number"
                                                            min="0"
                                                            data-pk="9aaec53a-b00e-4b80-b3d7-05939575b830"
                                                            data-url="https://demo.s-cart.org/sc_admin/order/edit_item"
                                                            data-title="quantity"> 1</a></td>
                                                    <td
                                                        class="product_total item_id_9aaec53a-b00e-4b80-b3d7-05939575b830">
                                                        $32</td>

                                                    <td>
                                                        <span
                                                            onclick="deleteItem(9aaec53a-b00e-4b80-b3d7-05939575b830);"
                                                            class="btn btn-danger btn-xs" data-title="Delete"><i
                                                                class="fa fa-trash" aria-hidden="true"></i></span>
                                                    </td>
                                                </tr>
                                            @endforeach --}}

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="card collapsed-card">



                            <tbody>

                                <select id="course" class="form-select form-control" name="course"
                                    aria-label="Default select example" onchange="updateSelectedCourse(this.value)">
                                    <option value=0 {{ old('course') == 0 ? 'selected' : '' }}>Khóa học
                                    </option>
                                    @if ($courses)
                                        @foreach ($courses as $item)
                                            <option value={{ $item->id }}
                                                {{ old('course') == $item->id ? 'selected' : '' }}>
                                                {{ $item->name }}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </tbody>


                        </div>
                    </div>
                    <div class="col-md-4">
                        <button style="margin-left: 20px;float: right" onclick="addNewRow()" type="button"
                            class="btn btn-flat btn-success" id="add-item-button" title="Add new"><i class="fa fa-plus"></i>
                            Thêm mới khóa học</button>
                        &nbsp;&nbsp;&nbsp;<button style="display: none; margin-right: 50px" type="button"
                            class="btn btn-flat btn-warning" id="add-item-button-save" title="Save"><i
                                class="fa fa-save"></i> Save</button>
                    </div>
                </div>



                <button id="btn_order" style="margin: 30px 6px;text-align: center" class="btn btn-primary ">Thêm đơn
                    hàng</button>
            </div>
        </form>
    </div>
@endsection
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<script>
    $(document).ready(function() {
        $('#student').on('change', function(event) {
            event.preventDefault();
            var student_id = $(this).val();
            var csrfToken = $('meta[name="csrf-token"]').attr('content');

            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: ' {{ route('admin.order.getStudent') }}',
                type: 'POST',
                data: {
                    id: student_id,
                    _token: csrfToken
                },
                success: function(data) {

                    //console.log(data.data.name);

                    $('#name').val(data.data.name || '');
                    $('#email').val(data.data.email || '');
                    $('#address').val(data.data.address || '');
                },
                error: function(error) {
                    console.error('Error:', error);
                },

            });

        });

        $('#btn_order').on('click', function(event) {
            event.preventDefault();
            var student_id = $('#student').val();

            $.ajax({
                url: '{{ route('admin.order.post-add') }}',
                method: 'POST',
                data: {
                    student_id : student_id,

                    _token: '{{ csrf_token() }}'
                },
                success: function(data) {

                    console.log(data);

                   
                },
                error: function(error) {
                    console.error('Error:', error);
                },

            });
        })




    });

    function addNewRow() {

        // Tạo một hàng mới
        var newRow = document.createElement("tr");


        var course_id = $('#course').val();
        if (course_id != 0) {
            var cell1 = document.createElement("td");
            var cell2 = document.createElement("td");
            var cell3 = document.createElement("td");
            var cell4 = document.createElement("td");
            var cell5 = document.createElement("td");
        }
        var csrfToken = $('meta[name="csrf-token"]').attr('content');

        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: ' {{ route('admin.order.getCourse') }}',
            type: 'POST',
            data: {
                id: course_id,
                _token: csrfToken
            },
            success: function(data) {
                console.log(data.data);
                cell1.textContent = data.data.name;
                cell2.textContent = data.data.price;
                cell3.textContent = 1;
                cell4.textContent = data.data.price;

                // Sử dụng innerHTML nếu nội dung chứa HTML, ngược lại sử dụng textContent
                cell5.innerHTML = `<span id="delete${data.data.id}" style="border-radius: 2px" title="Delete" type='button'
                    onclick="return confirmDelete('delete${data.data.id}')" class="btn btn-flat btn-sm btn-danger">
                    <i class="fa fa-trash" aria-hidden="true"></i>
                </span>`;

            },

            error: function(error) {
                console.error('Error:', error);
            },

        });

        newRow.appendChild(cell1);
        newRow.appendChild(cell2);
        newRow.appendChild(cell3);
        newRow.appendChild(cell4);
        newRow.appendChild(cell5);


        // Thêm hàng mới vào tbody của bảng
        document.querySelector("#myTable tbody").appendChild(newRow);
    }


    function confirmDelete(elementId) {
        if (confirm("Bạn muốn xóa khóa học khỏi đơn hàng này?")) {
            var row = document.getElementById(elementId).parentNode.parentNode;
            row.parentNode.removeChild(row);
        }
        return false; // Ngăn chặn sự kiện mặc định của nút (ví dụ: không chuyển trang).
    }
</script>
