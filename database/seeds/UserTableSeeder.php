<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       User::create([

       	'name' => 'user',
       	'email' => 'user@gmail.com',
       	'password' => Hash::make(123456),

       ]) ;
       User::create([

       	'name' => 'admin',
       	'email' => 'admin@gmail.com',
       	'password' => Hash::make(123456),

       ]) ;
       User::create([

       	'name' => 'super admin',
       	'email' => 'superadmin@gmail.com',
       	'password' => Hash::make(123456),

       ]) ;
    }
}
