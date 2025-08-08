<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Lesson;
use App\Models\Question;
use App\Models\SelectOption;
use App\Models\TextAnswer;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        Category::factory(5)->has(
            Lesson::factory(2)->has(
                Question::factory(2)
                    ->has(SelectOption::factory(3))
                    ->has(TextAnswer::factory(2))
            )
        )->create();
    }
}
