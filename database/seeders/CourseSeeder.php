<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Course;



class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $courses = [
            [
                "name" => 'Mobile App Development with Flutter & Dart (iOS and Android)',
                "detail" => 'The Complete iOS and Android Mobile App Development Course with Flutter and Dart (2022).',
                "image_path" => 'client/images/course/cu-1.jpg',
                "price" => '1000000',
                "sale_price" => '8990000',
                "teacher_id" => '1',
                "category_id" => '2'
            ],
            [
                "name" => 'Oracle Java Certification - Pass the Associate 1Z0-808 Exam.',
                "detail" => 'This course will help you learn the steps to becoming an Oracle Certified Associate (OCA) and get a higher paying job!',
                "image_path" => 'client/images/course/cu-2.jpg',
                "price" => '100',
                "sale_price" => '89',
                "teacher_id" => '2',
                "category_id" => '6'
            ],
        ];
        foreach ($courses as $course) {
            Course::updateOrCreate($course);
        }


    }
}
