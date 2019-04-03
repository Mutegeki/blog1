<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // reset the users table
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('users')->truncate();

        // generate 3 users/author
        DB::table('users')->insert([
            [
                'name' => "Brian Mute",
                'email' => "brian@test.com",
                'password' => bcrypt('secret')
            ],
            [
                'name' => "kiiza Mute",
                'email' => "kiiza@test.com",
                'password' => bcrypt('secret')
            ],
            [
                'name' => "ann Mute",
                'email' => "annmute@test.com",
                'password' => bcrypt('secret')
            ],
        ])
    }
}
