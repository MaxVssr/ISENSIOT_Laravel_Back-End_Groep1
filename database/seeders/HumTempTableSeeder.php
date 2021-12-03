<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class HumTempTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('humtemp')->insert([
            'humidity' => '70.8',
            'temperature' => '18.3',
        ]);
    }
}
