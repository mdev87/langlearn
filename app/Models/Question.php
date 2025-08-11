<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    /** @use HasFactory<\Database\Factories\QuestionFactory> */
    use HasFactory;

    protected $fillable = [
        'text',
        'type',
        'difficulty',
    ];


    public function lesson() {
        return $this->belongsTo(Lesson::class);
    }

    public function selectOptions() {
        return $this->hasMany(SelectOption::class);
    }

    public function textAnswers() {
        return $this->hasMany(TextAnswer::class);
    }

    public function userAnswers() {
        return $this->belongsToMany(User::class)->using(UserAnswer::class);
    }
}
