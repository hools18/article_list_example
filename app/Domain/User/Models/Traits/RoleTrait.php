<?php

namespace App\Domain\User\Models\Traits;

use App\Domain\User\Enums\RoleEnum;
use Spatie\Permission\Models\Role;

trait RoleTrait
{
    public static function assignRoles(): void
    {
        foreach (RoleEnum::cases() as $role) {
            Role::findOrCreate($role->value);
        }
    }
}