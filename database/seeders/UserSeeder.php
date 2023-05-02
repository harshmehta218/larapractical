<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'name' => 'admin@admin.com',
                'email' => 'admin@admin.com',
                'password' => Hash::make('123456'),
                'role' => 'admin',
            ],
            [
                'name' => 'testuserone',
                'email' => 'testuserone@gmail.com',
                'password' => Hash::make('testuserone@123'),
                'role' => 'user',
            ],
            [
                'name' => 'testusertwo',
                'email' => 'testusertwo@gmail.com',
                'password' => Hash::make('testusertwo@123'),
                'role' => 'user',
            ],
            [
                'name' => 'testuserthree',
                'email' => 'testuserthree@gmail.com',
                'password' => Hash::make('testuserthree@123'),
                'role' => 'user',
            ],
        ];

        User::insert($user);
    }
}
