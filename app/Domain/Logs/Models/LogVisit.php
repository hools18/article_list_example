<?php

namespace App\Domain\Logs\Models;

use PhpClickHouseLaravel\BaseModel;

class LogVisit extends BaseModel
{
    protected $table = 'log_visits';

    protected array $fillable = ['id', 'userId', 'visitDate', 'pageURL', 'pageType'];
}
