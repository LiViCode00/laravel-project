<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;
    protected $table = 'lessons';

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public static function getLessonByCourse($id_course){
        $lessons = Lesson::join('courses', 'courses.id', '=', 'lessons.course_id')
            ->select('lessons.*', 'courses.name AS course_name')
            ->where('courses.id', '=', $id_course)
            ->get();
    
        return $lessons;
    }
}
