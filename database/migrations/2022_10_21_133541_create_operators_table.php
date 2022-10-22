<?php

use App\Models\Operator;
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
            $table->string('armor');
            $table->string('speed');
            $table->longText('primary');
            $table->longText('secondary');
            $table->longText('gadget');
            $table->longText('ability');
            $table->timestamps();
        });

        $operators = json_decode(Storage::disk('local')->get('json/operators.json'));
        $abilities =  json_decode(Storage::disk('local')->get('json/ability.json'));
        $arr = [];

        foreach ( $abilities as $obj ){
            $arr[$obj->_id] = json_encode($obj);    
        }

        foreach ($operators as $operator) {
            Operator::create([
                'name' => $operator->name,
                'speed' =>$operator->speed_rating,
                'armor' =>$operator->armor_rating,
                'primary' => json_encode($operator->primaries),
                'secondary' => json_encode($operator->secondaries),
                'gadget' => json_encode($operator->gadgets),
                'ability' => json_encode($arr[$operator->ability]),
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
        Schema::dropIfExists('operators');
    }
};

