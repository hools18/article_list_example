<?php

namespace App\Domain\Article\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;
use Illuminate\Http\Request;

class ArticleCollection extends ResourceCollection
{
    public function toArray(Request $request): array
    {
        return [$this->collection];
    }
}
