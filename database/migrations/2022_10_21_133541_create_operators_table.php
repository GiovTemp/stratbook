<?php

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
        Schema::create('operators', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('badge')->nullable();
            $table->string('image')->nullable();
            $table->longText('bio')->nullable();
            $table->foreignId('ability_id')->constrained();            
            $table->string('armor_rating');
            $table->string('speed_rating');
            $table->string('type');
            $table->string('organization');
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
        Schema::dropIfExists('operators');
    }
};

