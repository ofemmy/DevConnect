<?php

use App\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {



        $user = factory(User::class, 5)->create();
        // User::insert([
        //     'name' => 'Fagbemi Oladayo',
        //     'password' => 'password',
        //     'email' => 'email@email.com',
        //     'username' => 'ofemmy',
        // ]);
        // User::insert([
        //     'name' => 'John Grace',
        //     'password' => 'enterpassword',
        //     'email' => 'test@email.com',
        //     'username' => 'grace007',
        // ]);
    }
}
