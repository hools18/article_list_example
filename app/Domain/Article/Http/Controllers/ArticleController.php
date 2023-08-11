<?php

namespace App\Domain\Article\Http\Controllers;

use App\Domain\Article\Model\Article;
use App\Domain\Article\Requests\ArticleRequest;
use App\Domain\Article\Resources\ArticleResource;

class ArticleController
{
    public function index()
    {
        return ArticleResource::collection(Article::all());
    }

    public function store(ArticleRequest $request)
    {
        return new ArticleResource(Article::create($request->validated()));
    }

    public function show(Article $category)
    {
        return new ArticleResource($category);
    }

    public function update(ArticleRequest $request, Article $category)
    {
        $category->update($request->validated());

        return new ArticleResource($category);
    }

    public function destroy(Article $category)
    {
        $category->delete();

        return response()->json();
    }
}
