<?php

namespace App\Domain\Author\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @property string $name
 * @property string $last_name
 */
class AuthorResource extends JsonResource
{

    public function toArray(Request $request): array
    {
        return [
            'full_name' => $this->name.' '. $this->last_name,
            'avatar' => 'https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80',
        ];
    }
}
