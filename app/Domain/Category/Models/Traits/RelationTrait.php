<?php

namespace App\Domain\Category\Models\Traits;

use App\Domain\Article\Models\Article;
use Illuminate\Database\Eloquent\Relations\HasMany;

trait RelationTrait
{
    public function articles(): HasMany
    {
        return $this->hasMany(Article::class);
    }
}
