<?php

namespace Database\Seeders\User;

use App\Domain\User\Enums\RoleEnum;
use App\Domain\User\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $author = User::create([
            'name' => 'Автор',
            'last_name' => 'Фамилия',
            'email' => 'author@email.test',
            'password' => Hash::make('12345678'),
        ]);

        $author->assignRole(RoleEnum::AUTHOR->value);

        $reader = User::create([
            'name' => 'Читатель',
            'last_name' => 'Фамилия',
            'email' => 'reader@email.test',
            'password' => Hash::make('12345678'),
        ]);

        $reader->assignRole(RoleEnum::READER->value);

        foreach (RoleEnum::cases() as $role) {
            $user = User::factory()->create();
            $user->assignRole($role->value);
        }
    }
}
