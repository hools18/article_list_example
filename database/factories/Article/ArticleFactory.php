<?php

namespace Database\Factories\Article;

use App\Domain\Article\Enums\TypeEnum;
use App\Domain\Article\Models\Article;
use App\Domain\Category\Models\Category;
use App\Domain\User\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
{
    protected $model = Article::class;

    public function definition(): array
    {
        $category = Category::factory()->create();
        $user = User::factory()->create();

        return [
            'name' => fake()->realText(80),
            'description' => fake()->realText(150),
            'text' => fake()->realTextBetween(200, 1000),
            'category_id' => $category->id,
            'user_id' => $user->id,
            'is_active' => fake()->boolean,
            'type' => fake()->randomElement(TypeEnum::toArray()),
        ];
    }
}
