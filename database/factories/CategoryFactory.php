<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = fake()->sentence(3);
        return [
            'name' => $name,
            'code' => Str::slug($name, '-'),
            'activity' => fake()->boolean(),
            'parent_category' => fake()->sentence(5),
            'created_at' => now()
        ];
    }
}
