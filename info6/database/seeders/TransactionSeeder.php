<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Transaction;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Transaction::insert
        (
            [
                [
                    'type_transaction_id' => 1,
                    'person_id' => 1,
                    'amount' => 100,
                    'date' => '2023-05-01',
                    'method' => 'Depósito',
                    'reference' => 'DEP-2023-ABC123',
                ],
                [
                    'type_transaction_id' => 2,
                    'person_id' => 2,
                    'amount' => 200,
                    'date' => '2023-05-02',
                    'method' => 'Transferencia',
                    'reference' => 'TRF-2023-XYZ789',
                ]               
            ]
        );
    }
}
