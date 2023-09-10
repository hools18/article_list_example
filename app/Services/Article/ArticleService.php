<?php

namespace App\Services\Article;

use App\Domain\Article\Models\Article;
use App\Domain\Article\Requests\ArticleRequest;

class ArticleService
{
    public function create(ArticleRequest $request)
    {
        return Article::create([
            'name' => $request->validated('name'),
            'description' => $request->validated('description'),
            'text' => $request->validated('text'),
            'category_id' => $request->validated('category_id'),
            'type' => $request->validated('type'),
        ]);
    }

    public function update(Article $article, ArticleRequest $request)
    {
        return $article->update([
            'name' => $request->validated('name'),
            'description' => $request->validated('description'),
            'text' => $request->validated('text'),
            'category_id' => $request->validated('category_id'),
            'type' => $request->validated('type'),
        ]);
    }
}
