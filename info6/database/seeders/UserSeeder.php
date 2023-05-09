<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        User::insert([
            'role_id' => 1,
            'name' => 'Martín Vázquez',
            //'role' => 'Administrador',
            'email' => 'martin@gmail.com',
            'password' => bcrypt('#Unicode0')
        ]);
        
    }
}
