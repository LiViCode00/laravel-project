<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $table = 'posts';

    public static function getPostsAtHome(){
        return self::orderBy('created_at', 'desc')->limit(8)->get();
    }



}
