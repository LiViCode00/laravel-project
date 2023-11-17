<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
<<<<<<< HEAD
use Illuminate\Support\Facades\DB;
=======
use Illuminate\Database\Eloquent\Relations\HasMany;
>>>>>>> a78391d907f695b439e3f10debbcf1e9b0a28ab7

class Teacher extends Model
{
    use HasFactory;

<<<<<<< HEAD
    protected $table = 'teachers';

    public function courses()
    {
        return $this->hasMany(Course::class);
    }

    public static function getTeachersAtHome(){
        return self::take(4)->get();
    }

    public static function getAllTeacherPag($perPage){
        return DB::table('teachers')->paginate($perPage);
    }

    public static function getCourseByTeacher($id_teacher){
        $coursesByTeachers = DB::table('teachers')
        ->join('courses', 'courses.teacher_id', '=', 'teachers.id')
        ->select('courses.*', 'teachers.name AS teacher_name', 'teachers.description AS teacher_des', 'teachers.image_path AS teacher_img')
        ->where('teacher_id', '=', $id_teacher)
        ->get();

        return $coursesByTeachers;
    }

    public static function getTeacherByTeacherId($id_teacher){
        $teacher = DB::table('teachers')
            ->where('id','=',$id_teacher)
            ->first();

        return $teacher;
    }
=======
    public function courses(): HasMany{
        return $this->hasMany(Course::class);
    }
>>>>>>> a78391d907f695b439e3f10debbcf1e9b0a28ab7
}
