<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class InstallCommand extends Command
{
    protected $signature = 'install';

    protected $description = 'Start project';

    public function handle(): void
    {
        Artisan::call('migrate:refresh', ['--force' => true]);

        Artisan::call('init:roles');

        Artisan::call('db:seed', ['--class' => 'Database\\Seeders\\User\\UserSeeder']);

        Artisan::call('db:seed', ['--class' => 'Database\\Seeders\\Category\\CategorySeeder']);

        Artisan::call('db:seed', ['--class' => 'Database\\Seeders\\Article\\ArticleSeeder']);
    }
}
