<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\CourseStudent;
use App\Models\Order;
use App\Models\Post;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    // public function __construct()
    //     {
    //         $this->middleware('auth');
    //     }

    public function index()
    {
        $currentMonth = Carbon::now()->format('Y-m');
        $currentYear = Carbon::now()->format('Y');

        $dailyOrders = Order::where('created_at', 'like', $currentMonth . '%')
            ->selectRaw('DATE(created_at) as date, COUNT(*) as count')
            ->groupBy('date')
            ->get();


        for ($date = 1; $date <= 30; $date++) {
            if ($date < 10) {
                $date = '0' . $date;
            }
            $order = $dailyOrders->firstWhere('date', $currentMonth . '-' . $date);
            $dailyOrdersData[] = [
                'date' => $date,
                'count' => $order ? $order->count : 0,
            ];
        }

        $monthlyOrders = Order::whereYear('created_at', $currentYear)
            ->selectRaw('MONTH(created_at) as month, COUNT(*) as count')
            ->groupBy('month')
            ->get();

        $monthOrdersData = [];
        for ($month = 1; $month <= 12; $month++) {
            $order = $monthlyOrders->firstWhere('month', $month);
            $monthOrdersData[] = [
                'month' => $month,
                'count' => $order ? $order->count : 0,
            ];
        }

        $orders = Order::where('status', 0)->orderBy('created_at','desc')->paginate(10);
        $orderCount = Order::count();
        $postCount = Post::count();
        $userCount = User::count();
        $courseCount = Course::count();


      
        return view('pages.backend.dashboard', compact('dailyOrdersData', 'monthOrdersData', 'orders', 'orderCount', 'postCount', 'userCount', 'courseCount'));
    }
}
