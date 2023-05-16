<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Proyect;

class ProyectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Proyect::insert
        (
            [
                [
                    'transaction_id' => null,
                    'name' => 'Proyecto 1',
                    'date' => '2023-05-01',
                    'subtotal' => 100.00,
                    'iva' => 16.00,
                    'total' => 116.00,
                    'concept' => 'Concepto del proyecto 1',
                    'comment' => 'Comentario del proyecto 1',
                ],
                [
                    'transaction_id' => null,
                    'name' => 'Proyecto 2',
                    'date' => '2023-05-05',
                    'subtotal' => 150.00,
                    'iva' => 24.00,
                    'total' => 174.00,
                    'concept' => 'Concepto del proyecto 2',
                    'comment' => 'Comentario del proyecto 2',
                ]
            ]
        );
    }
}
