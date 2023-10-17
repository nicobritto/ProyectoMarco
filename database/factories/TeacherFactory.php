<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Teacher>
 */
class TeacherFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->text(20),
            'specialization' => fake()->text(15),
            'email' =>  fake()->unique()->safeEmail(),
            'hireDate' => fake()->date(),
            'rank' => fake()->randomElement(['Grado 1', 'Grado 2', 'Grado 3'])
        ];
    }
}
