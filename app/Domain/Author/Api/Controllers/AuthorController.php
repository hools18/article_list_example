<?php

namespace App\Domain\Author\Api\Controllers;

use App\Domain\Author\Resources\AuthorResource;
use App\Domain\User\Enums\RoleEnum;
use App\Domain\User\Models\User;
use Illuminate\Http\Resources\Json\JsonResource;

class AuthorController
{
    public function getAuthorsInBlock(): JsonResource
    {
        return AuthorResource::collection(User::role(RoleEnum::AUTHOR->value)->take(3)->get());
    }
}
