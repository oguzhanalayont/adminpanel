<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        // Admin user
        User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin123'),
        ]);

        // Regular users
        User::create([
            'name' => 'oguz',
            'email' => 'oguz@example.com',
            'password' => Hash::make('password'),
        ]);

        User::create([
            'name' => 'ali',
            'email' => 'ali@example.com',
            'password' => Hash::make('password'),
        ]);

    }
}