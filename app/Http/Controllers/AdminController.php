<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Map;

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
}
