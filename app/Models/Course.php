<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $table = 'courses';

   public static function getCoursesForFree(){
        return self::where('price', 0)->orWhere('sale_price', 0)->get();
   }
}
