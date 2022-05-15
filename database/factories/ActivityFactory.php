<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Activity;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Activity>
 */
class ActivityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
        'name' => $this->faker->sentence(2),

            //
            //
        ];
    }
}
