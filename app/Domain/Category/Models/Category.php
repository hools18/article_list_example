<?php

namespace App\Domain\Category\Models;

use App\Domain\Category\Models\Traits\CategoryBaseTrait;
use Database\Factories\Category\CategoryFactory;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory;
    use SoftDeletes;
    use CategoryBaseTrait;

    protected $fillable = [
        'name',
        'description',
        'is_active',
    ];

    protected static function newFactory(): Factory
    {
        return CategoryFactory::new();
    }
}
