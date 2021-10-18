<?php

namespace Database\Seeders;

use App\Models\Year;
use Illuminate\Database\Seeder;

class YearSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Year::create([
           'year' => 2001, 
        ]);
        
        Year::create([
           'year' => 2002, 
        ]);
        
        Year::create([
           'year' => 2003, 
        ]);
        
        Year::create([
           'year' => 2004, 
        ]);
        
        Year::create([
           'year' => 2005, 
        ]);
    }
}