<?php

namespace Database\Factories;

use App\Models\Test;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

use App\Models\Course;
use App\Models\User;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Test>
 */
class TestFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = \App\Models\Test::class;

    public function definition()
    {
        $users = User::inRandomOrder()->get();

        return [
            'title'             => $this->faker->word,
            'description'       => $this->faker->paragraph,
            'state'             => $this->faker->numberBetween(0, 1),
            'user_id'           => User::where('role', '=', 'faculty')
                                    ->orWhere('role', '=', 'admin')
                                    ->get()
                                    ->random(1)[0]->id,
            'course_id'         => Course::all()->random(1)[0]->id,
            'count'             => 0,
        ];
    }
}
