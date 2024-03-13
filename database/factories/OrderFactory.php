<?php

namespace Database\Factories;

use App\Models\Address;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'order_number' => $this->faker->unique()->sentence(1, true),
            'order_date' => $this->faker->dateTime('now'),
            'status' => $this->faker->randomElement(['created', 'paid', 'shipped', 'delivered', 'canceled']),
            'total' => 0,
            'user_id' => $this->faker->randomElement(User::pluck('id')),
            'billing_address_id' => $this->faker->randomElement(Address::pluck('id')),
            'delivery_address_id' => $this->faker->randomElement(Address::pluck('id')),
        ];
    }
}
