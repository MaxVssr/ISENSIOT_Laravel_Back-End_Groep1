<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\HumTemp;
use App\Models\Microphone;
use App\Models\Pms5003;
use App\Models\Pollen;
use Carbon\Carbon;


class ApiController extends Controller
{
    public function getAllUsers() {
        $users = User::all()->toJson(JSON_PRETTY_PRINT);
        return response($users, 200);
    }

    public function getPms5003Readings() {
        $pms5003Readings = Pms5003::all()->toJson(JSON_PRETTY_PRINT);
        return response($pms5003Readings, 200);
    }

    public function getMicrophoneReadings() {
        $microphoneReadings = Microphone::all()->toJson(JSON_PRETTY_PRINT);
        return response($microphoneReadings, 200);
    }

    public function getHumTempReadings() {
        $humtempReadings = HumTemp::all()->toJson(JSON_PRETTY_PRINT);
        return response($humtempReadings, 200);
    }

        public function getPollenReadings() {
        $pollenReadings = Pollen::all()->toJson(JSON_PRETTY_PRINT);
        return response($pollenReadings, 200);
    }

    public function createPms5003Reading(Request $request) {
        $pms5003Reading = new Pms5003;
        $pms5003Reading->pm1 = $request->pm1;
        $pms5003Reading->pm25 = $request->pm25;
        $pms5003Reading->pm10 = $request->pm10;
        $pms5003Reading->timeSpentMs = $request->timeSpentMs;
        $pms5003Reading->timestampDate = Carbon::today()->toDateTimeString();
        $pms5003Reading->timestampTime = Carbon::now()->toTimeString();

        $pms5003Reading->save();
        return response()->json([
            "message" => "PMS5003 record was created"
        ], 201);
    }

    public function createMicrophoneReading(Request $request) {
        $microphoneReading = new Microphone;
        $microphoneReading->soundPollution = $request->soundPollution;
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

    public function createPollenReading(Request $request) {
        $pollenReading = new Pollen;
        $pollenReading->grass_pollen_count = $request->grass_pollen_count;
        $pollenReading->tree_pollen_count = $request->tree_pollen_count;
        $pollenReading->weed_pollen_count = $request->weed_pollen_count;
        $pollenReading->grass_pollen_risk = $request->grass_pollen_risk;
        $pollenReading->tree_pollen_risk = $request->tree_pollen_risk;
        $pollenReading->weed_pollen_risk = $request->weed_pollen_risk;
        $pollenReading->timestampDate = $request->timestampDate;
        $pollenReading->timestampTime = $request->timestampTime;
        // $pollenReading->timestampDate = Carbon::today()->toDateTimeString();
        // $pollenReading->timestampTime = Carbon::now()->toTimeString();

        $pollenReading->save();
        return response()->json([
            "message" => "Pollen record was created"
        ], 201);
    }
}
