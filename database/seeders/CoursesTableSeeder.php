<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Course::factory(50)->create();

        foreach(\App\Models\Course::all() as $course) {
            $users = \App\Models\User::inRandomOrder()->take(rand(5,10))->get();

            foreach($users as $user) {
                $course->users()->attach($user->id,['is_handler' => ($user->role === 'faculty' || $user->role === 'admin')]);
            }
        }
        
    }
}
