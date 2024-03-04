<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Vat;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
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
            'name' => $this->faker->sentence(5, true),
            'price' => $this->faker->numberBetween(number_format(50, 2, "."), number_format(250, 2, ".")),
            'description' => $this->faker->sentences(5, true),
            'stock' => $this->faker->numberBetween(2500, 10000),
            'vat_id' => $this->faker->randomElement(Vat::pluck('id')),
            'category_id' => $this->faker->randomElement(Category::pluck('id')),
        ];
    }
}
