<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class OrdinacijaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'naziv_ordinacije' => $this->faker->company(),
            'kapacitet' => $this->faker->numberBetween($min = 1, $max = 10),
            'vlasnik' => $this->faker->name(),
            'website' => $this->faker->url()

        ];
    }
}
