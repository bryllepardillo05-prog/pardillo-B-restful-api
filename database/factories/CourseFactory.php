<?php

namespace Database\Factories;

use App\Models\Course;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [


        'name' => randomElement ([

        'juan Dela Cruz'

        ]),

        'code' => fake()->name()-> fake()->firstname()-> fake()->email()-> fake()->phoneNumber()-> fake()->address()-> fake()->city()-> fake()->country() 
            //
        ];
    }
}
