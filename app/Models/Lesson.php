<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Lesson extends Model
{
    use HasFactory;
    protected $table = 'lessons';


    public static function getLessonByCourse($id_course){
        $lessons = Lesson::join('courses', 'courses.id', '=', 'lessons.course_id')
            ->select('lessons.*', 'courses.name AS course_name')
            ->where('courses.id', '=', $id_course)
            ->get();
    
        return $lessons;
    }
    public function course(): BelongsTo{
        return $this->belongsTo(Course::class);
    }
   

    public function videos(): HasMany{
        return $this->hasMany(Video::class);
    }

    public function reviews(): HasMany
    {
        return $this->hasMany(LessonReviews::class);
    }
    public function documentary(): HasOne{
        return $this->hasOne(Documentary::class);
    }
}
