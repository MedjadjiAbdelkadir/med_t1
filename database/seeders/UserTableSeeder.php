<?php

namespace Database\Seeders;

use App\Models\User;
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
        User::create([
            'first_name' => 'User A',
            'last_name' => 'User A',
            'email' => 'user1@gmail.com',
            'phone' => '0788996688',
            'password' => 'user12345',
            'role' => 'USER',
            'status'=> 'ACTIVE',
        ]);
        User::create([
            'first_name' => 'User B',
            'last_name' => 'User B',
            'email' => 'user2@gmail.com',
            'phone' => '0788996677',
            'password' => 'user12345',
            'role' => 'USER',
            'status'=> 'ACTIVE',
        ]);
    }
}
