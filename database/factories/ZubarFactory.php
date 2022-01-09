<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Ordinacija;

class ZubarFactory extends Factory
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
            'godine_iskustva' => $this->faker->numberBetween($min = 0, $max = 55),
            'ord_id' => Ordinacija::factory()
        ];
    }
}
