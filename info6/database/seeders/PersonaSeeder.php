<?php

namespace Database\Seeders;

use App\Models\Persona;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PersonaSeeder extends Seeder
{
    public function run()
    {
        Persona::insert([
            'tipo_persona_id' => 1,
            'razon_social' => 'Sociedad anónima',
            'persona' => 'Física',
            'rfc' => 'LOCM780425J87',
            'domicilio' => 'Puerto Zihuatanejo no. 106',
            'email' => 'parsona1@gmail.com',
            'telefono' => '5547353499'
        ]);
    }
}
