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
                "name" => 'Oracle Java Certification.',
                "detail" => 'This course will help you learn the steps to becoming an Oracle Certified Associate (OCA) and get a higher paying job!',
                "image_path" => 'client/images/course/cu-2.jpg',
                "price" => '100',
                "sale_price" => '89',
                "teacher_id" => '2',
                "category_id" => '6'
            ],

            [
                "name" => 'Web Development with JavaScript and Node.js',
                "detail" => 'Learn to build robust and scalable web applications using JavaScript and Node.js, a popular web development stack.',
                "image_path" => 'client/images/course/cu-3.jpg',
                "price" => '150',
                "sale_price" => '0',
                "teacher_id" => '3',
                "category_id" => '1'
            ],
            [
                "name" => 'Python for Data Science and Machine Learning',
                "detail" => 'Master the essential skills of data science and machine learning using Python, one of the most popular programming languages in the field.',
                "image_path" => 'client/images/course/cu-4.jpg',
                "price" => '200',
                "sale_price" => '160',
                "teacher_id" => '3',
                "category_id" => '3'
            ],
            [
                "name" => 'Mastering React.js for Frontend Web Development',
                "detail" => 'Learn to build fast and efficient web applications with React.js, a popular JavaScript library for building user interfaces.',
                "image_path" => 'client/images/course/cu-5.jpg',
                "price" => '0',
                "sale_price" => '150',
                "teacher_id" => '2',
                "category_id" => '1'
            ]

            
        ];
        foreach ($courses as $course) {
            Course::updateOrCreate($course);
        }


    }
}
