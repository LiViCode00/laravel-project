<?php

namespace Database\Seeders;

use App\Models\Menu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $menus = [
            [
                'name' => 'Quản lý đơn hàng',
                'icon' => 'fa fa-cart-plus'
            ],
            [
                'name' => 'Khóa học & Danh mục',
                'icon' => 'fa fa-book'
            ],
            [
                'name' => 'Nội dung',
                'icon' => 'fa fa-pencil'
            ],
            [
                'name' => 'Học viên & Giảng viên',
                'icon' => 'fa fa-user'
            ],
            [
                'name' => 'Quyền hạn người dùng',
                'icon' => 'fa fa-lock'
            ],
            [
                'name' => 'Quản lý chung',
                'icon' => 'fa fa-bars'
            ],
        ];

        foreach ($menus as $menu) {
            Menu::updateOrCreate(['name' => $menu['name']], $menu);
        }
    }
}
