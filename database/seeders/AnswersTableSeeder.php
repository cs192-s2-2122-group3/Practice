<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AnswersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Answer::create([
            'item_id'           => 1,
            'description'       => 'y-z',
            'type'              => 0,
        ]);

        \App\Models\Answer::create([
            'item_id'           => 1,
            'description'       => 'z/y + 1',
            'type'              => 1,
        ]);

        \App\Models\Answer::create([
            'item_id'           => 1,
            'description'       => 'y(z-1)',
            'type'              => 0,
        ]);

        \App\Models\Answer::create([
            'item_id'           => 1,
            'description'       => 'z(y-1)',
            'type'              => 0,
        ]);

        \App\Models\Answer::create([
            'item_id'           => 1,
            'description'       => '1-zy',
            'type'              => 0,
        ]);

        \App\Models\Answer::create([
            'item_id'           => 2,
            'description'       => '34 * 67',
            'type'              => 1,
        ]);

        \App\Models\Answer::create([
            'item_id'           => 2,
            'description'       => '58(34+9)',
            'type'              => 0,
        ]);

        \App\Models\Answer::create([
            'item_id'           => 2,
            'description'       => '34 * 58 + 34 * 9',
            'type'              => 1,
        ]);

        \App\Models\Answer::create([
            'item_id'           => 2,
            'description'       => '1,972 + 306',
            'type'              => 1,
        ]);

        \App\Models\Answer::create([
            'item_id'           => 2,
            'description'       => '(9 + 58) 34',
            'type'              => 1,
        ]);

        \App\Models\Answer::create([
            'item_id'           => 3,
            'description'       => '50°',
            'type'              => 0,
        ]);

        \App\Models\Answer::create([
            'item_id'           => 3,
            'description'       => '55°',
            'type'              => 0,
        ]);

        \App\Models\Answer::create([
            'item_id'           => 3,
            'description'       => '60°',
            'type'              => 0,
        ]);

        \App\Models\Answer::create([
            'item_id'           => 3,
            'description'       => '80°',
            'type'              => 1,
        ]);

        \App\Models\Answer::create([
            'item_id'           => 3,
            'description'       => '90°',
            'type'              => 0,
        ]);

        \App\Models\Answer::create([
            'item_id'           => 4,
            'description'       => '20/30',
            'type'              => 0,
        ]);

        \App\Models\Answer::create([
            'item_id'           => 4,
            'description'       => '15/18',
            'type'              => 1,
        ]);

        \App\Models\Answer::create([
            'item_id'           => 4,
            'description'       => '25/30',
            'type'              => 1,
        ]);

        \App\Models\Answer::create([
            'item_id'           => 4,
            'description'       => '20/10',
            'type'              => 0,
        ]);

        \App\Models\Answer::create([
            'item_id'           => 4,
            'description'       => '2/7',
            'type'              => 0,
        ]);

        \App\Models\Answer::create([
            'item_id'           => 5,
            'description'       => '10',
            'type'              => 0,
        ]);

        \App\Models\Answer::create([
            'item_id'           => 5,
            'description'       => '11',
            'type'              => 0,
        ]);

        \App\Models\Answer::create([
            'item_id'           => 5,
            'description'       => '12',
            'type'              => 0,
        ]);

        \App\Models\Answer::create([
            'item_id'           => 5,
            'description'       => '13',
            'type'              => 1,
        ]);

        \App\Models\Answer::create([
            'item_id'           => 6,
            'description'       => 'True',
            'type'              => 1,
        ]);

        \App\Models\Answer::create([
            'item_id'           => 6,
            'description'       => 'true',
            'type'              => 1,
        ]);

        \App\Models\Answer::create([
            'item_id'           => 7,
            'description'       => 'not the answer',
            'type'              => 0,
        ]);

        \App\Models\Answer::create([
            'item_id'           => 7,
            'description'       => 'not the answernot the answer',
            'type'              => 0,
        ]);

        \App\Models\Answer::create([
            'item_id'           => 7,
            'description'       => 'not the answernot the answernot the answer',
            'type'              => 0,
        ]);

        \App\Models\Answer::create([
            'item_id'           => 7,
            'description'       => 'not the answernot the answernot the answernot the answer',
            'type'              => 0,
        ]);
    }
}
