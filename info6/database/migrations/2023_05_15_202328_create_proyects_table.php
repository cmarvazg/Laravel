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
        Schema::create('proyects', function (Blueprint $table) {
            $table->id();
            $table->foreignId('transaction_id')->nullable();
            $table->string('name');
            $table->date('date');
            $table->decimal('subtotal');
            $table->decimal('iva');
            $table->decimal('total');
            $table->string('concept');
            $table->string('comment');
            $table->softDeletes($colum = 'deleted_at', $precision = 0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('proyect', function(Blueprint $table){
            $table->dropColum('deleted_at');
        });
    }
};
