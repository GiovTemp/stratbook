<?php

use App\Models\Ability;
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
        Schema::create('abilities', function (Blueprint $table) {
            $table->id();
            $table->string('_id') -> nullable();
            $table->string('name');
            $table->longText('description') -> nullable();
            $table->longText('images') -> nullable();
            $table->integer('uses') -> nullable();
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
        Schema::dropIfExists('abilities');
    }
};
