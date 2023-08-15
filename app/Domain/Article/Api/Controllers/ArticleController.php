<?php

namespace App\Domain\Article\Api\Controllers;

use App\Domain\Article\Models\Article;
use App\Domain\Article\Requests\ArticleIndexRequest;
use App\Domain\Article\Requests\ArticleRequest;
use App\Domain\Article\Resources\ArticleResource;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\JsonResource;


class ArticleController
{
    public function index(ArticleIndexRequest $request): JsonResource
    {
        $article = Article::active();

        if ($request->validated('limit')) {
            $article->take($request->validated('limit'));
        }

        return ArticleResource::collection($article->get());
    }

    public function store(ArticleRequest $request): ArticleResource
    {
        return new ArticleResource(Article::create($request->validated()));
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
