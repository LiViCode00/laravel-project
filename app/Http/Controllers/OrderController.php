<?php

namespace App\Http\Controllers;

use App\Events\NewOrderReceived;
use App\Models\Course;
use App\Models\Notification;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;


class OrderController extends Controller
{

   
    public function order(Course $course)
    {
        // if (!Auth::guard('student')->check()) {
        //     return Redirect::guest(route('login'));
        // } else {
        //     return view('pages.client.order', compact('course'));
        // }
        $order=new Order();
        $order->student_id=Auth::user()->id;
        $order->total=$course->sale_price;
        $order->save();

        $order_detail=new OrderDetail();
        $order_detail->order_id=$order->id;
        $order_detail->course_id=$course->id;
        $order_detail->price=$course->sale_price;
        $order_detail->save();

        $notification= new Notification();
        $notification->content= Auth::user()->name. '      vừa mua khóa học      ' .$course->name;
        $notification->image_path=$course->image_path;
        $notification->save();


        event(new NewOrderReceived(Auth::user(),$course));
       
    }
    public function postOrder(Course $course)
    {
    }
}
