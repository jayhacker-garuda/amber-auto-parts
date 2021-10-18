<?php

namespace Database\Seeders;

use App\Models\AutoPart;
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
        $this->call([
            UserSeeder::class,
            CategorySeeder::class,
            YearSeeder::class,
            MakeSeeder::class,
            CarModelSeeder::class,
            AutoPartSeeder::class
        ]);
    }
}