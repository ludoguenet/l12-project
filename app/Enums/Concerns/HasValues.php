<?php

declare(strict_types=1);

namespace App\Enums\Concerns;

trait HasValues
{
    public static function getValues(): array
    {
        return collect(self::cases())->map(fn ($level) => $level->value)->all();
    }
}
