<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\RoleSeeder;
use Database\Seeders\UserSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(1000)->create();

        \App\Models\User::factory()->create([
            'name' => 'Fiko Aditama',
            'email' => 'fikoaditama114@gmail.com',
            'password' => '12345678',
        ]);

        \App\Models\Barang::factory(500)->create();

        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);        
    }
}
