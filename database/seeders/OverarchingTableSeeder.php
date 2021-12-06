<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class OverarchingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('overarching')->insert([
            'decibel' => '73.1',
            'NH3' => '200',
            'NO2' => '16',
            'Alcohol' => '38',
            'Benzene' => '42',
            'Smoke' => '14',
            'CO2' => '23',
            'humidity' => '70.8',
            'temperature' => '18.3',
        ])
    }
}
