<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Item::create([
            'title'             => 'Algebra I',
            'description'       => 'If y(x-1)=z then x= ',
            'test_id'           => 1,
            'count'             => 5,
            'type'              => 0,
        ]);

        \App\Models\Item::create([
            'title'             => 'Simple Math',
            'description'       => 'Which of the following values is equal to 34(58+9)',
            'test_id'           => 1,
            'count'             => 5,
            'type'              => 1,
        ]);

        \App\Models\Item::create([
            'title'             => 'Trigonometry',
            'description'       => 'Two angles of a triangle measure 15° and 85 °. What is the measure for the third angle?',
            'test_id'           => 1,
            'count'             => 5,
            'type'              => 0,
        ]);

        \App\Models\Item::create([
            'title'             => 'Fraction',
            'description'       => 'Which of the following fractions is equal to 5/6?',
            'test_id'           => 1,
            'count'             => 5,
            'type'              => 1,
        ]);

        \App\Models\Item::create([
            'title'             => 'Algebra II',
            'description'       => 'If 3x=6x-15 then x + 8 =',
            'test_id'           => 1,
            'count'             => 4,
            'type'              => 1,
        ]);

        \App\Models\Item::create([
            'title'             => 'True or False',
            'description'       => 'Rawr (write exactly True or False)',
            'test_id'           => 1,
            'count'             => 2,
            'type'              => 2,
        ]);

        \App\Models\Item::create([
            'title'             => 'no answer',
            'description'       => 'no answer',
            'test_id'           => 1,
            'count'             => 4,
            'type'              => 1,
        ]);
    }
}
