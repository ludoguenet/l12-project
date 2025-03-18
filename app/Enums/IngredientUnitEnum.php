<?php

namespace App\Enums;

use App\Enums\Concerns\HasValues;

enum IngredientUnitEnum: string
{
    use HasValues;

    case GRAMME = 'g';
    case KILOGRAMME = 'kg';
    case MILLILITRE = 'ml';
    case LITRE = 'l';
    case CUILLERE_A_CAFE = 'c. à café';
    case CUILLERE_A_SOUPE = 'c. à soupe';
    case TASSE = 'tasse';
    case PINCEE = 'pincée';
    case UNITE = 'unité';
    case GOUSSE = 'gousse';
    case BOUQUET = 'bouquet';
    case TRANCHE = 'tranche';
    case FEUILLE = 'feuille';
    case BRIN = 'brin';
    case POIGNEE = 'poignée';
    case ZESTE = 'zeste';
    case MORCEAU = 'morceau';

    public function label(): string
    {
        return match($this) {
            self::GRAMME => 'Gramme',
            self::KILOGRAMME => 'Kilogramme',
            self::MILLILITRE => 'Millilitre',
            self::LITRE => 'Litre',
            self::CUILLERE_A_CAFE => 'Cuillère à café',
            self::CUILLERE_A_SOUPE => 'Cuillère à soupe',
            self::TASSE => 'Tasse',
            self::PINCEE => 'Pincée',
            self::UNITE => 'Unité',
            self::GOUSSE => 'Gousse',
            self::BOUQUET => 'Bouquet',
            self::TRANCHE => 'Tranche',
            self::FEUILLE => 'Feuille',
            self::BRIN => 'Brin',
            self::POIGNEE => 'Poignée',
            self::ZESTE => 'Zeste',
            self::MORCEAU => 'Morceau',
        };
    }

    public static function getForSelect(): array
    {
        return collect(self::cases())->map(function ($unit) {
            return [
                'value' => $unit->value,
                'label' => $unit->label()
            ];
        })->all();
    }
}
