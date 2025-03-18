<?php

namespace Database\Factories;

use App\Enums\RecipeLevelEnum;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Recipe>
 */
class RecipeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $title = fake()->sentence(),
            'slug' => str($title)->slug(),
            'level' => fake()->randomElement(RecipeLevelEnum::cases()),
            'image' => fake()->imageUrl(),

            'description' => fake()->paragraph(),

            'duration' => random_int(30, 120),
            'people' => random_int(2, 10),

            'user_id' => User::factory(),
        ];
    }
}
