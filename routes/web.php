<?php

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

Route::get('/playground', function () {
    Log::info("enter");
    event(new \App\Events\PlaygroundEvent());
    return null;
});

Route::get('/ws', function () {
    $user_id=1;
    $type="user";
   return view('index',compact('user_id','type'));
});
