<?php

namespace App\Domain\Category\Http\Controllers;

use App\Domain\Category\Models\Category;
use App\Domain\Category\Requests\CategoryRequest;
use App\Domain\Category\Resources\CategoryResource;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\JsonResource;

class CategoryController extends Controller
{
    public function index(): JsonResource
    {
        return CategoryResource::collection(Category::all());
    }

    public function store(CategoryRequest $request): JsonResource
    {
        return new CategoryResource(Category::create([
            'name' => $request->validated('name'),
            'is_active' => $request->validated('is_active')
        ]));
    }

    public function show(Category $category): JsonResource
    {
        return new CategoryResource($category);
    }

    public function update(CategoryRequest $request, Category $category): JsonResource
    {
        $category->update([
            'name' => $request->validated('name'),
            'is_active' => $request->validated('is_active')
        ]);

        return new CategoryResource($category);
    }

    public function destroy(Category $category): JsonResponse
    {
        $category->delete();

        return response()->json();
    }
}
