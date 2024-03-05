<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\User;
use App\Models\Vat;
use Illuminate\Database\Seeder;
use phpDocumentor\Reflection\Types\Integer;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call([
            VatSeeder::class,
            CategorySeeder::class,
            RoleSeeder::class,
            ProductSeeder::class,
            UserSeeder::class,
            CommentSeeder::class,
            AddressSeeder::class,
            OrderSeeder::class,
            ProductOrderedSeeder::class,
            ProductOrderedHasOrderSeeder::class,
        ]);

    }
}
