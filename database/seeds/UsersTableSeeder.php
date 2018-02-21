<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'role_id' => 4,
            'active' => 1,
            'name' => 'manny',
            'username' => 'mannysantiago',
            'email' => 'emmanuelsantiago@gmail.com',
            'password' => bcrypt('kainos'),
            'remember_token' => str_random(10)
        ]);
    }
}
