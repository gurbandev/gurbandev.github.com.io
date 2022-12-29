<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */


    public function definition()
    {
        $gender = rand(0, 1);
        return [
            'first_name' => $gender ? fake()->firstNameFemale() : fake()->firstNameMale(),
            'last_name' =>fake() ->lastName,
            'phone' => rand(60000000, 65999999),
            'phone2' => rand(0, 4) ? rand(60000000, 65999999) : null,
            'brithday' => fake() -> dateTimeBetween($starDate = '-30 years', $endDate = '-10 years'),
        ];
    }
}
