<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'name' => 'Lập trình Front-End',
                'admin_id' => '1'
            ],
            [
                'name' => 'Lập trình Mobile',
                'admin_id' => '1'
            ],
            [
                'name' => 'Lập trình Android',
                'admin_id' => '1'
            ],
            [
                'name' => 'Thủ thuật lập trình',
                'admin_id' => '1'
            ],
            [
                'name' => 'Phân tích thiết kế',
                'admin_id' => '1'
            ],
            [
                'name' => 'Lập trình Java',
                'admin_id' => '1'
            ],
            [
                'name' => 'Lập trình C',
                'admin_id' => '1'
            ],
            [
                'name' => 'Unity3D',
                'admin_id' => '2'
            ],
            [
                'name' => 'Lập trình PHP',
                'admin_id' => '2'
            ],
        ];
        foreach ($categories as $category) {
            Category::updateOrCreate($category);
        }
    }
}
