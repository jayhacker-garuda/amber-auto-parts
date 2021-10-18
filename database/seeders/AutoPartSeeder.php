<?php

namespace Database\Seeders;

use App\Models\AutoPart;
use Illuminate\Database\Seeder;

class AutoPartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AutoPart::create([
            'user_id' => 1,
            'item_name' => 'Benz Battery',
            'model_id' => 3,
            'category_id' => 1,
            'price' => 2500,
            'description' => 'Ready to use right now!!!',
            'condition' => 'New-Parts',
            'fitment_model_id' => 2,
        ]);
        
        AutoPart::create([
            'user_id' => 3,
            'item_name' => 'Honda Engine',
            'model_id' => 2,
            'category_id' => 3,
            'price' => 10000,
            'description' => 'Ready to use right now!!!',
            'condition' => 'New-Parts',
            'fitment_model_id' => 1,
        ]);
        
        AutoPart::create([
            'user_id' => 2,
            'item_name' => 'Honda Battery',
            'model_id' => 1,
            'category_id' => 1,
            'price' => 5000,
            'description' => 'Ready to use right now!!!',
            'condition' => 'New-Parts',
            'fitment_model_id' => 2,
        ]);
    }
}