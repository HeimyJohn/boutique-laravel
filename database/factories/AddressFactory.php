<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Address>
 */
class AddressFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'way_number'    => fake()->numberBetween(1,200),
            'way'           => fake()->streetName(),
            'postal_code'   => fake()->postcode(),
            'city'          => fake()->city(),
            'country'       => fake()->country(),
            'user_id'       => User::query()->inRandomOrder()->first()?->id ?? User::factory(),
        ];
    }
}
