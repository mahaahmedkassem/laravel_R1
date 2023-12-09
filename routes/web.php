<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExampleController;
use App\Http\Controllers\CarlistController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\addcar;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\news;
use App\Http\Controllers\ClintController;
use App\Http\Controllers\PlaceController;


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

Route::get('showupload',[ExampleController::class, 'showupload']);

Route::post('upload',[ExampleController::class, 'upload'])->name('upload');

Route::get('place',[ExampleController::class, 'place']);
Route::get('blog',[ExampleController::class, 'blog']);





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
Route::get('trashed',[CarController ::class, 'trashed']);
Route::get('restorecar/{id}',[CarController ::class, 'restore']);   //لينك في البلاد بتاع تراش
Route::get('forcedelete/{id}',[CarController ::class, 'forcedelete']);

//أول واحده اسم ال url انا بختار اي اسم
//تاني واحده الاسم الي في الكونترولر
//اسم الراوت هو الي في الاكشن في صفحة البلاد ->
//ا في الراوت الاولاني بيبقى في create ده بيظهر الفورم
// ده بضيف للداتا بيز في الراوت التاني بيقى في الستور في الكونترولر
Route::get('thecar',[CarController ::class, 'index']);

Route::get('editCar/{id}',[CarController ::class, 'edit']);

//اسم url نفس الاسم الي كتبناه في الايديت في البلاد
Route::put('updateCar/{id}',[CarController ::class, 'update'])->name('updateCar');
Route::get('deleteCar/{id}',[CarController ::class, 'destroy']);
Route::get('carDetail/{id}', [CarController::class, 'show'])->name('carDetail');










   Route::get('addnews',[NewsController ::class, 'create']);//  بتاع الادخال يعرض ألنموذج
Route::post('newsadded',[NewsController ::class, 'store'])->name('newsadded');
//اللينك الي بيروحله لما نضغط سبميت
Route::get('shownews',[NewsController ::class, 'index']); // يعرض جدول الداتا الي في الجدول
Route::get('editNews/{id}',[NewsController ::class, 'edit']);  
// الاكشن بتاعه هيبقى Updatenews   اسم البلاد فايل الجديد في ال الايديت بتاع الكونترولر
 //لاسم بتاع الايديت  الراوت ده عملته عن طريق اللينك  editNews ده الي كتبته في البلاد
Route::put('updateNews/{id}',[NewsController ::class, 'update'])->name('updateNew');
Route::get('DeleteNews/{id}',[NewsController ::class, 'destroy']);
Route::get('NewsDetail/{id}', [NewsController::class, 'show'])->name('NewsDetail');
Route::get('trashednews',[NewsController ::class, 'trashed']);
Route::get('restorenews/{id}',[NewsController ::class, 'restore']);
Route::get('forcedeletenews/{id}',[NewsController::class, 'forcedelete']);






Route::get('addclient',[ClintController ::class, 'create']);
Route::post('clintadded',[ClintController ::class, 'store'])->name('clientadded');
Route::get('showclients',[ClintController ::class, 'index']);
Route::get('editClients/{id}',[ClintController ::class, 'edit']); 
Route::put('updateclient/{id}',[ClintController::class, 'update'])->name('updateclient');
Route::get('deleteClients/{id}',[ClintController ::class, 'destroy']);
Route::get('clientDetail/{id}', [ClintController::class, 'show'])->name('clientDetail');
Route::get('trashedclient',[ClintController ::class, 'trashed']);
Route::get('clientrestore/{id}',[ClintController ::class, 'restore']);
Route::get('forcedeleteClients/{id}',[ClintController::class, 'forcedelete']);



Route::get('addplaces',[PlaceController::class, 'create']);
Route::post('placeadded',[PlaceController ::class, 'store'])->name('placeadded');
Route::get('showplaces',[PlaceController::class, 'index']);

