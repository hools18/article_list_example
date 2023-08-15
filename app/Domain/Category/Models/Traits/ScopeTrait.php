<?php

namespace App\Domain\Category\Models\Traits;

use Illuminate\Database\Eloquent\Builder;

trait ScopeTrait
{
    public function scopeActive(Builder $query): void
    {
        $query->where('is_active', true);
    }
}
