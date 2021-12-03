<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class MQ135TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mq135')->insert([
            'NH3' => '200',
            'NO2' => '16',
            'Alcohol' => '38',
            'Benzene' => '42',
            'Smoke' => '14',
            'CO2' => '23'
        ]);
    }
}
