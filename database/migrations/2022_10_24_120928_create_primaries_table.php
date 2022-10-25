<?php

use App\Models\Primary;
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

        $primaries = json_decode(Storage::disk('local')->get('json/weapons.json'));

        foreach ($primaries as $primary){
            if($primary->assignment == 'primary'){
                Primary::create([
                    'firemodes' => $primary -> firemodes,
                    'sights' => $primary -> sights,
                    'barrels' => $primary -> barrels,
                    'grips' => $primary -> grips,
                    'underbarrels' => $primary->underbarrels,
                    '_id' => $primary -> _id,
                    'name' => $primary -> name,
                    'image' => $primary -> image,
                    'type' => $primary -> type,
                    '__v' => $primary -> __v,
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
        Schema::dropIfExists('primaries');
    }
};
