<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('personas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tipo_persona_id')->constrained();
            $table->string('razon_social');
            $table->string('persona');
            $table->string('rfc');
            $table->string('domicilio');
            $table->string('email');
            $table->string('telefono');
            $table->softDeletes($colum = 'deleted_at', $precision = 0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('persona', function(Blueprint $table){
            $table->dropColum('deleted_at');
        });
    }
};
