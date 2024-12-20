<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->name(),
            'description' => fake()->unique()->safeEmail(),
            'image' => fake()->name(),
            'price' => random_int(100,1500),
            'category' => fake()->name(),
            'quantity' => random_int(100,1500),
        ];
    }
}
