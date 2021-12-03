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
            'No2' => '16',
            'alcohol' => '38',
            'benzene' => '42',
            'smoke' => '14',
            'CO2' => '23'
        ]);
    }
}
