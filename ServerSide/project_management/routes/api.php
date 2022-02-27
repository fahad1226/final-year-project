<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ProjectProposalController;
use App\Http\Controllers\TeamController;
use App\Models\Project;
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
Route::middleware('apiRules')->group(function () {
    Route::post('register', [AuthController::class, 'register']);
    Route::post('login', [AuthController::class, 'login']);
    Route::middleware('auth:sanctum')->group( function () {
        Route::post('/logout', [AuthController::class, 'logout']);
        Route::get('/profile/view', [AuthController::class, 'show']);
        Route::put('/profile/update', [AuthController::class, 'changeProfile']);
        Route::post('/password-update',[AuthController::class,'changePassword']);
        Route::apiResource('team',TeamController::class);
        Route::apiResource('user',UserController::class);
        Route::post('user/editProfile',[UserController::class,'editProfile']);
        Route::apiResource('project',ProjectController::class);
    });
});