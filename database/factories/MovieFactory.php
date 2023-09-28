<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Movie>
 */
class MovieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(),
            'year' => $this->faker->numberBetween(1900, 2023),
            'synopsis' => $this->faker->paragraph(),
            'cover' => 'https://source.unsplash.com/random/200x300',
            
        ];
    }
}
