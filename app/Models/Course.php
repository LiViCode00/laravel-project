<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Course extends Model
{
    use HasFactory;
    protected $table = 'courses';

    public function category(): BelongsTo{
     return $this->belongsTo(Category::class);
    }
    public function teacher(): BelongsTo{
     return $this->belongsTo(Teacher::class);
    }

   public static function getCoursesForFree(){
        return self::where('price', 0)->orWhere('sale_price', 0)->get();
   }
}
