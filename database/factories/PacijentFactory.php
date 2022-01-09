<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Zubar;

class PacijentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'ime' => $this->faker->firstName(),
            'prezime' => $this->faker->lastName(),
            'broj_kartona' => $this->faker->numberBetween($min = 1, $max = 1500),
            'adresa' => $this->faker->streetAddress(),
            'grad' => $this->faker->city(),
            'zubar_id' => Zubar::factory()
        ];
    }
}
