<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Project\CategoryController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
//Category//
Route::get('category',[CategoryController::class,'index']);
Route::get('category/{slug}',[CategoryController::class,'show']);

Route::get('category/delete/{slug}',[CategoryController::class,'delete']);
Route::post('category',[CategoryController::class,'store']);
Route::post('category/update/{slug}',[CategoryController::class,'update']);
//End Category//