<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Course extends Model
{
    use HasFactory;
    protected $table = 'courses';

    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }

    public static function getCourses(){
        return self::all();
    }

   public static function getCoursesForFree(){
      $courses = Course::join('teachers', 'courses.teacher_id', '=', 'teachers.id')
      ->select('courses.*', 'teachers.name AS teacher_name', 'teachers.image_path AS teacher_img')
      ->where('courses.sale_price', 0)
      ->get();
    return $courses;
   }

   public static function getPaidCourse(){
      $courses = Course::join('teachers', 'courses.teacher_id', '=', 'teachers.id')
      ->select('courses.*', 'teachers.name AS teacher_name', 'teachers.image_path AS teacher_img')
      ->where('price', '!=', 0)->Where('sale_price', '!=', 0)
      ->get();
      return  $courses;
  }

  public static function getCourseById($id)
    {   
        $course = DB::table('courses')
        ->join('categories', 'courses.category_id', '=', 'categories.id')
        ->join('teachers', 'courses.teacher_id', '=', 'teachers.id')
        ->select('courses.*', 'categories.name AS cate_name', 'teachers.name AS teacher_name', 'teachers.description AS teacher_des', 'teachers.image_path AS teacher_img')
        ->where('courses.id', '=', $id)
        ->first();

    return $course;
    }
}
