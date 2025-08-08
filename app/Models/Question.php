<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    /** @use HasFactory<\Database\Factories\QuestionFactory> */
    use HasFactory;

    public function lesson() {
        return $this->belongsTo(Lesson::class);
    }

    public function selectOptions() {
        return $this->hasMany(SelectOption::class);
    }

    public function textAnswers() {
        return $this->hasMany(TextAnswer::class);
    }

    public function users() {
        return $this->belongsToMany(User::class, 'user_answers');
    }
}
