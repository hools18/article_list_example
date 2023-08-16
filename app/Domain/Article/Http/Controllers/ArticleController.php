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

        return new ArticleResource(Article::create([
            'name' => $request->validated('name'),
            'description' => $request->validated('description'),
            'text' => $request->validated('text'),
            'category_id' => $request->validated('category_id'),
            'type' => $request->validated('type'),
        ]));
    }

    public function show(Article $article): View
    {
        return view('article.show', ['article' =>  new ArticleResource($article)]);
    }

    public function update(ArticleRequest $request, Article $article): ArticleResource
    {
        $article->update([
            'name' => $request->validated('name'),
            'description' => $request->validated('description'),
            'text' => $request->validated('text'),
            'category_id' => $request->validated('category_id'),
            'type' => $request->validated('type'),
        ]);

        return new ArticleResource($article);
    }

    public function destroy(Article $article): JsonResponse
    {
        $article->delete();

        return response()->json();
    }
}
