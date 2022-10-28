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
            $table->longText('description');
            $table->string('image');
            $table->integer('uses');
            $table->integer('__v') -> nullable();
            $table->timestamps();
        });

   $abilities = json_decode(Storage::disk('local')->get('json/ability.json'));

    foreach($abilities as $ability){
        Ability::create([
            '_id' => $ability->_id,
            'name' => $ability->name,
            'description' => $ability->description,
            'image' => $ability->image,
            'uses' => $ability->uses,
            '__v' => $ability -> __v,
        ]);
    }

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
