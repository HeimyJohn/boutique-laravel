<?php

namespace Database\Factories;

use App\Models\Order;
use App\Models\OrderedProduct;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\OrderedProductHasOrder>
 */
class OrderedProductHasOrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'ordered_product_id' => $this->faker->randomElement(OrderedProduct::pluck('id')),
            'order_id' => $this->faker->randomElement(Order::pluck('id')),
            'quantity' => $this->faker->numberBetween(100, 1000),
        ];
    }
}
