<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Barang>
 */
class BarangFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'kd_brg' => $this->faker->unique()->numberBetween(1, 1000), // Generate a unique random number
            'nm_brg' => $this->faker->words($nb = 3, $asText = true), // Generate a string of 3 random words
            'harga' => $this->faker->numberBetween(1000, 100000), // Generate random price within a range
            'stok' => $this->faker->numberBetween(0, 100), // Generate random stock within a range
        ];
    }
}
