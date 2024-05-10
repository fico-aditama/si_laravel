<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Supplier;

class SupplierSeeder extends Seeder
{
    public function run()
    {
        Supplier::create([
            'kd_supp' => 'S1',
            'nm_supp' => 'Supplier 1',
            'alamat' => '123 Main Street',
            'telepon' => '123456789'
        ]);

        Supplier::create([
            'kd_supp' => 'S2',
            'nm_supp' => 'Supplier 2',
            'alamat' => '456 Elm Street',
            'telepon' => '987654321'
        ]);
    }
}
