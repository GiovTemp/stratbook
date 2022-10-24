<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Map;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maps', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->longText('images')->nullable();
            $table->longText('description')->nullable();
            $table->string('year')->nullable();
            $table->timestamps();
        });

        $maps = json_decode(Storage::disk('local')->get('json/maps.json')) -> maps;
        foreach ($maps as $map) {
            Map::create(['name' => $map]);
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('maps');
    }
};
