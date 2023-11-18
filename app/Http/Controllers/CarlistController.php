<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarlistController extends Controller
{
    public function test2(Request $request){
        $title = $_POST['title'];
        $price =  $_POST['price'];
        return view ("addcar ")
        ->with('title', $title)
                    ->with('price', $price);;
        
    }
}
