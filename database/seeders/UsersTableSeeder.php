<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use bcrypt;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Tim',
            'email' => 'timbakker123@gmail.com',
            'password' => bcrypt('wachtwoord'),
        ]);

        DB::table('users')->insert([
            'name' => 'John',
            'email' => 'john@example.com',
            'password' => bcrypt('password'),
            'role' => 'Admin',
        ]);
    }
}
