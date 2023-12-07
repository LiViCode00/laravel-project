<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        $courses = Course::all();
        $student = Student::all();
        $cart = [
            ['course_id' => $courses->random()->id,
            'student_id'=>$student->random()->id],

            ['course_id' => $courses->random()->id,
            'student_id'=>$student->random()->id],

            ['course_id' => $courses->random()->id,
            'student_id'=>$student->random()->id],

            ['course_id' => $courses->random()->id,
            'student_id'=>$student->random()->id],

            ['course_id' => $courses->random()->id,
            'student_id'=>$student->random()->id],

            ['course_id' => $courses->random()->id,
            'student_id'=>$student->random()->id],

            ['course_id' => $courses->random()->id,
            'student_id'=>$student->random()->id],

            ['course_id' => $courses->random()->id,
            'student_id'=>$student->random()->id],

            ['course_id' => $courses->random()->id,
            'student_id'=>$student->random()->id],

            ['course_id' => $courses->random()->id,
            'student_id'=>$student->random()->id],
        ];
    }
}
