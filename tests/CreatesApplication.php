<?php

namespace Tests;

use Illuminate\Contracts\Console\Kernel;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\DB;

trait CreatesApplication
{
    /**
     * Creates the application.
     */
    public function createApplication(): Application
    {
        $app = require __DIR__ . '/../bootstrap/app.php';

        $app->make(Kernel::class)->bootstrap();

        return $app;
    }

    public static function tearDownAfterClass(): void
    {
        parent::tearDownAfterClass();

        $db = DB::connection('clickhouse')->getClient();
        $db->write("DROP TABLE IF EXISTS log_visits");
    }
}
