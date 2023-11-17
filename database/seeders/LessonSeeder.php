<?php

namespace Database\Seeders;

use App\Models\Lesson;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class LessonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        $name1 = 'HTML và CSS';
        for ($i = 1; $i <= 5; $i++) {
            Lesson::create([
                'name' => 'Băt đầu với' .$name1,
                'slug' => Str::slug('Lesson ' . $i),
                'description' => 'Tìm hiểu cơ bản về ' . $i,
                'durations' => rand(10, 60),
                'position' => $i,
                'views' => rand(100, 1000),
                'course_id' => 1, 
            ]);
        }

        $name2 = 'C++';
        for ($i = 1; $i <= 5; $i++) {
            Lesson::create([
                'name' => 'Băt đầu với' .$name2,
                'slug' => Str::slug('Lesson ' . $i),
                'description' => 'Tìm hiểu cơ bản về ' . $i,
                'durations' => rand(10, 60),
                'position' => $i,
                'views' => rand(100, 1000),
                'course_id' => 2, 
            ]);
        }

        $name3 = 'JavaScript và NodeJs';
        for ($i = 1; $i <= 5; $i++) {
            Lesson::create([
                'name' => 'Băt đầu với' .$name3,
                'slug' => Str::slug('Lesson ' . $i),
                'description' => 'Tìm hiểu cơ bản về ' . $i,
                'durations' => rand(10, 60),
                'position' => $i,
                'views' => rand(100, 1000),
                'course_id' => 3, 
            ]);
        }

        $name4 = 'NodeJS và ExpressJS';
        for ($i = 1; $i <= 5; $i++) {
            Lesson::create([
                'name' => 'Băt đầu với' .$name4,
                'slug' => Str::slug('Lesson ' . $i),
                'description' => 'Tìm hiểu cơ bản về ' . $i,
                'durations' => rand(10, 60),
                'position' => $i,
                'views' => rand(100, 1000),
                'course_id' => 4, 
            ]);
        }

        $name5 = 'ReactJs';
        for ($i = 1; $i <= 5; $i++) {
            Lesson::create([
                'name' => 'Băt đầu với' .$name5,
                'slug' => Str::slug('Lesson ' . $i),
                'description' => 'Tìm hiểu cơ bản về ' . $i,
                'durations' => rand(10, 60),
                'position' => $i,
                'views' => rand(100, 1000),
                'course_id' => 5, 
            ]);
        }
        
    }
}

