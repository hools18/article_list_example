<?php

namespace Database\Seeders\User;

use App\Domain\User\Enums\RoleEnum;
use App\Domain\User\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        foreach (RoleEnum::cases() as $role) {
            $user = User::factory()->create();
            $user->assignRole($role->value);
        }
    }
}
