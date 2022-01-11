<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\HumTemp;
use App\Models\Microphone;
use App\Models\MQ135;
use App\Models\Overarching;
use Carbon\Carbon;


class ApiController extends Controller
{
    public function getAllUsers() {
        $users = User::all()->toJson(JSON_PRETTY_PRINT);
        return response($users, 200);
    }

    public function getMQ135Readings() {
        $mq135Readings = MQ135::all()->toJson(JSON_PRETTY_PRINT);
        return response($mq135Readings, 200);
    }

    public function getMicrophoneReadings() {
        $microphoneReadings = Microphone::all()->toJson(JSON_PRETTY_PRINT);
        return response($microphoneReadings, 200);
    }

    public function getHumTempReadings() {
        $humtempReadings = HumTemp::all()->toJson(JSON_PRETTY_PRINT);
        return response($humtempReadings, 200);
    }

    public function getOverarchingReadings() {
        $overarchingReadings = Overarching::get()->toJson(JSON_PRETTY_PRINT);
        return response($overarchingReadings, 200);
    }

    public function createOverarchingReading(Request $request) {
        $overarchingReading = new Overarching;
        $overarchingReading->decibel = $request->decibel;

        $overarchingReading->save();
        return response()->json([
            "message" => "Overarching record was created"
        ], 201);
    }

    public function createMQ135Reading(Request $request) {
        $mq135Reading = new MQ135;
        $mq135Reading->airQuality = $request->airQuality;
        $mq135Reading->timeSpentMs = $request->timeSpentMs;
        $mq135Reading->timestampDate = Carbon::today()->toDateTimeString();
        $mq135Reading->timestampTime = Carbon::now()->toTimeString();

        $mq135Reading->save();
        return response()->json([
            "message" => "MQ135 record was created"
        ], 201);
    }

    public function createMicrophoneReading(Request $request) {
        $microphoneReading = new Microphone;
        $microphoneReading->decibel = $request->decibel;
        $microphoneReading->timeSpentMs = $request->timeSpentMs;
        $microphoneReading->timestampDate = Carbon::today()->toDateTimeString();
        $microphoneReading->timestampTime = Carbon::now()->toTimeString();

        $microphoneReading->save();
        return response()->json([
            "message" => "Microphone record was created"
        ], 201);
    }

    public function createHumTempReading(Request $request) {
        $humtempReading = new HumTemp;
        $humtempReading->humidity = $request->humidity;
        $humtempReading->temperature = $request->temperature;
        $humtempReading->timeSpentMs = $request->timeSpentMs;
        $humtempReading->timestampDate = Carbon::today()->toDateTimeString();
        $humtempReading->timestampTime = Carbon::now()->toTimeString();

        $humtempReading->save();
        return response()->json([
            "message" => "HumTemp record was created"
        ], 201);
    }
}
