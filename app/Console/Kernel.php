<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use Illuminate\Support\Facades\Route;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule): void
    {
        // $schedule->command('inspire')->hourly();
    }

    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        $this->load(__DIR__.'/Commands');

        if(scandir(base_path('app/Domain'))){
            foreach (array_diff(scandir(base_path('app/Domain')), ['..', '.']) as $folderName) {
                if (is_dir(base_path("app/Domain/{$folderName}/Console/Commands"))) {
                    $this->load("app/Domain/{$folderName}/Console/Commands");
                }
            }
        }

        require base_path('routes/console.php');
    }
}
