<?php

namespace Database\Seeders;

use App\Models\Map;
use App\Models\Gadget;
use App\Models\Ability;
use App\Models\Primary;
use App\Models\Operator;
use App\Models\Secondary;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use App\Models\Assignment\Gadget_Assignment;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Assignment\Primary_Assignment;
use App\Models\Assignment\Secondary_Assignment;
use App\Models\Images\AbilityImage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
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

        $primaries = json_decode(Storage::disk('local')->get('json/weapons.json'));

        foreach ($primaries as $primary){
            if($primary->assignment == 'primary'){
                Primary::create([
                    'firemodes' => json_encode($primary -> firemodes),
                    'sights' => json_encode($primary -> sights),
                    'barrels' => json_encode($primary -> barrels),
                    'grips' => json_encode($primary -> grips),
                    'underbarrel' => json_encode($primary-> underbarrel),
                    '_id' => $primary -> _id,
                    'name' => $primary -> name,
                    'image' => $primary -> image,
                    'type' => $primary -> type,
                    '__v' => $primary -> __v,
                ]);
            }
        }

        $abilities = json_decode(Storage::disk('local')->get('json/ability.json'));

        foreach($abilities as $ability){
            $a=Ability::create([
                '_id' => $ability->_id,
                'name' => $ability->name,
                'description' => $ability->description,
                'uses' => $ability->uses,
                '__v' => $ability -> __v,
            ]);

            $a->images()->create(['path'=>$ability->image , 'ability_id'=>$a->id]);
        }
    

        $maps = json_decode(Storage::disk('local')->get('json/maps.json')) -> maps;
        foreach ($maps as $map) {
            Map::create(['name' => $map]);
        }

        $gadgets = json_decode(Storage::disk('local')->get('json/gadgets.json'));

        foreach($gadgets as $gadget){
            Gadget::create([
                '_id' => $gadget->_id,
                'name' => $gadget->name,
                'description' => $gadget->description,
                'image' => $gadget->image,
                'assignment' => $gadget->assignment,
                'uses' => $gadget->uses,
                '__v' => $gadget -> __v,
            ]);
        }

        $operators = json_decode(Storage::disk('local')->get('json/operators.json'));

        foreach ($operators as $operator) {
            $temp = Operator::create([
                'name' => $operator->name,
                'image' => $operator->image,
                'badge' => $operator->badge,
                'bio' => $operator->bio,
                'ability_id' => Ability::where('_id','=',$operator->ability)->first()['id'],
                'armor_rating' =>$operator->armor_rating,
                'speed_rating' =>$operator->speed_rating,
                'type' => $operator->type,
                'organization' => $operator->organization,
            ]);

            foreach($operator->gadgets as $gadget){
                Gadget_Assignment::create([
                    'operator_id'=>$temp->id,
                    'gadget_id'=>Gadget::where('_id',$gadget->_id)->first()['id']
                ]);
            }

            foreach($operator->primaries as $primary){
                Primary_Assignment::create([
                    'operator_id'=>$temp->id,
                    'primary_id'=>Primary::where('_id',$primary->_id)->first()['id']
                ]);

            }

            foreach($operator->secondaries as $secondary){
                Secondary_Assignment::create([
                    'operator_id'=>$temp->id,
                    'secondary_id'=>Secondary::where('_id',$secondary->_id)->first()['id']
                ]);
            }



        }
    }
}
