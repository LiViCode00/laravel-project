<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Lesson extends Model
{
    use HasFactory;
    protected $table = 'lessons';

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
}
