<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Group;
use App\Models\category;
use App\Models\Course;
use App\Models\Order;
use App\Models\Student;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class OrderController extends Controller
{
    public function add()
    {
        $students = Student::all();
        $courses = Course::all();
        return view('pages.backend.order.add', compact(['students', 'courses']));
    }
    public function postAdd(Request $request, Order $order)
    {
        $request->validate(
            [
                'student' => ['required', 'integer', function ($attribute, $value, $fail) {
                    if ($value === 0) {
                        return $fail('Vui lòng chọn học viên');
                    }
                }]
            ],
            []
        );

        $student_id = $request->student;
        $order = new Order();
        $order->student_id = $student_id;
        return response()->json(['status' => 'success', 'data' => $order]);
    }


    public function getStudent(Request $request)
    {
        $id = $request->input('id');
        $student = Student::find($id);
        if (!$student) {

            return response()->json(['status' => 'error', 'message' => 'Sinh viên không tồn tại'], 404);
        }


        return response()->json(['status' => 'success', 'data' => $student]);
    }
    public function getCourse(Request $request)
    {
        $id = $request->input('id');
        $course = Course::find($id);
        if (!$course) {

            return response()->json(['status' => 'error', 'message' => 'Khóa học không tồn tại'], 404);
        }


        return response()->json(['status' => 'success', 'data' => $course]);
    }

    public function listOrder()
    {
        $orders = Order::orderBy('status', 'asc')->orderBy('created_at', 'desc')->paginate(6);
        return view('pages.backend.order.list', compact('orders'));
    }
    public function listOrderAjax()
    {
        if (request()->ajax()) {
            $orders = Order::orderBy('status', 'asc')->orderBy('created_at', 'desc')->paginate(6);
            return view('pages.backend.order.data', compact('orders'))->render();
        }
    }
    public function confirm(Order $order)
    {
        $order->status = 1;
        $order->save();
        return back()->with('success', 'Xác nhận đơn hàng ID = ' . $order->id . ' thành công.');
    }


    public function detail(Order $order)
    {
        $courses = Course::all();
        return view('pages.backend.order.order-detail', compact(['order', 'courses']));
    }




    public function delete(Order $order)
    {
    }


    public function findOrder(Request $request)
    {
    }
    public function findByStatus(Request $request)
    {
        $status = $request->status;
        if ($status == '1') {
            $orders = Order::where('status', '0')->orderBy('created_at', 'desc')->paginate(6);
        } else if ($status == '2') {
            $orders = Order::where('status', '1')->orderBy('created_at', 'desc')->paginate(6);
        } else {
            $orders = Order::orderBy('created_at', 'desc')->paginate(6);
        }
        return view('pages.backend.order.data', compact('orders'));
    }
    public function findByDateSearchKey(Request $request)
{
    $search_key = $request->search_key;
    $from_date = $request->from_date;
    $to_date = $request->to_date;

    $query = Order::query(); // Bắt đầu một truy vấn mới

    if ($from_date != '' && $to_date != '') {
        $from_date = date('Y-m-d 00:00:00', strtotime($from_date));
        $to_date = date('Y-m-d 23:59:59', strtotime($to_date));
        $query->whereBetween('created_at', [$from_date, $to_date]);
    } elseif ($from_date != '') {
        $from_date = date('Y-m-d 00:00:00', strtotime($from_date));
        $query->where('created_at', '>=', $from_date);
    } elseif ($to_date != '') {
        $to_date = date('Y-m-d 23:59:59', strtotime($to_date));
        $query->where('created_at', '<=', $to_date);
    }

  

    $orders = $query->paginate(6);

    return view('pages.backend.order.data', compact('orders'));
}

    
    
}
