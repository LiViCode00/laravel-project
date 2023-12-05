<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;

    public function user(): BelongsTo{
        return $this->belongsTo(User::class);
    }

    public function courses(): HasMany{
        return $this->hasMany(Course::class);
    }
<<<<<<< HEAD
    public function posts(): HasMany{
        return $this->hasMany(Post::class);
=======

    public static function getAllCate(){
        return Category::all();
>>>>>>> a18ab52fcda1eabb00cf59e98efe00b54a891042
    }
}
