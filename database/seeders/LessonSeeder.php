<?php

namespace Database\Seeders;

use App\Models\Course;
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

        $courses=Course::all();
        $lessons=[
            [
                'name' => 'Băt đầu với HTML và CSS',
                'slug' => Str::slug('Lesson '),
                'description' => 'Tìm hiểu cơ bản về ' ,
                'durations' => rand(10, 60),
                'position' => rand(1,10),
                'views' => rand(100, 1000),
                'course_id' =>$courses->random()->id 
            ],
            [
                'name' => 'Băt đầu với C++',
                'slug' => Str::slug('Lesson '),
                'description' => 'Tìm hiểu cơ bản về ' ,
                'durations' => rand(10, 60),
                'position' => rand(1,10),
                'views' => rand(100, 1000),
                 'course_id' =>$courses->random()->id 
            ],
            [
                'name' => 'JavaScript và NodeJs',
                'slug' => Str::slug('Lesson '),
                'description' => 'Tìm hiểu cơ bản về ' ,
                'durations' => rand(10, 60),
                'position' => rand(1,10),
                'views' => rand(100, 1000),
                 'course_id' =>$courses->random()->id 
            ],
            [
                'name' => 'Băt đầu với NodeJS và ExpressJS',
                'slug' => Str::slug('Lesson '),
                'description' => 'Tìm hiểu cơ bản về ' ,
                'durations' => rand(10, 60),
                'position' => rand(1,10),
                'views' => rand(100, 1000),
                 'course_id' =>$courses->random()->id 
            ],
            [
                'name' => 'Băt đầu với ReactJs',
                'slug' => Str::slug('Lesson '),
                'description' => 'Tìm hiểu cơ bản về ' ,
                'durations' => rand(10, 60),
                'position' => rand(1,10),
                'views' => rand(100, 1000),
                 'course_id' =>$courses->random()->id 
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

