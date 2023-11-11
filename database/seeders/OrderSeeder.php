<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Request $request)
    {
       
        if (Auth::check()) {
            // Người dùng đã đăng nhập, bạn có thể sử dụng Auth::user()
            $userId = Auth::user()->id;
            Order::updateOrCreate([
                'user_id' => $userId,
            ]);
        } else {
            Order::updateOrCreate([
                'user_id' => '1',
            ]);
        }
        
    }
}
