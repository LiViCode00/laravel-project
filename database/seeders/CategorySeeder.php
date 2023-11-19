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
                'user_id' => '1'
            ],
            [
                'name' => 'Lập trình Mobile',
                'user_id' => '1'
            ],
            [
                'name' => 'Lập trình Android',
                'user_id' => '1'
            ],
            [
                'name' => 'Thủ thuật lập trình',
                'user_id' => '1'
            ],
            [
                'name' => 'Phân tích thiết kế',
                'user_id' => '1'
            ],
            [
                'name' => 'Lập trình Java',
                'user_id' => '1'
            ],
            [
                'name' => 'Lập trình C',
                'user_id' => '1'
            ],
            [
                'name' => 'Unity3D',
                'user_id' => '2'
            ],
            [
                'name' => 'Lập trình PHP',
                'user_id' => '2'
            ],
        ];
        foreach ($categories as $category) {
            Category::updateOrCreate($category);
        }
    }
}
