<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\Common;

class ExampleController extends Controller

{
    use Common;
    public function test1(){
        return view ("login");
    }

        public function login(){
        return view ("login");
        
    }
    
    public function showupload(){
        return view ("upload");
        
    }

    public function upload(Request $request){
        // $file_extension = $request->image->getClientOriginalExtension();
        // $file_name = time() . '.' . $file_extension;
        // $path = 'assets/images';
        // $request->image->move($path, $file_name);

     // return dd($request->image);
     $photo=$this->uploadFile($request->image, 'assets/images');
     return $photo;


    }


    public function recive(Request $request){
        $msg="your email is" .$request['email'] . "<br> password is" .$request['pwd'];
        return $msg;
        
    }

    
}
    

