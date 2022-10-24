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
        Schema::create('primaries', function (Blueprint $table) {
            $table->id();
            $table->string('firemodes');
            $table->longText('sights');
            $table->longText('barrels');
            $table->longText('grips');
            $table->string('underbarrels');
            $table->string('_id');
            $table->string('name');
            $table->string('image');
            $table->string('type');
            $table->integer('__v');
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
        Schema::dropIfExists('primaries');
    }
};
