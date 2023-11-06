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
            ['name'=>'Lập trình Front-End'],
            ['name'=>'Lập trình Mobile'],
            ['name'=>'Lập trình Android'],
            ['name'=>'Thủ thuật lập trình'],
            ['name'=>'Phân tích thiết kế'],
            ['name'=>'Lập trình Java'],
            ['name'=>'Lập trình C'],
            ['name'=>'Unity3D'],
            ['name'=>'Lập trình PHP'],
        ];
        foreach ($categories as $category) {
            Category::updateOrCreate($category);
        }


    }
}
