<?php

namespace Database\Factories\Article;

use App\Models\Article\Enums\TypeEnum;
use App\Models\Category\Category;
use App\Models\User\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
{
    public function definition(): array
    {
        $category = Category::factory()->create();
        $user = User::factory()->create();

        return [
            'name' => fake()->title(),
            'description' => fake()->realText(100),
            'text' => fake()->realTextBetween(200, 600),
            'category_id' => $category->id,
            'user_id' => $user->id,
            'is_active' => fake()->boolean,
            'type' => fake()->randomElement(TypeEnum::toArray()),
        ];
    }
}
