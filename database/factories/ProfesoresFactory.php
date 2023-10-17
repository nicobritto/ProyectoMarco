<?php

namespace Database\Factories;

use App\Models\Profesores;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProfesoresFactory extends Factory
{
    protected $model = Profesores::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */

    public function definition()
    {
        return [
            'nombre' => $this->faker->name(),
            'contacto' => $this->faker->numerify(),
            'escalafon' => $this->faker->randomDigit()
        ];
    }
}
