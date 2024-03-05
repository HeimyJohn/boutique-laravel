<?php

namespace Database\Seeders;

use App\Models\ProductOrderedHasOrder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductOrderedHasOrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProductOrderedHasOrder::factory(10)->create();
    }
}
