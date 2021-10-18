<?php

namespace Database\Seeders;

use App\Models\CarModel;
use Illuminate\Database\Seeder;

class CarModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CarModel::create([
            'name' => 'Civic',
            'make_id' => 2,
            'year_id' => 3,
        ]);
        
        CarModel::create([
            'name' => 'CRV',
            'make_id' => 2,
            'year_id' => 4,
        ]);
        CarModel::create([
            'name' => 'G-Class',
            'make_id' => 3,
            'year_id' => 5,
        ]);
        CarModel::create([
            'name' => 'S-Class',
            'make_id' => 3,
            'year_id' => 4,
        ]);
    }
}