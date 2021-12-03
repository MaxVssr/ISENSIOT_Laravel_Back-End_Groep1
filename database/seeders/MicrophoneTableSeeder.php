<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class MicrophoneTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('microphone')->insert([
            'decibel' => '73.1',
        ]);
    }
}
