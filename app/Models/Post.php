<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Post extends Model
{
    use HasFactory;
    protected $table = 'posts';

    public function category(): BelongsTo{
        return $this->belongsTo(Category::class);
    }
    public function user(): BelongsTo{
        return $this->belongsTo(User::class);
    }

    public function reviews(): HasMany
    {
        return $this->hasMany(PostReviews::class);
    }

    public static function getPostsAtHome(){
        return self::orderBy('created_at', 'desc')->limit(8)->get();
    }



}
