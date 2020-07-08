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
            'name' => 'naveen',
            'role' => '1',
            'password' => Hash::make('1234'),
            'email'  =>  'naveen@gmail.com',
            'remember_token' =>  str_random(10),

        ]);
    }
}
