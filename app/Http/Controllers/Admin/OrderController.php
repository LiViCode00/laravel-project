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
use Illuminate\Support\Facades\Hash;

class OrderController extends Controller
{
    public function add()
    {
        $students=Student::all();
        $courses=Course::all();
        return view('pages.backend.order.add',compact(['students','courses']));
       
    }
    public function postAdd(Request $request)
    {


    }

    public function listOrder()
    {
       $orders=Order::orderBy('status','asc')->orderBy('created_at','desc')->paginate(12);
       return view('pages.backend.order.list',compact('orders'));
    }
    public function confirm(Order $order)
    {
       $order->status=1;
       $order->save();
       return back()->with('success','Xác nhận đơn hàng ID = '.$order->id.' thành công.');
    }

 
    public function detail(Order $order){
        $courses=Course::all();
        return view('pages.backend.order.order-detail',compact(['order','courses']));
        
    }



  
    public function delete(Order $order)
    {
       
    }


    public function findOrder(Request $request)
    {

    }
}
