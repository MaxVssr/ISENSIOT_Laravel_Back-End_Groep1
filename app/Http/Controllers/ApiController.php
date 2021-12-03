<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\HumTemp;
use App\Models\Microphone;
use App\Models\MQ135;
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

    public function createMQ135Reading(Request $request) {
        $mq135Reading = new MQ135;
        $mq135Reading->NH3 = $request->NH3;
        $mq135Reading->No2 = $request->No2;
        $mq135Reading->alcohol = $request->alcohol;
        $mq135Reading->benzene = $request->benzene;
        $mq135Reading->smoke = $request->smoke;
        $mq135Reading->CO2 = $request->CO2;
        $mq135Reading->updated_at = Carbon::now();

        $mq135Reading->save();
        return response()->json([
            "message" => "MQ135 record was created"
        ], 201);
    }

    public function createMicrophoneReading(Request $request) {
        $microphoneReading = new Microphone;
        $microphoneReading->decibel = $request->decibel;
        $microphoneReading->updated_at = Carbon::now();

        $microphoneReading->save();
        return response()->json([
            "message" => "Microphone record was created"
        ], 201);
    }

    public function createHumTempReading(Request $request) {
        $humtempReading = new HumTemp;
        $humtempReading->humidity = $request->humidity;
        $humtempReading->temperature = $request->temperature;
        $humtempReading->updated_at = Carbon::now();

        $humtempReading->save();
        return response()->json([
            "message" => "HumTemp record was created"
        ], 201);
    }
}
