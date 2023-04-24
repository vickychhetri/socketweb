<?php

use App\Http\Controllers\authcontroller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/


Route::post('/login', [authController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {

    Route::post('/chat-message', function (Request $request) {
        Log::info($request->all());
        event(new \App\Events\ChatMessageEvent((string)$request->message,$request->user_id));
        return response()->json([
            'success'=>true
        ],200);
    });


});

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});
