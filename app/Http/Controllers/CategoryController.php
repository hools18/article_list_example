<?php

namespace App\Http\Controllers;

use App\Domain\Category\Models\Category;
use App\Domain\Category\Requests\CategoryRequest;
use App\Domain\Category\Resources\CategoryResource;

class CategoryController extends Controller
{
    public function index()
    {
        return CategoryResource::collection(Category::all());
    }

    public function store(CategoryRequest $request)
    {
        return new CategoryResource(Category::create($request->validated()));
    }

    public function show(Category $category)
    {
        return new CategoryResource($category);
    }

    public function update(CategoryRequest $request, Category $category)
    {
        $category->update($request->validated());

        return new CategoryResource($category);
    }

    public function destroy(Category $category)
    {
        $category->delete();

        return response()->json();
    }
}
