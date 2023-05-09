<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tipo_persona;

class Tipo_personaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Tipo_persona::insert([['tipo' => 'Cliente'],['tipo' => 'Proveedor']]);
    }
}
