<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Fiko Aditama',
            'email' => 'fikoaditama114@gmail.com',
            'password' => '12345678',
        ]);

        \App\Models\Barang::factory(50)->create();
    }
}
