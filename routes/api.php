<?php

use App\Http\Controllers\{CategoryController, LessonController, QuestionController};
use Illuminate\Support\Facades\Route;

Route::get('/categories', [CategoryController::class, 'index']);
Route::get('/categories/{id}/lessons', [LessonController::class, 'getByCategory']);
Route::get('/lessons/{id}/questions', [QuestionController::class, 'getByLesson']);