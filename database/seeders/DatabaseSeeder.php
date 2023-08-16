<?php

namespace Database\Seeders;

use Database\Seeders\Article\ArticleSeeder;
use Database\Seeders\Category\CategorySeeder;
use Database\Seeders\Role\RoleSeeder;
use Database\Seeders\User\UserSeeder;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            RoleSeeder::class,
        ]);

        $this->call([
            UserSeeder::class,
        ]);

        $this->call([
            CategorySeeder::class,
        ]);

        $this->call([
            ArticleSeeder::class,
        ]);
    }
}
