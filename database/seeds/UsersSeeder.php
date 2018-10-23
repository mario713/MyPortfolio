<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public static function run()
    {
        $user = new User();
        $user->username = 'mario713';
        $user->password = bcrypt('QwErTy1@3$5^');
        $user->email = 'richiedev92@gmail.com';
        $user->assignRole('admin');
        $user->save();
    }
}
