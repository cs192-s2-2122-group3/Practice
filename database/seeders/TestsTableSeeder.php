<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class TestsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Test::create([
            'user_id'           => 1,
            'course_id'         => User::find(1)->handling()->first()->id,
            'title'             => 'Long Exam 1',
            'description'       => 'The Mathematics Placement Exam (MPE) is a 90-minute, 60-item multiple choice exam that tests skills and understandings from precalculus mathematics. It is designed to measure readiness for college courses in calculus and precalculus. Online, you may view an individual report that includes placement level and a list of topics that should be reviewed before the class begins.',
            'state'             => 1,
            'count'             => 7,
        ]);

        \App\Models\Test::factory(100)->create();
    }
}
