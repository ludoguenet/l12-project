<?php

declare(strict_types=1);

namespace App\Enums;

use App\Enums\Concerns\HasValues;

enum RecipeLevelEnum: string
{
    use HasValues;

    case EASY = 'facile';
    case MEDIUM = 'moyen';
    case HARD = 'difficile';
    case LEGENDARY = 'légendaire!';
}
