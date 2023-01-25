<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller

{

    public function __construct()
    {
        $this->middleware('auth');
    }
    //Ath Middleware Security Check

    //Return to Dash Board
    public function Index(){
        return view('dashboard');
    }
}
