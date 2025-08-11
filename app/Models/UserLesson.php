<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class UserLesson extends Pivot
{
    public $incrementing = true;


    protected $fillable = [
        'progress',
        'total_points'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function lesson()
    {
        return $this->belongsTo(Lesson::class);
    }
}
