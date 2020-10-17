<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class bitacoraController extends Controller
{
    //


    public function index(Request $Request){

        return view('datos'); 
    }

    public function generateLayout(Request $Request){
        return view('plantilla',['datos'=> $Request]);
    }
}
