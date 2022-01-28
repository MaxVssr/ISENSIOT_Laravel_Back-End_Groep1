<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class PollenTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pollen')->insert([
            'grass_pollen_count' => '0',
            'tree_pollen_count' => '40',
            'weed_pollen_count' => '0',
            'grass_pollen_risk' => 'Low',
            'tree_pollen_risk' => 'Low',
            'weed_pollen_risk' => 'Low',
            'timestampDate' => '2022-01-29',
            'timestampTime' => '16:13:10'
        ]);
    }
}
