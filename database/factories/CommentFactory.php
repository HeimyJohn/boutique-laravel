<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'comment_text' => $this->faker->sentences(3, true),
            'user_id' => $this->faker->randomElement(User::pluck('id')),
            'product_id' => $this->faker->randomElement(Product::pluck('id')),
        ];
    }
}
