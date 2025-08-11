<?php

namespace App\Http\Controllers;

use App\Http\Resources\QuestionResource;
use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function getByLesson(int $lessonId)
    {
        return Question::with('selectOptions:id,question_id,text,is_correct')
            ->where('lesson_id', '=', $lessonId)->get()
            ->toResourceCollection(QuestionResource::class);
    }
}
