<?php

namespace App\Http\Controllers;


use App\Models\Gadget;
use App\Models\Ability;
use App\Models\Primary;
use App\Models\Operator;
use App\Models\Secondary;
use App\Models\Assignment\Gadget_Assignment;
use App\Models\Assignment\Primary_Assignment;
use App\Models\Assignment\Secondary_Assignment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class HomeController extends Controller {
    public function Home(){

        return view('home');
        
    }
    
    public function prova(){

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
                    'operator_id'=>'1',
                    'gadget_id'=>'1'
                ]);
            }




        }

    }
}
