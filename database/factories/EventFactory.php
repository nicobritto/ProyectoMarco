<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->text(30),
            'description' => fake()->text(150),
            'status' => fake()->randomElement(['Borrador', 'Publicado']),
            'type' => fake()->randomElement(['Cocienrto', 'Futbol', 'Teatro', 'Standuo Comedy'. 'Festival']),
            'date' => fake()->date(),
        ];
    }
}
