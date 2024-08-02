<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Samar Haider',
            'password' => '12345678',
            'email' => 'admin@samar.com',
            'type' => User::ADMIN,
        ]);
        User::factory()->create([
            'name' => 'Samar Haider',
            'password' => '12345678',
            'email' => 'customer1@samar.com',
            'type' => User::CUSTOMER,
        ]);
        User::factory()->create([
            'name' => 'Samar Haider',
            'password' => '12345678',
            'email' => 'customer2@samar.com',
            'type' => User::CUSTOMER,
        ]);
    }
}
