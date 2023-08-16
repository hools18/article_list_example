<?php

namespace App\Domain\Article\Http\Controllers;

use App\Domain\Article\Models\Article;
use App\Domain\Article\Requests\ArticleRequest;
use App\Domain\Article\Resources\ArticleResource;
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

    public function store(ArticleRequest $request): ArticleResource
    {
        return new ArticleResource(Article::create($request->validated()));
    }

    public function show(Article $category): ArticleResource
    {
        return new ArticleResource($category);
    }

    public function update(ArticleRequest $request, Article $category): ArticleResource
    {
        $category->update($request->validated());

        return new ArticleResource($category);
    }

    public function destroy(Article $category): JsonResponse
    {
        $category->delete();

        return response()->json();
    }
}
