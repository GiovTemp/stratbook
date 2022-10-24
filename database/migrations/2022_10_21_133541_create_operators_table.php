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
            $table->string('badge');
            $table->string('image');
            $table->longText('bio')->nullable();
            $table->longText('ability')->nullable();
            $table->string('armor_rating');
            $table->string('speed_rating');
            $table->string('type');
            $table->string('organization');
            $table->longText('gadgets')->nullable();
            $table->longText('primaries')->nullable();
            $table->longText('secondaries')->nullable();
            $table->timestamps();
        });

        $operators = json_decode(Storage::disk('local')->get('json/operators.json'));
        // $abilities =  json_decode(Storage::disk('local')->get('json/ability.json'));
        // $arr = [];

        // foreach ( $abilities as $obj ){
        //     $arr[$obj->_id] = json_encode($obj);    
        // }

        foreach ($operators as $operator) {
            Operator::create([
                'name' => $operator->name,
                'image' => $operator->image,
                'badge' => $operator->badge,
                'bio' => $operator->bio,
                'ability' => $operator->ability,
                'armor_rating' =>$operator->armor_rating,
                'speed_rating' =>$operator->speed_rating,
                'type' => $operator->type,
                'organization' => $operator->organization,
                'gadgets' => json_encode($operator->gadgets),
                'primaries' => json_encode($operator->primaries),
                'secondaries' => json_encode($operator->secondaries),


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

