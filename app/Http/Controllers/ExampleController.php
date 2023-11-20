<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
    public function test1(){
        return view ("login");
    }

        public function login(){
        return view ("login");
        
    }
    public function recive(Request $request){
        $msg="your email is" .$request['email'] . "<br> password is" .$request['pwd'];
        return $msg;
        
    }

    
}
    

