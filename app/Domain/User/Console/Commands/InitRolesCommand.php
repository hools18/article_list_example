<?php

namespace App\Domain\User\Console\Commands;

use App\Domain\User\Models\User;
use Illuminate\Console\Command;

class InitRolesCommand extends Command
{
    protected $signature = 'init:roles';

    protected $description = 'Command description';

    public function handle(): void
    {
        User::initRoles();
    }
}
