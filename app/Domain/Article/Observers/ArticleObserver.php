<?php

namespace App\Domain\Article\Observers;

use App\Domain\Article\Models\Article;

class ArticleObserver
{
    public function created(Article $article): void
    {
    }

    public function updated(Article $article): void
    {
    }

    public function deleted(Article $article): void
    {
    }

    public function restored(Article $article): void
    {
    }

    public function forceDeleted(Article $article): void
    {
    }
}
