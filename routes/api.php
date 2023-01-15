<?php

use App\Http\Controllers\ClintController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
//MAKE Route
Route::get('show_all',[ClintController::class,'index']);
Route::get('show_one/{id}',[ClintController::class,'show']);
Route::post('create',[ClintController::class,'store']);
Route::put('update/{id}',[ClintController::class,'update']);
Route::delete('delete/{id}',[ClintController::class,'destroy']);
