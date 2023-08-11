<?php

namespace App\Domain\User\Enums;

enum RoleEnum: string
{
    case AUTHOR = 'author';
    case READER = 'reader';
    case ADMIN = 'admin';

    public function label(): string
    {
        return match ($this) {
            self::AUTHOR => 'Автор',
            self::READER => 'Читатель',
            self::ADMIN => 'Админ',
        };
    }
}
