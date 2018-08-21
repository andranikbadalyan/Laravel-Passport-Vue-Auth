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
        $user = new User();
        $user->name = 'Andranik Badalyan';
        $user->email = 'andranikvbadalyan@gmail.com';
        $user->password =  bcrypt('secret');
        $user->remember_token = str_random(10);
        $user->save();

    }
}
