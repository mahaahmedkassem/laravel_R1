<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExampleController;
use App\Http\Controllers\CarlistController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\addcar;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\news;
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

// Route::get('test', function () {
//     return 'welcome to my first route';
// });

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

// Route::get ('user/{name}/{age?}',function($name,$age=0){
//     $msg = 'the username is : ' . $name;
//     if($age > 0){
//         $msg .= ' and age is: ' . $age ;
//     }
//     return $msg ;
// })->whereIn('name',['adam','ahmed']);
 
// ->where(['age'=>'[0-9]+' ,'name'=>'[a-zA-z0-9]+']);


// Route::prefix('product')->group(function(){
//     Route::get('/',function(){
//         return'producy home page';
//     });

//     Route::get('laptop',function(){
//         return'laptop page';
//     });
//     Route::get('camera',function(){
//         return'camera page';
//     });
//     Route::get('phone',function(){
//         return'phone page';
//     });

// }
// );




// Route::prefix('Web structure')->group(function(){
//     Route::get('/',function(){
//         return'Web structure home page';
//     });

//     Route::get('About',function(){
//         return'About page';
//     });
//     Route::get('Contact us',function(){
//         return'Contact us page';
//     });
//    Route::prefix('support')->group(function(){
//     Route::get('/',function(){
//         return'support home page';
//     });

//     Route::get('chat',function(){
//         return'chat page';
//     });
//     Route::get('call',function(){
//         return'call';
//     });
//     Route::get('ticket',function(){
//         return'ticket page';
//     });

// }
// );

//  Route::prefix('traning')->group(function(){
//     Route::get('/',function(){
//         return'traning home page';
//     });

//     Route::get('HR',function(){
//         return'HR page';
//     });
//     Route::get('ict',function(){
//         return'ict page';
//     });
//     Route::get('markting',function(){
//         return'markting page';
//     });
//     Route::get('logistic',function(){
//         return'ligistic page';
//     });

// }
// );



Route::get('cv', function () {
    return view('cv');
});
  



// Route::get('login', function () {
//     return view('login');
// });

// Route::post('receive', function () {
//     return 'data received';
// })->name('recive');

Route::get('login',[ExampleController::class, 'login']);
Route::post('test1',[ExampleController::class, 'recive'])->name('recive');
//أول واحده اسم ال url 
//تاني واحده الاسم الي في الكونترولر
//اسم الراوت هو الي في الاكشن في صفحة البلاد

// Route::get('addcar', function () {
//     return view('addcar');
// });

// Route::post('caradder', function () {
//     return $_POST['title'] ;
    
// })->name('caradded');

Route::get('test2',[CarlistController ::class, 'test2']);



Route::get('addshow',[CarController ::class, 'create']);// يعرض ألنموذج
Route::post('cars',[CarController ::class, 'store'])->name('cars');
 
// //if(isset($request->published)){
//     $cars->published = true;
// }else{
//     $cars->published = false;
// }

// Route::get('news', function () {
//         return view('news');
//     });

    // Route::post('addnews', function () {
    //     return 'news added';
    // })->name('newsadded'); 

    Route::get('addnews',[NewsController ::class, 'create']);// يعرض ألنموذج
Route::post('newsadded',[NewsController ::class, 'store'])->name('newsadded');

//أول واحده اسم ال url 
//تاني واحده الاسم الي في الكونترولر
//اسم الراوت هو الي في الاكشن في صفحة البلاد ->

