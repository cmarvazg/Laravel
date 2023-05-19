<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('type_transaction_id')->constrained();
            $table->foreignId('proyect_id')->constrained();
            $table->foreignId('person_id')->constrained();
            $table->decimal('amount');
            $table->date('date');
            $table->string('method');
            $table->string('reference');
            $table->softDeletes($colum = 'deleted_at', $precision = 0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('transaction', function(Blueprint $table){
            $table->dropColum('deleted_at');
        });
    }
};
