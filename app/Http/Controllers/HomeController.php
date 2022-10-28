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

    }
}
