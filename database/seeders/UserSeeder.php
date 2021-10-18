<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
           'name' => 'John Game',
           'email' => 'johngame@gmail.com',
           'user_type' => 'seller',
           'password' => bcrypt('jayspades')
        ]);
        
        User::create([
           'name' => 'James Brown',
           'email' => 'jamesbrown@gmail.com',
           'user_type' => 'seller',
           'password' => bcrypt('jayspades')
        ]);
        
        User::create([
           'name' => 'John Legend',
           'email' => 'johnlegend@gmail.com',
           'user_type' => 'seller',
           'password' => bcrypt('jayspades')
        ]);
    }
}