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
        Schema::create('transaccions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tipo_transaccion_id')->constrained();
            $table->foreignId('persona_id')->constrained();
            $table->decimal('monto');
            $table->date('fecha');
            $table->string('metodo');
            $table->string('referencia');
            $table->softDeletes($colum = 'deleted_at', $precision = 0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('transaccion', function(Blueprint $table){
            $table->dropColum('deleted_at');
        });
    }
};
