<?php

namespace Database\Factories;

use App\Models\Vat;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProductOrderedFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->sentence(5, true),
            'price' => $this->faker->numberBetween(number_format(50, 2, "."), number_format(250, 2, ".")),
            'vat_id' => $this->faker->randomElement(Vat::pluck('id')),
        ];
    }
}
