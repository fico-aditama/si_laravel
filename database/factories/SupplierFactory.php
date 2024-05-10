<?php

namespace Database\Factories;

use App\Models\Supplier;
use Illuminate\Database\Eloquent\Factories\Factory;

class SupplierFactory extends Factory
{
    protected $model = Supplier::class;

    public function definition()
    {
        return [
            'kd_supp' => $this->faker->unique()->regexify('[A-Z0-9]{5}'),
            // 'nm_supp' => $this->faker->company,
            // 'alamat' => $this->faker->address,
            // 'telepon' => $this->faker->phoneNumber

            'nm_supp' => $this->faker->word(),
            'alamat' => $this->faker->unique()->regexify('[A-Z0-9]{5}'),
            'telepon' => $this->faker->unique()->regexify('[0-9]{5}'),
        ];
    }
}
