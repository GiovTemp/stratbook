<?php

namespace App\Http\Controllers;

use App\Models\Map;
use App\Models\Ability;
use App\Models\Primary;
use App\Models\Operator;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct(){
        //$this -> middleware(['auth', 'is_admin']);
    }

    public function Dashboard(){
        return view ('admin.dashboard');
    }

    public function ShowMaps(){
        return view ('admin.maps.dashboard');
    }

    public function ShowInsertMap(){
        return view ('admin.maps.insert');
    }

    public function DeleteMap(Map $map){
        $map -> delete();
    }

    public function showOperators(){
        return view('admin.operators.dashboard');
    }

    public function ShowInsertOperator(){
        return view ('admin.operators.insert');
    }

    public function ShowEditMap(Map $map){
        return view ('admin.maps.edit', ['map'=>$map]);
    }
    
    public function showEditOperator(Operator $operator){
        return view('admin.operators.edit',['operator'=>$operator]);
    }

    public function showAbilities(){
        return view('admin.abilities.dashboard');
    }

    public function ShowInsertAbilities(Ability $ability){
        return view('admin.abilities.insert');
    }

    public function ShowEditAbility(Ability $ability){
        return view ('admin.abilities.edit', ['ability'=>$ability]);
    }

    public function showPrimaries(Primary $primary){
        return view('admin.primaries.dashboard');
    }

    public function showInsertPrimaries(Primary $primary){
        return view('admin.primaries.insert');
    }

    public function showEditPrimary(Primary $primary){
        return view('admin.primaries.edit', ['primary'=>$primary]);
    }
}
