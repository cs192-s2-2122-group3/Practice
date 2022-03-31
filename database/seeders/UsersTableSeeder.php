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

        \App\Models\User::factory(100)->create();
    }
}
