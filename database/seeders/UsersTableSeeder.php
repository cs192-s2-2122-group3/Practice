<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        \App\Models\User::create([
            // names
            'first_name'        => 'Rey Christian',
            'middle_name'       => 'Eustaquio',
            'last_name'         => 'Delos Reyes',
            'user_name'         => 'Mashiro',
            // additional info
            'birth_date'        => now(),
            'role'              => 'admin',
            // account details
            'email'             => 'redelosreyes3@up.edu.ph',
            'password'          => Hash::make('password'),
            'description'       => 'wuv u',
        ]);

        \App\Models\User::create([
            // names
            'first_name'        => 'Rann Daneal',
            'middle_name'       => 'Laforteza',
            'last_name'         => 'Villanueva',
            'user_name'         => 'Dana',
            // additional info
            'birth_date'        => now(),
            'role'              => 'admin',
            // account details
            'email'             => 'rlvillanueva3@up.edu.ph',
            'password'          => Hash::make('password'),
            'description'       => 'wuv u',
        ]);

        \App\Models\User::create([
            // names
            'first_name'        => 'Admin',
            'middle_name'       => 'New',
            'last_name'         => 'Sample',
            'user_name'         => 'admin1',
            // additional info
            'birth_date'        => now(),
            'role'              => 'admin',
            // account details
            'email'             => 'admin@up.edu.ph',
            'password'          => Hash::make('password'),
            'description'       => 'I am an admin',
        ]);

        \App\Models\User::create([
            // names
            'first_name'        => 'Faculty',
            'middle_name'       => 'New',
            'last_name'         => 'Sample',
            'user_name'         => 'faculty1',
            // additional info
            'birth_date'        => now(),
            'role'              => 'faculty',
            // account details
            'email'             => 'faculty@up.edu.ph',
            'password'          => Hash::make('password'),
            'description'       => 'I am a faculty member',
        ]);

        \App\Models\User::create([
            // names
            'first_name'        => 'Student',
            'middle_name'       => 'New',
            'last_name'         => 'Sample',
            'user_name'         => 'student1',
            // additional info
            'birth_date'        => now(),
            'role'              => 'student',
            // account details
            'email'             => 'student@up.edu.ph',
            'password'          => Hash::make('password'),
            'description'       => 'I am a student',
        ]);

        \App\Models\User::factory(100)->create();
    }
}
