<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Person>
 */
class PersonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->sentence(2),
            'ape_patrno' => $this->faker->sentence(2),
            'ape_materno' => $this->faker->sentence(2),
            'dni' => $this->faker->sentence(2),
            'fe_nacimiento' => $this->faker->sentence(2),
            'es_civil' => $this->faker->randomElement([1, 2, 3, 4]),
            'sexo' => $this->faker->randomElement([1, 2, 3]),
            'direccion' => $this->faker->text(),
            'es_persona' => $this->faker->text(),
            'fa_parentesco' => $this->faker->text(),
            'parentesco' => $this->faker->text(),
        ];
    }
}
