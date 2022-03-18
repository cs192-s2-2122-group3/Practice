<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = \App\Models\User::class;

    public function definition()
    {
        //'$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        return [
            'first_name'        => $this->faker->firstName,
            'middle_name'       => $this->faker->lastName,
            'last_name'         => $this->faker->lastName,
            'user_name'         => $this->faker->userName(),

            'birth_date'        => now(),
            'role'              => 'student',
            
            'email'             => $this->faker->unique()->safeEmail(),
            'password'          => bcrypt($this->faker->password(6)),
            'description'       => $this->faker->paragraph,
            
            'email_verified_at' => now(),
            'remember_token'    => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
