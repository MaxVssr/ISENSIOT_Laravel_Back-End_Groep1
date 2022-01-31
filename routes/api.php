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
Route::get('pms5003', [ApiController::class, 'getPms5003Readings']);
Route::get('microphone', [ApiController::class, 'getMicrophoneReadings']);
Route::get('humtemp', [ApiController::class, 'getHumTempReadings']);
Route::get('pollen', [ApiController::class, 'getPollenReadings']);

Route::post('createpms5003', [ApiController::class, 'createPms5003Reading']);
Route::post('createmicrophone', [ApiController::class, 'createMicrophoneReading']);
Route::post('createhumtemp', [ApiController::class, 'createHumTempReading']);
Route::post('createpollen', [ApiController::class,  'createPollenReading']);

