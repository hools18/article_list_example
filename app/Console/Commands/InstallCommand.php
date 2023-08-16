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
        $this->info('Start install');

        $this->info('Refresh migrate start');

        Artisan::call('migrate:refresh', ['--force' => true]);

        $this->info('Refresh migrate complete');

        $this->info('Init roles start');

        Artisan::call('init:roles');

        $this->info('Init roles complete');

        $this->info('Run seeding initial data start');

        Artisan::call('db:seed', ['--class' => 'Database\\Seeders\\User\\UserSeeder']);

        Artisan::call('db:seed', ['--class' => 'Database\\Seeders\\Category\\CategorySeeder']);

        Artisan::call('db:seed', ['--class' => 'Database\\Seeders\\Article\\ArticleSeeder']);

        $this->info('Run seeding initial data complete');

        $this->info('Install complete');

    }
}
