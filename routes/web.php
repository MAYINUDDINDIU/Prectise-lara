<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Usercontroller;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/{name}', function ($name) {
//     echo $name;
//     return view('welcome',['name'=>$name]);
// });

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/about',function(){
//  return view('/about');

// });
// Route::get('contact',function(){
// return view('/contact');
// });
Route::view('about','/about');
Route::view('contact','/contact');
Route::view('users','/users');


Route::get("user",[Usercontroller::class,'show']);
// Route::get('user','Usercontroller@show');