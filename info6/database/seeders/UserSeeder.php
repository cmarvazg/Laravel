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
        User::insert
        (
            [
                [
                    'role_id' => 1,
                    'proyect_id' => null,
                    'name' => 'Cristian Martín',
                    'dad_last_name' => 'Vázquez',
                    'mom_last_name' => 'González',
                    'email' => 'martin@gmail.com',
                    'password' => bcrypt('#Unicode0')
                ],
                /*[
                    'role_id' => 2,
                    'proyect_id' => 2,
                    'name' => 'Carolina',
                    'dad_last_name' => 'Trejo',
                    'mom_last_name' => 'Islas',
                    'email' => 'carolina@gmail.com',
                    'password' => bcrypt('#Laravel0')
                ]*/
            ]
        );
    }
}
