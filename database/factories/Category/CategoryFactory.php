<?php

namespace Database\Factories\Category;

use App\Domain\Category\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    protected $model = Category::class;

    public function definition(): array
    {
        return [
            'name' => fake()->realText(20),
            'description' => fake()->realText(100),
            'is_active' => fake()->boolean,
        ];
    }
}
