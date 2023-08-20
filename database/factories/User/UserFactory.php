<?php

namespace Database\Factories\User;

use App\Domain\User\Enums\RoleEnum;
use App\Domain\User\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    protected $model = User::class;

    public function definition(): array
    {
        return [
            'name' => fake()->firstName,
            'last_name' => fake()->lastName,
            'email' => fake()->unique()->safeEmail,
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ];
    }

    public function configure(): UserFactory
    {
        return $this->afterCreating(function (User $user) {
            $user->assignRole(
                fake()->randomElement(RoleEnum::publicRoles())->value
            );
        });
    }
}
