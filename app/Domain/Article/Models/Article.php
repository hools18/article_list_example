<?php

namespace App\Domain\Article\Models;

use Database\Factories\Article\ArticleFactory;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'text',
        'category_id',
        'user_id',
        'is_active',
        'type',
    ];

    protected static function newFactory(): Factory
    {
        return ArticleFactory::new();
    }
}
