<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Partner>
 */
class PartnerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'codigo' => $this->faker->sentence(2),
            'tipo' => $this->faker->sentence(2),
            'categoria' => $this->faker->randomElement([2, 4, 8, 15, 30]),
            'iamgen' => $this->faker->text(),
        ];
    }
}
