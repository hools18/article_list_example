<?php

namespace Database\Factories\Category;

use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => fake()->title(),
            'description' => fake()->realText(100),
            'is_active' => fake()->boolean,
        ];
    }
}
