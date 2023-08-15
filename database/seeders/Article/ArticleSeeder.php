<?php

namespace Database\Seeders\Article;

use App\Domain\Article\Enums\TypeEnum;
use App\Domain\Article\Models\Article;
use App\Domain\Category\Models\Category;
use App\Domain\User\Models\User;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    public function run(): void
    {
        $categories = Category::where('is_active', true)->pluck('id')->toArray();
        $users = User::role('author')->pluck('id')->toArray();

        Article::factory([
            'category_id' => fake()->randomElement($categories),
            'user_id' => fake()->randomElement($users),
            'type' => fake()->randomElement(TypeEnum::toArray()),
        ])->count(50)->create();
    }
}
