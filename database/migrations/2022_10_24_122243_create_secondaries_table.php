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
            $table->string('_id');
            $table->string('name');
            $table->string('image');
            $table->string('type');
            $table->integer('__v');
            $table->timestamps();
        });

        $secondaries = json_decode(Storage::disk('local')->get('json/weapons.json'));

        foreach ($secondaries as $secondary){
            if($secondary->assignment == 'secondary'){
                Secondary::create([
                    'firemodes' => json_encode($secondary -> firemodes),
                    'sights' => json_encode($secondary -> sights),
                    'barrels' => json_encode($secondary -> barrels),
                    'grips' => json_encode($secondary -> grips),
                    'underbarrel' => json_encode($secondary-> underbarrel),
                    '_id' => $secondary -> _id,
                    'name' => $secondary -> name,
                    'image' => $secondary -> image,
                    'type' => $secondary -> type,
                    '__v' => $secondary -> __v,
                ]);
            }
        }
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
