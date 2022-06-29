<?php

use App\Http\Controllers\KendaraanController;
use App\Http\Controllers\MobilController;
use App\Http\Controllers\MotorController;
use App\Http\Controllers\AuthController;
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


Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::post('/logout', [AuthController::class, 'logout']);

    Route::get('/kendaraan', [KendaraanController::class, 'index']);
    Route::post('/kendaraan', [KendaraanController::class, 'store']);
    Route::get('/kendaraan/{id}', [KendaraanController::class, 'show']);
    Route::put('/kendaraan/{id}', [KendaraanController::class, 'update']);
    Route::delete('/kendaraan/{id}', [KendaraanController::class, 'destroy']);

    Route::get('/mobil', [MobilController::class, 'index']);
    Route::post('/mobil', [MobilController::class, 'store']);
    Route::get('/mobil/{id}', [MobilController::class, 'show']);
    Route::put('/mobil/{id}', [MobilController::class, 'update']);
    Route::delete('/mobil/{id}', [MobilController::class, 'destroy']);

    Route::get('/motor', [MotorController::class, 'index']);
    Route::post('/motor', [MotorController::class, 'store']);
    Route::get('/motor/{id}', [MotorController::class, 'show']);
    Route::put('/motor/{id}', [MotorController::class, 'update']);
    Route::delete('/motor/{id}', [MotorController::class, 'destroy']);
});
