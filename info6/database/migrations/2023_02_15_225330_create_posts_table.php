<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title',500)->nullable();
            $table->string('url_clean',500)->nullable();
            $table->text('content')->nullable();
            $table->enum('posted', ['yes', 'no'])->nullable()->default('no');
            $table->integer('category_id')->unsigned()->nullable();
            $table->softDeletes($colum = 'deleted_at', $precision = 0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Schema::dropIfExists('posts');
        Schema::table('post', function(Blueprint $table){
            $table->dropColum('deleted_at');
        });
    }
};
