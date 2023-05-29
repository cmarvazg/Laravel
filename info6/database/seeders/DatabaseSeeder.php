<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;
use App\Models\TypeTransaction;
use App\Models\Transaction;
use App\Models\TypePerson;
use App\Models\Proyect;
use App\Models\Person;
use App\Models\User;
use App\Models\Role;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call([
            RoleSeeder::class,
            //ProyectSeeder::class,
            TypePersonSeeder::class,
            //PersonSeeder::class,
            TypeTransactionSeeder::class,
            //TransactionSeeder::class,
            UserSeeder::class
        ]);
    }
}
