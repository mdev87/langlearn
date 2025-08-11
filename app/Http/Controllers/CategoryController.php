<?php

namespace App\Http\Controllers;

use App\Http\Resources\CategoryResource;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class CategoryController extends Controller
{
    public function index()
    {
        return Cache::remember('categories', now()->addHours(6), function () {
            return Category::all(['id', 'title', 'description'])->toResourceCollection(CategoryResource::class);
        });
    }
}
