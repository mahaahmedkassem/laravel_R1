<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarlistController extends Controller
{
    public function test2(Request $request){
       
        return view ("addcar ");
       
        
    }
}
