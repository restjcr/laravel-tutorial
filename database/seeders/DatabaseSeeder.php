<?php

namespace Database\Seeders;

use App\Models\Products;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Products::create([
            'name' => 'Escoba',
            'price' => 10.00,
            'quantity' => 20
        ]);

        Products::create([
            'name' => 'Recogedor',
            'price' => 8.00,
            'quantity' => 20
        ]);
    }
}
