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
        \App\User::create([
            'name' => 'gary',
            'username' => 'gary',
            'email' => 'gary@gmail.com',
            'password' => bcrypt('garygarygary123'),
            'remember_token' => str_random(10)
        ]);
    }
}
