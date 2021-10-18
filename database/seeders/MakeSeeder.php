<?php

namespace Database\Seeders;

use App\Models\Make;
use Illuminate\Database\Seeder;

class MakeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Make::create([
            'name' => 'Toyota'
        ]);
        Make::create([
            'name' => 'Honda'
        ]);
        Make::create([
            'name' => 'BMW'
        ]);
        Make::create([
            'name' => 'Benz'
        ]);
    }
}