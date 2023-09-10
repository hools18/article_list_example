<?php

namespace App\Domain\Article\Http\Controllers;

use App\Domain\Article\Models\Article;
use App\Domain\Article\Requests\ArticleRequest;
use App\Domain\Article\Resources\ArticleResource;
use App\Services\Article\ArticleService;
use App\Services\Messenger\Telegram\TelegramMessage;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;

class ArticleController
{
    public function index(): View
    {
        return view('article.index', [
            'articles' => ArticleResource::collection(Article::all())
        ]);
    }

    public function create(): View
    {
        return view('article.create');
    }

    public function store(ArticleRequest $request, ArticleService $articleService): ArticleResource
    {
        return new ArticleResource($articleService->create($request));
    }

    public function show(Article $article, TelegramMessage $telegramMessage): View
    {
        return view('article.show', ['article' => new ArticleResource($article)]);
    }

    public function update(ArticleRequest $request, Article $article, ArticleService $articleService): ArticleResource
    {
        return new ArticleResource($articleService->update($article, $request));
    }

    public function destroy(Article $article): JsonResponse
    {
        $article->delete();

        return response()->json();
    }
}
