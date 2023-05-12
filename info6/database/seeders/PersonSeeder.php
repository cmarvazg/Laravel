<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Person;

class PersonSeeder extends Seeder
{
    public function run()
    {
        Person::insert
        (
            [
                [
                    'type_person_id' => 1,
                    'business_name' => 'SA',
                    'person' => 'Física',
                    'rfc' => 'CLIEN780425J87',
                    'home' => 'Zihuatanejo no. 106',
                    'email' => 'parsona1@gmail.com',
                    'phone' => '5547353499'
                ],
                [
                    'type_person_id' => 2,
                    'business_name' => 'SA de CV',
                    'person' => 'Moral',
                    'rfc' => 'PROVE910305JX1',
                    'home' => 'Atlacomulto no. 100',
                    'email' => 'parsona2@gmail.com',
                    'phone' => '5573223797'
                ]
            ]
        );
    }
}
