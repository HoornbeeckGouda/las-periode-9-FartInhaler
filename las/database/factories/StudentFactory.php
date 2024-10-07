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
    public function definition(): array
    {
        $firstName = $this->faker->firstName();
        $lastName = $this->faker->lastName();
        $officialName = $firstName . ' ' . $lastName; 
         
        return [
            'name' => $firstName,
            'surname' => $lastName,
            'official_name' => $officialName,
            'zipcode' => $this->faker->postcode(),
            'city' => $this->faker->city(),
        ];
    }
}
