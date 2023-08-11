<?php

namespace App\Domain\Article\Enums;

enum TypeEnum: string
{
    case INFORMATIONAL = 'informational';
    case SCIENTIFIC_AND_THEORETICAL = 'scientific_and_theoretical';
    case INTRODUCTION = 'introduction';
    case RESEARCH = 'research';

    public function label(): string
    {
        return match ($this) {
            self::INFORMATIONAL => 'Информационный',
            self::SCIENTIFIC_AND_THEORETICAL => 'Научно-теоретические',
            self::INTRODUCTION => 'Вступление',
            self::RESEARCH => 'Исследовательские',
        };
    }

    public static function toArray(): array
    {
        return array_column(self::cases(), 'value');
    }
}
