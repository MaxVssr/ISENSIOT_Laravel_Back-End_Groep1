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
Route::get('users', [ApiController::class, 'getAllUsers']);
Route::get('mq135', [ApiController::class, 'getMQ135Readings']);
Route::get('microphone', [ApiController::class, 'getMicrophoneReadings']);
Route::get('humtemp', [ApiController::class, 'getHumTempReadings']);

Route::post('createmq135', [ApiController::class, 'createMQ135Reading']);
Route::post('createmicrophone', [ApiController::class, 'createMicrophoneReading']);
Route::post('createhumtemp', [ApiController::class, 'createHumTempReading']);

