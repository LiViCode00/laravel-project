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

        $lessons=[
            [
                'name' => 'Băt đầu với HTML và CSS',
                'slug' => Str::slug('Lesson '),
                'description' => 'Tìm hiểu cơ bản về ' ,
                'durations' => rand(10, 60),
                'position' => rand(1,10),
                'views' => rand(100, 1000),
                'course_id' => 1, 
            ],
            [
                'name' => 'Băt đầu với C++',
                'slug' => Str::slug('Lesson '),
                'description' => 'Tìm hiểu cơ bản về ' ,
                'durations' => rand(10, 60),
                'position' => rand(1,10),
                'views' => rand(100, 1000),
                'course_id' => 1, 
            ],
            [
                'name' => 'JavaScript và NodeJs',
                'slug' => Str::slug('Lesson '),
                'description' => 'Tìm hiểu cơ bản về ' ,
                'durations' => rand(10, 60),
                'position' => rand(1,10),
                'views' => rand(100, 1000),
                'course_id' => 1, 
            ],
            [
                'name' => 'Băt đầu với NodeJS và ExpressJS',
                'slug' => Str::slug('Lesson '),
                'description' => 'Tìm hiểu cơ bản về ' ,
                'durations' => rand(10, 60),
                'position' => rand(1,10),
                'views' => rand(100, 1000),
                'course_id' => 1, 
            ],
            [
                'name' => 'Băt đầu với ReactJs',
                'slug' => Str::slug('Lesson '),
                'description' => 'Tìm hiểu cơ bản về ' ,
                'durations' => rand(10, 60),
                'position' => rand(1,10),
                'views' => rand(100, 1000),
                'course_id' => 1, 
            ],
            
        ];

        foreach ($lessons as $lesson) {
            Lesson::updateOrCreate(
                [
                    'name' => $lesson['name'],
                ],
                $lesson
            );
        }
        
        
    }
}

