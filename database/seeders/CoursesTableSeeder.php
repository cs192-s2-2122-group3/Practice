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
        // \App\Models\Course::factory(50)->create();

        $sample = \App\Models\Course::create([
            'title'             => 'CS 192',
            'description'       => 'Software engineering is the branch of computer science that deals with the design, development, testing, and maintenance of software applications. Software engineers apply engineering principles and knowledge of programming languages to build software solutions for end users.',
        ]);
        
        $sample->users()->attach(1, ['is_handler' => 1]);
        $sample->users()->attach(3, ['is_handler' => 1]);
        $sample->users()->attach(4, ['is_handler' => 1]);
        $sample->users()->attach(5, ['is_handler' => 1]);

        foreach(\App\Models\Course::all() as $course) {
            $users = \App\Models\User::inRandomOrder()->take(rand(10,20))->get();

            foreach($users as $user) {
                $course->users()->attach($user->id,['is_handler' => ($user->role === 'faculty' || $user->role === 'admin')]);
            }
        }
    }
}
