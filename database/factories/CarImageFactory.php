<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CarImage>
 */
class CarImageFactory extends Factory
{
    public function definition(): array
    {
        return [
            'image_path' => fake()->imageUrl(),
            'position' => 1,  // Default, will be overridden by Seeder's sequence
        ];
    }
}
