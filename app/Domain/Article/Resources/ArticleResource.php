<?php

namespace App\Domain\Article\Resources;

use App\Domain\Article\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin Article */
class ArticleResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'name' => $this->name,
            'description' => $this->description,
            'text' => $this->text,
            'category_id' => $this->category_id,
            'user_id' => $this->user_id,
            'is_active' => $this->is_active,
            'type' => $this->type,
            'url' => route('articles.show', $this->id),
        ];
    }
}
