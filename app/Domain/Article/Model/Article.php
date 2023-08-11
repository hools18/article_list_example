<?php

namespace App\Domain\Article\Model;

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
}
