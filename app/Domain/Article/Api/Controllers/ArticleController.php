<?php

namespace App\Domain\Article\Api\Controllers;

use App\Domain\Article\Models\Article;
use App\Domain\Article\Requests\ArticleIndexRequest;
use App\Domain\Article\Requests\ArticleRequest;
use App\Domain\Article\Resources\ArticleCollection;
use App\Domain\Article\Resources\ArticleResource;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\JsonResource;


class ArticleController
{
    public function index(): ArticleCollection
    {
        return new ArticleCollection(Article::active()->paginate(12));
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

    public function update(ArticleRequest $request, Article $category): ArticleResource
    {
        $category->update([
            'name' => $request->validated('name'),
            'description' => $request->validated('description'),
            'text' => $request->validated('text'),
            'category_id' => $request->validated('category_id'),
            'type' => $request->validated('type'),
        ]);

        return new ArticleResource($category);
    }

    public function destroy(Article $category): JsonResponse
    {
        $category->delete();

        return response()->json();
    }

    public function getArticlesInBlock(): JsonResource
    {
        return  ArticleResource::collection(Article::active()->take(3)->get());
    }
}
