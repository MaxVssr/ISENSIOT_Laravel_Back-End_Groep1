<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::get('readings/users', [ApiController::class, 'getAllUsers']);
Route::get('readings/mq135', [ApiController::class, 'getMQ135Readings']);
Route::get('readings/microphone', [ApiController::class, 'getMicrophoneReadings']);
Route::get('readings/humtemp', [ApiController::class, 'getHumTempReadings']);
Route::get('readings/all', [ApiController::class, 'getOverarchingReadings']);

Route::post('createmq135', [ApiController::class, 'createMQ135Reading']);
Route::post('createmicrophone', [ApiController::class, 'createMicrophoneReading']);
Route::post('createhumtemp', [ApiController::class, 'createHumTempReading']);
Route::post('create', [ApiController::class, 'createOverarchingReading']);

