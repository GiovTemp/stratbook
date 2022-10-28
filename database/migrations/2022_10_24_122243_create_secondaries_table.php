<?php

use App\Models\Secondary;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('secondaries', function (Blueprint $table) {
            $table->id();
            $table->longText('firemodes');
            $table->longText('sights');
            $table->longText('barrels');
            $table->longText('grips');
            $table->longText('underbarrel');
            $table->string('_id') -> nullable();
            $table->string('name');
            $table->string('image');
            $table->string('type');
            $table->integer('__v') -> nullable();
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
        Schema::dropIfExists('secondaries');
    }
};
