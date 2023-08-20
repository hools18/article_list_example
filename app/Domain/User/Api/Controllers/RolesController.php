<?php

namespace App\Domain\User\Api\Controllers;

use App\Domain\User\Enums\RoleEnum;
use Illuminate\Http\JsonResponse;


class RolesController
{
    public function getPublicRoles(): JsonResponse
    {
        return response()
            ->json(
                array_map(fn(RoleEnum $roleEnum) => [
                    'value' => $roleEnum->value,
                    'label' => $roleEnum->label(),
                ], RoleEnum::publicRoles())
            );
    }
}
