<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
        $name = fake()->sentence(10);
        return [
            'name' => $name,
            'code' => Str::slug($name, '-'),
            'description' => fake()->text(255),
            'createdAt' => now(),
            'price' => fake()->randomFloat(),
            'imgPath' => fake()->text(100),
            'count' => fake()->randomDigitNotNull()
        ];
    }
}