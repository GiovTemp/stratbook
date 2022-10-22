<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Map;

class AdminController extends Controller
{
    public function __construct(){
        $this -> middleware('auth');
    }

    public function Dashboard(){
        return view ('admin.dashboard');
    }

    public function ShowMaps(){
        $maps = Map::all();
        return view ('admin.maps.dashboard', compact("maps"));
    }

    public function ShowInsertMap(){
        return view ('admin.maps.insert');
    }

    public function AddMap(Request $request){
        Map::create(['name' => $request -> name]);
    }

}
