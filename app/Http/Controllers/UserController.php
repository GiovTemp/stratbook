<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller{

    public function __construct(){
        $this -> middleware('auth');
    }

    public function Dashboard(){
        return view ('user.dashboard');
    }

    
}
