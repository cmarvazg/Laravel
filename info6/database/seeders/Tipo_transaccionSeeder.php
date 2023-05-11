<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tipo_transaccion;

class Tipo_transaccionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Tipo_transaccion::insert([['tipo' => 'Anticipo'],['tipo' => 'Pago']]);
    }
}
