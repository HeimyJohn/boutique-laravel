<?php

namespace Database\Seeders;

use App\Models\ProductOrdered;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductOrderedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProductOrdered::factory(10)->create();
    }
}
