<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('test', function () {
    return 'welcome to my first route';
});

// Route::get('user/{name}/{age}', function ($name, $age) {
//     return 'the username is :' . $name . ' and age is ' . $age;
// });

// Route::get('user/{name}/{age?}', function ($name, $age=0){
// if($age==0) {
//     return 'the username is :' . $name ;
// }
// else{
//     return 'the username is :' . $name . ' and age is ' . $age;
// }}
// );

Route::get ('user/{name}/{age?}',function($name,$age=0){
    $msg = 'the username is : ' . $name;
    if($age > 0){
        $msg .= ' and age is: ' . $age ;
    }
    return $msg ;
})->whereIn('name',['adam','ahmed']);

// ->where(['age'=>'[0-9]+' ,'name'=>'[a-zA-z0-9]+']);


Route::prefix('product')->group(function(){
    Route::get('/',function(){
        return'producy home page';
    });

    Route::get('laptop',function(){
        return'laptop page';
    });
    Route::get('camera',function(){
        return'camera page';
    });
    Route::get('phone',function(){
        return'phone page';
    });

}
);




Route::prefix('Web structure')->group(function(){
    Route::get('/',function(){
        return'Web structure home page';
    });

    Route::get('About',function(){
        return'About page';
    });
    Route::get('Contact us',function(){
        return'Contact us page';
    });
   Route::prefix('support')->group(function(){
    Route::get('/',function(){
        return'support home page';
    });

    Route::get('chat',function(){
        return'chat page';
    });
    Route::get('call',function(){
        return'call';
    });
    Route::get('ticket',function(){
        return'ticket page';
    });

}
);
 Route::prefix('traning')->group(function(){
    Route::get('/',function(){
        return'traning home page';
    });

    Route::get('HR',function(){
        return'HR page';
    });
    Route::get('ict',function(){
        return'ict';
    });
    Route::get('markting',function(){
        return'markting page';
    });
    Route::get('logistic',function(){
        return'ligistic page';
    });

}
);

}
);

 

