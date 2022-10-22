<?php

namespace App\Http\Controllers;


use App\Models\Operator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class HomeController extends Controller {
    public function Home(){

        return view('home');
        
    }   
}
