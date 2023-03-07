<?php

namespace Database\Factories;
use App\Models\Bookmark;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Bookmark>
 */
class BookmarkFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            "title" => fake()->title(),
            "url" => fake()->url(),
            "description" => fake()->realText(fake()->numberBetween(50, 255)),
        ];
    }
}
