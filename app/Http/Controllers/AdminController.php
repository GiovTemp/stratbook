<?php

namespace App\Http\Controllers;

use App\Models\Map;
use App\Models\Operator;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct(){
        $this -> middleware(['auth', 'is_admin']);
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
}
