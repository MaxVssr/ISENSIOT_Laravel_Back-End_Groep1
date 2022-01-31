<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UsersTableSeeder::class,
            MicrophoneTableSeeder::class,
            Pms5003TableSeeder::class,
            HumTempTableSeeder::class,
        ]);
    }
}
