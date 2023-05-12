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
        Schema::create('people', function (Blueprint $table) {
            $table->id();
            $table->foreignId('type_person_id')->constrained();
            $table->string('business_name');
            $table->string('person');
            $table->string('rfc');
            $table->string('home');
            $table->string('email');
            $table->string('phone');
            $table->softDeletes($colum = 'deleted_at', $precision = 0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('people', function(Blueprint $table){
            $table->dropColum('deleted_at');
        });
    }
};
