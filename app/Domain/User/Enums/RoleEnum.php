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

    public static function publicRoles(): array
    {
        return [
            self::AUTHOR->value => 'Автор',
            self::READER->value => 'Читатель',
        ];
    }
}
