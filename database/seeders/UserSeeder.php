<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'email' => 'exemple@root.com',
            'password' => '0000',
            'roles_id' => Role::where('access', 'admin')->first()->id,
        ]);
        User::factory(10)->create();
    }
}
