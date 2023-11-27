<?php

namespace Database\Seeders;

use App\Models\ChildMenu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ChildMenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $childs_menu=[
            [
                'name'=>'Đơn hàng',
                'menu_id'=>'1',
                'link'=> 'admin.order.index'
            ],
            [
                'name'=>'Quản lý khóa học',
                'menu_id'=>'2',
                'link'=> 'admin.course.index'
            ],
            [
                'name'=>'Quản lý danh mục',
                'menu_id'=>'2',
                'link'=> 'admin.category.index'
            ],
            [
                'name'=>'Đánh giá',
                'menu_id'=>'3',
                'link'=> 'admin.review.index'
            ],
            [
                'name'=>'Tin tức',
                'menu_id'=>'3',
                'link'=> 'admin.post.index'
            ],
            [
                'name'=>'Quản lý người dùng',
                'menu_id'=>'4',
                'link'=>'admin.user.index'
            ],
            [
                'name'=>'Quản lý học viên',
                'menu_id'=>'4',
                'link'=> 'admin.student.index'
            ],
            [
                'name'=>'Quản lý giảng viên',
                'menu_id'=>'4',
                'link'=> 'admin.teacher.index'
            ],
            [
                'name'=>'Người dùng',
                'menu_id'=>'5',
                'link'=> 'admin.course.index'
            ],
            [
                'name'=>'Nhóm quyền',
                'menu_id'=>'5',
                'link'=> 'admin.course.index'
            ],
            [
                'name'=>'Quyền hạn',
                'menu_id'=>'5',
                'link'=> 'admin.course.index'
            ],
            [
                'name'=>'Menu',
                'menu_id'=>'6',
                'link'=> 'admin.course.index'
            ],
           
        ];
        foreach ($childs_menu as $child) {
            ChildMenu::updateOrCreate(['name' => $child['name']], $child);
        }
    }
}
