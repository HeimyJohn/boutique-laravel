<?php

namespace Database\Factories;

use App\Models\Order;
use App\Models\ProductOrdered;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProductOrderedHasOrder>
 */
class ProductOrderedHasOrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'product_ordered_id' => $this->faker->randomElement(ProductOrdered::pluck('id')),
            'order_id' => $this->faker->randomElement(Order::pluck('id')),
            'quantity' => $this->faker->numberBetween(100, 1000),
        ];
    }
}
