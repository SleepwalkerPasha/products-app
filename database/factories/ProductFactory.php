<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

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
        $categoryIds = DB::table('categories')->pluck('id');
        $name = fake()->sentence(3);
        return [
            'name' => $name,
            'code' => Str::slug($name, '-'),
            'description' => fake()->text(255),
            'created_at' => now(),
            'price' => fake()->randomFloat(),
            'img_path' => fake()->text(100),
            'count' => fake()->randomDigitNotNull(),
            'category_id' => fake()->randomElement($categoryIds)
        ];
    }
}